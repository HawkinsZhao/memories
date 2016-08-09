#region Using
using System;
using System.Collections.Generic;
using System.Collections;
using System.Linq;
using System.Text;
using System.Windows;
using System.Windows.Forms;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;
using System.Collections.ObjectModel;
using System.IO;
using System.Windows.Threading;
#endregion
namespace PicyLifte
{
	public partial class MainWindow : Window
    {
        #region Vars and struct
        Storyboard Oa,Oi,Ioa,Tbai,Tbao,Opensa,Openfa,NewIn,NewOut,ImgOp,ImgOp_Fin;
        Point p;
        ObservableCollection<LVData> LVDatas = new ObservableCollection<LVData>();

        public class LVData
        {
            public string ShortName { get; set; }
            public string Name { get; set; }
            public string Pic { get; set; }
            public string PicPath { get; set; }
        }
        ArrayList PointList = new ArrayList();
        public TalkPoint Tp = null;
        FileStream fs = new FileStream();
        FileStream.PlaXmlPointNode[] Fsp;
        string TargetPath=string.Empty;
        int SelectIndex=0;
        System.Xml.XmlNodeList sxx;
        string BeforePath;
        DispatcherTimer timer;
        MesgWindow MsgWindow;
        bool MyFocus = false;
        string ImagePath;
        Boolean first=false;
        #endregion

        public MainWindow()
		{
			this.InitializeComponent();
            #region Setting
            Oi = FindResource("WindowIn") as Storyboard;
            Opensa = FindResource("Open") as Storyboard;
            Openfa = FindResource("Open_Fin") as Storyboard;
            Openfa.Completed += delegate { OpenGrid.Visibility = System.Windows.Visibility.Hidden; };
            Tbao = FindResource("BoxOut") as Storyboard;
            Tbao.Completed += delegate { TalkBox.Visibility = System.Windows.Visibility.Hidden; };
            NewIn = FindResource("NewIn") as Storyboard;
            NewOut = FindResource("NewOut") as Storyboard;
            NewOut.Completed += delegate { NewGrid.Visibility = System.Windows.Visibility.Hidden; };
            CloseButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\close_normal.png"));
            MinButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\min_normal.png"));

            #endregion
        }

        #region ButtonAnmation

        #region CloseButton
        // *************************************CloseButton***************************************************
        private void CloseButton_MouseLeftButtonDown(object sender, System.Windows.Input.MouseButtonEventArgs e)
		{
            CloseButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\close_normal.png"));
		}

		private void CloseButton_MouseLeftButtonUp(object sender, System.Windows.Input.MouseButtonEventArgs e)
		{
            if (ShowMessage("确    认", "现在要退出了吗？") == 3) { return; }
            CloseButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\close_highlight.png"));
            Oa = FindResource("WindowOut") as Storyboard;
            Oa.Completed += delegate
            {
                #region GhostShadowBugRepair
                timer = new DispatcherTimer();
                timer.Tick += new EventHandler(timer_Tick);
                timer.Interval = TimeSpan.FromMilliseconds(500);
                timer.Start();
                #endregion
                this.Visibility = System.Windows.Visibility.Hidden;
                ShowImage.Source = null;
                AppListBox.ItemsSource = null;
                ImgList.ItemsSource = null;
                Bor.Background = null;
                try
                {
                    Directory.Delete(Environment.CurrentDirectory + @"\Temp", true);
                }
                catch { }
               
                Environment.Exit(0);
            };
            Oa.Begin();
		}

        void timer_Tick(object sender, EventArgs e)
        {
            timer.IsEnabled=false;
        }    

		private void CloseButton_MouseEnter(object sender, System.Windows.Input.MouseEventArgs e)
		{
            CloseButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\close_highlight.png"));
		}

		private void CloseButton_MouseLeave(object sender, System.Windows.Input.MouseEventArgs e)
		{
            CloseButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\close_normal.png"));
		}
        //***************************************************************************************************
        #endregion

