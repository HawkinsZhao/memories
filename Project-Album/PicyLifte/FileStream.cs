#region Using
using System;
using System.Collections.ObjectModel;
using System.Collections.Generic;
using System.Collections;
using System.Linq;
using System.Text;
using ICSharpCode.SharpZipLib.Zip;
using System.Windows.Media.Imaging;
using System.IO;
using System.Xml;
#endregion

namespace PicyLifte
{
    class FileStream
    {
        #region Class Setting

        public struct PlaStream
        {
            public string PlaName { get; set; }
            public string PlaDescription { get; set; }
            public BitmapImage PlaCover { get; set; }
            public PlaItem[] PlaItem { get; set; }
            public int PlaItemTotal { get; set; }
            public string PicPath { get; set; }
        }

        public  struct PlaItem
        {
            public string ItemName { get; set; }
            public string ItemShortName { get; set; }
            public string ItemCover { get; set; }
        }

        public struct PlaXmlPointNode
        {
            public int Top { get; set; }
            public int Left { get; set; }
            public string Text { get; set; }
        }
        #endregion

        #region Vars
        PlaItem[] Pli = new PlaItem[99];
        string TargetDir, TargetName;
        XmlDocument doc = new XmlDocument();
        PlaXmlPointNode[] pxpn;
        #endregion

        #region OpenMethod
        public PlaStream UnPackPla(string dir)
        {
            PlaStream ReturnPla = new PlaStream();
           try
            {
                TargetName = Path.GetFileNameWithoutExtension(dir);
                TargetDir = Environment.CurrentDirectory + @"\Temp\" + TargetName + DateTime.Now.ToFileTime().ToString()+ @"\";
                (new FastZip()).ExtractZip(dir, TargetDir, "");

                ReturnPla.PlaName = TargetName;
                ReturnPla.PlaCover = new BitmapImage(new Uri(TargetDir + GetTheCover(TargetDir)));
                ReturnPla.PicPath = TargetDir;
                ReturnPla.PlaDescription = GetDescription();
                ReturnPla.PlaItemTotal = doc.SelectSingleNode("rootnode/Pic").ChildNodes.Count;
                ReturnPla.PlaItem = GetThePicList();
                return ReturnPla;
            }
           catch
            {
                ReturnPla.PicPath = "Error";
                return ReturnPla;
            }
        }

        public PlaXmlPointNode[] GetPicPoint(string Dir,string FileName)
        {
            doc.Load(Dir+@"\xml.xml");
            try
            {
                XmlNodeList XL = doc.SelectSingleNode("rootnode/Pic/" + FileName).ChildNodes;
                PlaXmlPointNode[] pxpn = new PlaXmlPointNode[XL.Count];
                XmlNode xn;
                for (int i = 0; i < XL.Count; i++)
                {
                    xn = XL[i];
                    XmlElement xe = (XmlElement)xn;
                    pxpn[i].Top = Convert.ToInt16(xe.GetAttribute("Top"));
                    pxpn[i].Left = Convert.ToInt16(xe.GetAttribute("Left"));
                    pxpn[i].Text = xe.GetAttribute("Text");
                }
                return pxpn;
            }
            catch { return null; }
        }

        public PlaXmlPointNode[] GetPicPoint(XmlNode Pxn,string dir)
        {
            try
            {
                XmlDocument doc = new XmlDocument();
                doc.Load(dir + @"\xml.xml");
                XmlNodeList XL = Pxn.ChildNodes;
                pxpn = new PlaXmlPointNode[XL.Count];
                //MessageBox.Show(XL.Count.ToString());
                XmlNode xn;
                for (int i = 0; i < XL.Count; i++)
                {
                    xn = XL[i];
                    XmlElement xe = (XmlElement)xn;
                    pxpn[i].Top = Convert.ToInt16(xe.GetAttribute("Top"));
                    pxpn[i].Left = Convert.ToInt16(xe.GetAttribute("Left"));
                    pxpn[i].Text = xe.GetAttribute("Text");
                    //MessageBox.Show(pxpn[i].Top + "\r\n" + pxpn[i].Left + "\r\n" + pxpn[i].Text);
                }
                return pxpn;
            }
            catch { return null; }
        }

        public XmlNodeList GetPicList()
        {
            try
            {
                XmlNodeList XL = doc.SelectSingleNode("rootnode/Pic").ChildNodes;
                return XL;
            }
            catch { return null; }
        }

        public string GetTheCover(string Dir)
        {
            doc.Load(Dir + @"\xml.xml");
            XmlNode Xn = doc.SelectSingleNode("rootnode/Cover");
            return ((XmlElement)Xn).GetAttribute("Name");
        }

        public string GetDescription()
        {
            XmlNode Xn = doc.SelectSingleNode("rootnode/Cover");
            return ((XmlElement)Xn).GetAttribute("Description");
        }

        public PlaItem[] GetThePicList()
        {
            XmlNodeList Xl = doc.SelectSingleNode("rootnode/Pic").ChildNodes;
            PlaItem[] Pi = new PlaItem[Xl.Count];
            XmlNode xn;
            for (int i = 0; i < Xl.Count; i++)
            {
                xn = Xl[i];
                XmlElement xe = (XmlElement)xn;
                Pi[i].ItemShortName = Path.GetFileNameWithoutExtension(xe.GetAttribute("Name"));
                Pi[i].ItemName = xe.GetAttribute("Name");
                Pi[i].ItemCover = TargetDir + xe.GetAttribute("Name");
            }
            return Pi;
        }
        #endregion