        #region MinButton
        // ***************************************MinButton***************************************************
		private void MinButton_MouseLeftButtonDown(object sender, System.Windows.Input.MouseButtonEventArgs e)
		{
            MinButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\min_press.png"));
		}

		private void MinButton_MouseLeftButtonUp(object sender, System.Windows.Input.MouseButtonEventArgs e)
		{
            MinButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\min_highlight.png"));
            Oa = FindResource("WindowOut") as Storyboard;
            Oa.Completed += delegate { this.WindowState = WindowState.Minimized; };
            Oa.Begin();
		}

		private void MinButton_MouseLeave(object sender, System.Windows.Input.MouseEventArgs e)
		{
            MinButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\min_normal.png"));
		}

		private void MinButton_MouseEnter(object sender, System.Windows.Input.MouseEventArgs e)
		{
            MinButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\min_highlight.png"));
        }
        //***************************************************************************************************
        #endregion

        #endregion

        #region MenuClick

        private void Before_Click(object sender, RoutedEventArgs e)
        {
            SelectIndex--;
            if (SelectIndex < 0) { SelectIndex++; ShowMessage("已经没有上一张了哦"); return; }
            FileStream.PlaXmlPointNode[] TempFp = new FileStream.PlaXmlPointNode[PointList.Count];
            int i = 0;
            string path = ((LVData)AppListBox.SelectedItem).PicPath;
            
            foreach (TalkPoint t in PointList)
            {
                if (t.Visibility == System.Windows.Visibility.Hidden) { continue; }
                TempFp[i].Top = Convert.ToInt16(Canvas.GetTop(t));
                TempFp[i].Left = Convert.ToInt16(Canvas.GetLeft(t));
                TempFp[i].Text = t.MyText;
                i++;
                del(t);
                t.Visibility = System.Windows.Visibility.Hidden;
            }
            
            fs.SavePoint(((LVData)AppListBox.Items[SelectIndex+1]).Name, TempFp, path);
            PointList.Clear();
            ImgOp = FindResource("ImgOp") as Storyboard;
            ImgOp_Fin = FindResource("ImgOp_Fin") as Storyboard;
            ImgOp.Completed += delegate 
            { 
                ShowImage.Source = new BitmapImage(new Uri(((LVData)AppListBox.Items[SelectIndex]).PicPath + ((LVData)AppListBox.Items[SelectIndex]).Name)); 
                ImgOp_Fin.Begin(); 
            };
            ImgOp.Begin();
            Fsp = fs.GetPicPoint(sxx[SelectIndex],((LVData)AppListBox.SelectedItem).PicPath);
            try
            {
                foreach (FileStream.PlaXmlPointNode fsp in Fsp)
                {
                    Tp = new TalkPoint(this);
                    Canvas.SetTop(Tp, fsp.Top);
                    Canvas.SetLeft(Tp, fsp.Left);
                    ShowCav.Children.Add(Tp);
                    Tp.MyText = fsp.Text;
                    PointList.Add(Tp);
                }
            }
            catch { }
        }

        private void Next_Click(object sender, RoutedEventArgs e)
        {
            SelectIndex++;
            if (SelectIndex > AppListBox.Items.Count - 1) { SelectIndex--; ShowMessage("已经没有下一张了哦");return; }
            FileStream.PlaXmlPointNode[] TempFp = new FileStream.PlaXmlPointNode[PointList.Count];
            int i = 0;
            string path = ((LVData)AppListBox.SelectedItem).PicPath;
            foreach (TalkPoint t in PointList)
            {
                if (t.Visibility == System.Windows.Visibility.Hidden) { continue; }
                TempFp[i].Top=Convert.ToInt16(Canvas.GetTop(t));
                TempFp[i].Left =Convert.ToInt16(Canvas.GetLeft(t));
                TempFp[i].Text=t.MyText;
                i++;
                del(t);
                t.Visibility = System.Windows.Visibility.Hidden;
            }
            fs.SavePoint(((LVData)AppListBox.Items[SelectIndex-1]).Name, TempFp, path);



            PointList.Clear();
            ImgOp = FindResource("ImgOp") as Storyboard;
            ImgOp_Fin = FindResource("ImgOp_Fin") as Storyboard;
            ImgOp.Completed += delegate 
            {
                ShowImage.Source = new BitmapImage(new Uri(((LVData)AppListBox.Items[SelectIndex]).PicPath + ((LVData)AppListBox.Items[SelectIndex]).Name));
                ImgOp_Fin.Begin();
            };
            ImgOp.Begin();
            Fsp = fs.GetPicPoint(sxx[SelectIndex], path);
            try
            {
                foreach (FileStream.PlaXmlPointNode fsp in Fsp)
                {
                    Tp = new TalkPoint(this);
                    Canvas.SetTop(Tp, fsp.Top);
                    Canvas.SetLeft(Tp, fsp.Left);
                    ShowCav.Children.Add(Tp);
                    PointList.Add(Tp);
                    Tp.MyText = fsp.Text;
                }
            }
            catch { }
        }

        private void Quite_Click(object sender, RoutedEventArgs e)
        {
            /*
            int a = ShowMessage("退    出", "是否退出？", "是", "否");
            if (a == 3 || a == 2) { return; }
             */
            AppListBox.IsEnabled = true;
            MyFocus = false;
            FileStream.PlaXmlPointNode[] TempFp = new FileStream.PlaXmlPointNode[PointList.Count];
            int i = 0;
            string path = ((LVData)AppListBox.SelectedItem).PicPath;
            foreach (TalkPoint t in PointList)
            {
                if (t.Visibility == System.Windows.Visibility.Hidden) { continue; }
                TempFp[i].Top = Convert.ToInt16(Canvas.GetTop(t));
                TempFp[i].Left = Convert.ToInt16(Canvas.GetLeft(t));
                TempFp[i].Text = t.MyText;
                i++;
                del(t);
                t.Visibility = System.Windows.Visibility.Hidden;
            }
            fs.SavePoint(((LVData)AppListBox.Items[SelectIndex]).Name, TempFp, path);
            PointList.Clear();
            Ioa = FindResource("ImgOut") as Storyboard;
            Ioa.Begin();
        }

        private void TalkPoint_Click(object sender, RoutedEventArgs e)
        {
            Tp = new TalkPoint(this);
            //MessageBox.Show(p.X.ToString() + "      " + p.Y.ToString());
            Canvas.SetTop(Tp, p.Y - Tp.Height / 2);
            Canvas.SetLeft(Tp, p.X - Tp.Width / 2);
            ShowCav.Children.Add(Tp);
            PointList.Add(Tp);
        }

        private void SaveImage_Click(object sender, RoutedEventArgs e)
        {
            SaveFileDialog saveFileDialog1 = new SaveFileDialog();
            saveFileDialog1.FileName = ((LVData)AppListBox.Items[SelectIndex]).Name;
            //saveFileDialog1.Filter = "Pla files(*.pla)|*.pla";
            saveFileDialog1.FilterIndex = 2;
            saveFileDialog1.RestoreDirectory = true;
            if (saveFileDialog1.ShowDialog() == System.Windows.Forms.DialogResult.Cancel)
            { return; }
            File.Copy(((LVData)AppListBox.Items[SelectIndex]).PicPath + ((LVData)AppListBox.Items[SelectIndex]).Name, saveFileDialog1.FileName,true);
        }
        #endregion

        #region WindowEvent
        private void ShowImage_MouseRightButtonDown(object sender, System.Windows.Input.MouseButtonEventArgs e)
        {
            p = e.GetPosition(ShowCav);
            if (TalkBox.Visibility == System.Windows.Visibility.Visible)
            {
                Tbao.Begin();
            }
        }

        private void TopRec_Copy_MouseLeftButtonDown(object sender, System.Windows.Input.MouseButtonEventArgs e)
        {
            this.DragMove();
        }

        private void Window_StateChanged(object sender, System.EventArgs e)
        {
            if (this.WindowState == System.Windows.WindowState.Normal)
            {
                Oi.Begin();
            }
        }