        #region SaveMethod
        public Boolean SaveFile(string Cover,string name, string des, ObservableCollection<MainWindow.LVData> lvdata,string savedir)
        {
            DirectoryInfo di = new DirectoryInfo(Environment.CurrentDirectory + @"\Temp\SaveTemp");
            //MessageBox.Show(di.Exists.ToString());
            if (di.Exists==false) { di.Create();}
            File.Copy(Cover, Environment.CurrentDirectory + @"\Temp\SaveTemp\" + Path.GetFileName(Cover), true);
            XmlTextWriter writer = new XmlTextWriter(Environment.CurrentDirectory + @"\Temp\SaveTemp\xml.xml",System.Text.Encoding.UTF8);
            writer.Formatting = Formatting.Indented;
            writer.WriteStartDocument();
            writer.WriteStartElement("rootnode");
                writer.WriteStartElement("Cover");
                    writer.WriteAttributeString("Name", Path.GetFileName(Cover));
                    writer.WriteAttributeString("Description", des);
                writer.WriteEndElement();
                writer.WriteStartElement("Pic");
                foreach (MainWindow.LVData ld in lvdata)
                {
                    writer.WriteStartElement("pic");
                    writer.WriteAttributeString("ShortName", ld.ShortName);
                    writer.WriteAttributeString("Name",ld.Name);
                    writer.WriteFullEndElement();
                    File.Copy(ld.PicPath, Environment.CurrentDirectory + @"\Temp\SaveTemp\" + ld.Name,true);
                }
                writer.WriteEndElement();
            writer.WriteEndElement();
            writer.Close();
            FastZip fastZip = new FastZip();
            fastZip.CreateZip(savedir,Environment.CurrentDirectory + @"\Temp\SaveTemp\", false, "");
            return true;
        }

        public void RegviseFile(string PicName)
        {
            XmlNode Root = doc.SelectSingleNode("rootnode//Pic");
            XmlElement txe = doc.CreateElement("pic");
            txe.SetAttribute("ShortName", Path.GetFileNameWithoutExtension(PicName));
            txe.SetAttribute("Name", PicName);
            Root.AppendChild(txe);
        }

        public void UnRegFile(string PicName,string PicPath)
        {
            XmlNode Root = doc.SelectSingleNode("rootnode//Pic//pic[@Name=\'" + PicName + "\']");
            Root.ParentNode.RemoveChild(Root);
            doc.Save(PicPath + "\\xml.xml");
        }

        public Boolean SearchNode(string PicName)
        {
            XmlNode Root = doc.SelectSingleNode("rootnode//Pic//pic[@Name=\'" + PicName + "\']");
            if (Path.GetFileNameWithoutExtension(PicName) == "Cover") return true;
            if (Root != null)
                return true;
            else return false;
        }
        public Boolean SavePoint(string PicName,PlaXmlPointNode[] Pxpn,string dir)
        {
            try
           {
                XmlNodeList XL = doc.SelectSingleNode("rootnode//Pic").ChildNodes;
                XmlElement Xe;
                XmlNode Root = null;
                foreach (XmlNode Xn in XL)
                {
                    try
                    {
                        Root = doc.SelectSingleNode("rootnode//Pic//pic[@Name=\'" + PicName + "\']");
                        for (int i = Root.ChildNodes.Count - 1; i >= 0; i--)
                        {
                            Root.RemoveChild(Root.ChildNodes[i]);
                        }
                    }
                    catch 
                    {
                        Root = doc.SelectSingleNode("rootnode//Pic");
                        XmlElement txe = doc.CreateElement("pic");
                        txe.SetAttribute("ShortName", Path.GetFileNameWithoutExtension(PicName));
                        txe.SetAttribute("Name",PicName);
                        Root.AppendChild(txe);
                        Root = doc.SelectSingleNode("rootnode//Pic//pic[@Name=\'" + PicName + "\']");
                        for (int i = Root.ChildNodes.Count - 1; i >= 0; i--)
                        {
                            Root.RemoveChild(Root.ChildNodes[i]);
                        }
                    }
                   // MessageBox.Show("rootnode//Pic//pic[@Name=\'" + PicName + "\']");
                    for (int i = Root.ChildNodes.Count-1; i >=0; i--)
                    {
                        Root.RemoveChild(Root.ChildNodes[i]);
                    }
                    foreach (PlaXmlPointNode Px in Pxpn)
                    {
                        if (Px.Text == null) { continue; }
                        Xe = doc.CreateElement("Point");
                        Xe.SetAttribute("Top", Px.Top.ToString());
                        Xe.SetAttribute("Left", Px.Left.ToString());
                        Xe.SetAttribute("Text", Px.Text);
                        Root.AppendChild(Xe);
                    }
                    doc.Save(dir + @"\xml.xml");
                    break;
                }
                return true;
           }
           catch
           { return false; }
        }

        public Boolean SavePLA(string dir,string name,string des,string BeforePath)
        {
            try
            {
                //压缩后的文件名，压缩目录 ，是否递归          
                FastZip fastZip = new FastZip();
                File.Delete(BeforePath);
                XmlNode Root = doc.SelectSingleNode("rootnode//Cover");
                ((XmlElement)Root).SetAttribute("Description", des);
                doc.Save(dir + "xml.xml");
                fastZip.CreateZip(BeforePath.Substring(0, BeforePath.LastIndexOf("\\") + 1) + name + ".pla", dir, false, "");
                return true;
            }
            catch { return false; }
        }
        #endregion
    }
}