        private void ShowImage_MouseLeftButtonDown(object sender, System.Windows.Input.MouseButtonEventArgs e)
        {
            if (TalkBox.Visibility == System.Windows.Visibility.Visible)
            {
                Tbao.Begin();
                Tp.MyText = BoxText.Text;
            }
        }

        private void Window_KeyDown(object sender, System.Windows.Input.KeyEventArgs e)
        {
            if (MyFocus == true)
            {
                switch (e.Key.ToString())
                {
                    case "Left":
                        Before_Click(null, null);
                        break;
                    case "Right":
                        Next_Click(null, null);
                        break;
                    case "Escape":
                        Quite_Click(null, null);
                        break;
                }
            }
        }
        #endregion

        #region ListBox
        private void AppListBox_MouseDoubleClick(object sender, System.Windows.Input.MouseButtonEventArgs e)
        {
            AppListBox.IsEnabled = false;
            MyFocus = true;
            Storyboard Ia = FindResource("ImgShow") as Storyboard;
            ShowImage.Source = new BitmapImage(new Uri(((LVData)AppListBox.SelectedItem).PicPath + ((LVData)AppListBox.SelectedItem).Name));
            Ia.Begin();
            sxx = fs.GetPicList();
            SelectIndex = AppListBox.SelectedIndex;
            Fsp = fs.GetPicPoint(sxx[SelectIndex], ((LVData)AppListBox.SelectedItem).PicPath);
            try
            {
                foreach (FileStream.PlaXmlPointNode fsp in Fsp)
                {
                    Tp = new TalkPoint(this);
                    Canvas.SetTop(Tp, fsp.Top);
                    Canvas.SetLeft(Tp, fsp.Left);
                    ShowCav.Children.Add(Tp);
                    Tp.MyText = fsp.Text;
                    Tp.Focusable = false;
                    PointList.Add(Tp);
                }
            }
            catch { }
        }
        #endregion

        #region Public Method
        public void del(TalkPoint t)
        {
            Storyboard a = t.FindResource("PointClose") as Storyboard;
            if (TalkBox.Visibility == System.Windows.Visibility.Visible)
            {
                Tbao.Begin();
            }
            a.Begin();
        }

        public void MovePoint(TalkPoint t, System.Windows.Input.MouseEventArgs e)
        {
            Canvas.SetTop(t, e.GetPosition(ShowCav).Y - Tp.Height / 2);
            Canvas.SetLeft(t, e.GetPosition(ShowCav).X - Tp.Width / 2);
        }

        public void ShowBox(TalkPoint t)
        {
            Tp = t;
            Tbai = FindResource("BoxShow") as Storyboard;
            //MessageBox.Show(ShowImage.Height.ToString() + "     " + Canvas.GetTop(t).ToString() + "     " + TalkBox.Height.ToString());
            if (this.Height - Canvas.GetTop(t) - 80 > TalkBox.Height)
            { Canvas.SetTop(TalkBox, Canvas.GetTop(t) + 34); }
            else { Canvas.SetTop(TalkBox, Canvas.GetTop(t) - TalkBox.Height); }

            if (this.Width - Canvas.GetLeft(t) - 50 > TalkBox.Width) { Canvas.SetLeft(TalkBox, Canvas.GetLeft(t) + 34); }
            else { Canvas.SetLeft(TalkBox, Canvas.GetLeft(t) - TalkBox.Width); }

            BoxText.Text = t.MyText;
            TalkBox.Visibility = System.Windows.Visibility.Visible;
            Tbai.Begin();
            
        }

        public void AddLVD(string n, string p, string x)
        {
            LVDatas.Add(new LVData { Name = n, Pic = p });
        }
        #endregion

        #region New||Open button click

        private void New_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            if (NewGrid.Visibility == System.Windows.Visibility.Hidden)
            {
                if (OpenGrid.Visibility == System.Windows.Visibility.Visible) OpenGrid.Visibility = System.Windows.Visibility.Hidden;
                NewGrid.Visibility = System.Windows.Visibility.Visible;
                NewIn.Begin();
                if (first == true)
                {
                    FirstGrid.Background = new ImageBrush(new BitmapImage(new Uri(Environment.CurrentDirectory + "\\Des\\SF.png")));
                    FirstGrid.Visibility = Visibility.Visible;
                }
            }
        }

        private void Open_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            
            if (OpenGrid.Visibility == System.Windows.Visibility.Hidden)
            {
                if (NewGrid.Visibility == System.Windows.Visibility.Visible) NewGrid.Visibility = System.Windows.Visibility.Hidden;
                OpenGrid.Visibility = System.Windows.Visibility.Visible;
                Opensa.Begin();
                if (first == true)
                {
                    FirstGrid.Background = new ImageBrush(new BitmapImage(new Uri(Environment.CurrentDirectory + "\\Des\\OPF.png")));
                    FirstGrid.Visibility = Visibility.Visible;
                }
            }
             
        }

        private void GoFind_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            ShowImage.Source = null;
            OpenFileDialog openFileDialog = new OpenFileDialog();
            openFileDialog.Title = "选择文件";
            openFileDialog.Filter = "相册文件|*.pla";
            openFileDialog.FileName = string.Empty;
            openFileDialog.FilterIndex = 1;
            openFileDialog.RestoreDirectory = true;
            openFileDialog.DefaultExt = "pla";
            DialogResult result = openFileDialog.ShowDialog();
            if (result == System.Windows.Forms.DialogResult.Cancel)
            {
                return;
            }
            BeforePath = openFileDialog.FileName;
            LVDatas.Clear();
            Bor.Background = null;
            FileStream.PlaStream FinStream = new FileStream.PlaStream();
            FinStream = fs.UnPackPla(openFileDialog.FileName);
            if (FinStream.PicPath == "Error") { System.Windows.MessageBox.Show("The file has already been opened!"); return; }
            ImageBrush a = new ImageBrush(FinStream.PlaCover);
            a.Stretch = Stretch.UniformToFill;
            Bor.Background = a;
            TitleTxt.Text = FinStream.PlaName;
            DesTxt.Text = FinStream.PlaDescription;
            for (int i=0;i<FinStream.PlaItemTotal;i++)
            {
                LVDatas.Add(new LVData { ShortName = FinStream.PlaItem[i].ItemShortName, Name = FinStream.PlaItem[i].ItemName, Pic = FinStream.PlaItem[i].ItemCover, PicPath = FinStream.PicPath });
                //System.Windows.MessageBox.Show(FinStream.PlaItem[i].ItemCover);
            }
            AppListBox.ItemsSource = LVDatas;
            foreach (string file in Directory.GetFiles(((LVData)AppListBox.Items[0]).PicPath))
            {
                if (fs.SearchNode(System.IO.Path.GetFileName(file)) == false)
                { File.Delete(file); }
            }
        }

        private void Cancel_Click(object sender, System.Windows.RoutedEventArgs e)
        {

            if (fs.SavePLA(((LVData)AppListBox.Items[0]).PicPath, TitleTxt.Text, DesTxt.Text, BeforePath) == true) { ShowMessage("通知", "保存成功"); }
            else { ShowMessage("保存失败"); }
            Openfa.Begin();
        }

        private void Clo_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            if (ShowMessage("确    认", "现在要退出了吗？") == 3) { return; }
            CloseButton.Source = new BitmapImage(new Uri(System.Environment.CurrentDirectory + @"\SystemButton\close_highlight.png"));
            Oa = FindResource("WindowOut") as Storyboard;
            Oa.Completed += delegate
            {
                #region GhostShadowBugRepair
                timer = new DispatcherTimer();
                timer.Tick += new EventHandler(timer_Tick);
                timer.Interval = TimeSpan.FromMilliseconds(500);
                timer.Start();
                #endregion
                this.Visibility = System.Windows.Visibility.Hidden;
                ShowImage.Source = null;
                AppListBox.ItemsSource = null;
                ImgList.ItemsSource = null;
                Bor.Background = null;
                try
                {
                    Directory.Delete(Environment.CurrentDirectory + @"\Temp", true);
                }
                catch { }

                Environment.Exit(0);
            };
            Oa.Begin();
        }

        private void About_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            ShowMessage("关    于", "PicyLife制作:\r\nSpartan093 QQ:1044067525 \r\n");
        }

        private void cancel2_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            NewOut.Begin();
        }

        private void Save_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            if (ImgList.ItemsSource != null)
            {
                SaveFileDialog saveFileDialog1 = new SaveFileDialog();
                saveFileDialog1.FileName = TitText.Text;
                saveFileDialog1.Filter = "Pla files(*.pla)|*.pla";
                saveFileDialog1.FilterIndex = 2;
                saveFileDialog1.RestoreDirectory = true;
                if (saveFileDialog1.ShowDialog() == System.Windows.Forms.DialogResult.Cancel)
                { return; }
                Boolean SaveFin = fs.SaveFile(ImagePath, TitText.Text, DesText.Text, LVDatas, saveFileDialog1.FileName);
                if (SaveFin == true) 
                {
                    if (ShowMessage("成      功", "保存成功\r\n是否立即编辑？") == 2) 
                    {
                        Open_Click(null, null);
                        ShowImage.Source = null;
                        BeforePath = saveFileDialog1.FileName;
                        LVDatas.Clear();
                        Bor.Background = null;
                        FileStream.PlaStream FinStream = new FileStream.PlaStream();
                        FinStream = fs.UnPackPla(saveFileDialog1.FileName);
                        if (FinStream.PicPath == "Error") { System.Windows.MessageBox.Show("The file has already been opened!"); return; }
                        ImageBrush a = new ImageBrush(FinStream.PlaCover);
                        a.Stretch = Stretch.UniformToFill;
                        Bor.Background = a;
                        TitleTxt.Text = FinStream.PlaName;
                        DesTxt.Text = FinStream.PlaDescription;
                        for (int i = 0; i < FinStream.PlaItemTotal; i++)
                        {
                            LVDatas.Add(new LVData { ShortName = FinStream.PlaItem[i].ItemShortName, Name = FinStream.PlaItem[i].ItemName, Pic = FinStream.PlaItem[i].ItemCover, PicPath = FinStream.PicPath });
                            //System.Windows.MessageBox.Show(FinStream.PlaItem[i].ItemCover);

                        }
                        AppListBox.ItemsSource = LVDatas;
                    }
                }
                else { ShowMessage("错      误", "保存中出现错误"); }
            }
            else { ShowMessage("错       误", "请添加照片"); };
        }

        private void ChangeCover_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            try
            {
                ImagePath = ((LVData)ImgList.SelectedItem).PicPath;
                ImageBrush a =new ImageBrush(new BitmapImage(new Uri(ImagePath)));
                a.Stretch =Stretch.UniformToFill;
                Bor1.Background = a;
            }
            catch { ShowMessage("无效选择项"); }
        }

        private void AddImg_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            OpenFileDialog openFileDialog = new OpenFileDialog();
            openFileDialog.Title = "选择图片";
            openFileDialog.Filter = "图片文件(*.jpg,*.jpeg,*.bmp,*.png)|*.jpg;*.bmp;*.png;*.jpeg";
            openFileDialog.FileName = string.Empty;
            openFileDialog.FilterIndex = 1;
            openFileDialog.RestoreDirectory = true;
            openFileDialog.DefaultExt = "*.jpg;*.bmp;*.png;*.jpeg";
            openFileDialog.Multiselect = true;
            DialogResult result = openFileDialog.ShowDialog();
            if (result == System.Windows.Forms.DialogResult.Cancel)
            {
                return;
            }

            foreach (string fName in openFileDialog.FileNames)
            {
                LVDatas.Add(new LVData
                {
                    ShortName = System.IO.Path.GetFileNameWithoutExtension(fName),
                    Name = System.IO.Path.GetFileName(fName),
                    PicPath = System.IO.Path.GetFullPath(fName),
                    Pic = fName
                });
            }
            ImgList.ItemsSource = LVDatas;

            try
            {
                ImagePath = ((LVData)ImgList.Items[0]).PicPath;
                ImageBrush a = new ImageBrush(new BitmapImage(new Uri(ImagePath)));
                a.Stretch = Stretch.UniformToFill;
                Bor1.Background = a;
            }
            catch { }
        }

        private void ADDPic_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            OpenFileDialog openFileDialog = new OpenFileDialog();
            openFileDialog.Title = "选择图片";
            openFileDialog.Filter = "图片文件(*.jpg,*.jpeg,*.bmp,*.png)|*.jpg;*.bmp;*.png;*.jpeg";
            openFileDialog.FileName = string.Empty;
            openFileDialog.FilterIndex = 1;
            openFileDialog.RestoreDirectory = true;
            openFileDialog.DefaultExt = "*.jpg;*.bmp;*.png;*.jpeg";
            openFileDialog.Multiselect = true;
            DialogResult result = openFileDialog.ShowDialog();
            if (result == System.Windows.Forms.DialogResult.Cancel)
            {
                return;
            }

            foreach (string fName in openFileDialog.FileNames)
            {
                LVDatas.Add(new LVData
                {
                    ShortName = System.IO.Path.GetFileNameWithoutExtension(fName),
                    Name = System.IO.Path.GetFileName(fName),
                    PicPath = ((LVData)AppListBox.Items[0]).PicPath,//System.IO.Path.GetFullPath(fName.Substring(0, fName.Length - System.IO.Path.GetFileName(fName).Length)),
                    Pic = fName
                });
                try
                {
                    File.Copy(System.IO.Path.GetFullPath(fName), ((LVData)AppListBox.Items[0]).PicPath + "\\" + System.IO.Path.GetFileName(fName));
                    fs.RegviseFile(System.IO.Path.GetFileName(fName));
                }
                catch { }
            }
        }

        private void DeleteFile_Click(object sender, System.Windows.RoutedEventArgs e)
        {
            string name = ((LVData)AppListBox.SelectedItem).Name;
            string path = ((LVData)AppListBox.SelectedItem).PicPath;
            LVDatas.Remove((LVData)AppListBox.SelectedItem);
            ShowImage.Source = null;
            fs.UnRegFile(name, path);
        }
        #endregion

        #region OverLoadShowMessage
        public int ShowMessage(string Info)
        {
            MsgWindow = new MesgWindow(null, Info, null, "确定");
            MsgWindow.Owner = this;
            MsgWindow.ShowDialog();
            return MsgWindow.ChoiceResult;
        }

        public int ShowMessage(string Title, string Info)
        {
            MsgWindow = new MesgWindow(Title, Info, null, "确定");
            MsgWindow.Owner = this;
            MsgWindow.ShowDialog();
            return MsgWindow.ChoiceResult;
        }

        public int ShowMessage(string Title, string Info, string button1, string button2)
        {
            MsgWindow = new MesgWindow(Title, Info, button1, button2);
            MsgWindow.Owner = this;
            MsgWindow.ShowDialog();
            return MsgWindow.ChoiceResult;
        }
        #endregion

        #region First Method
        private void FirstGrid_MouseLeftButtonDown(object sender, System.Windows.Input.MouseButtonEventArgs e)
        {
            FirstGrid.Visibility = Visibility.Hidden;
        }

        private void Window_Loaded(object sender, System.Windows.RoutedEventArgs e)
        {
            if (File.Exists(Environment.CurrentDirectory + "\\first.dat"))
            {
                first = true;
                FirstGrid.Background = new ImageBrush(new BitmapImage(new Uri(Environment.CurrentDirectory + "\\Des\\First.png")));
                FirstGrid.Visibility = Visibility.Visible;
                first = true;
                File.Delete(Environment.CurrentDirectory + "\\first.dat");
            }
        }
        #endregion
    }
}