using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Media.Animation;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace PicyLifte
{
	public partial class TalkPoint : UserControl
	{
        MainWindow Maw;
		public TalkPoint(MainWindow Mw)
		{
			this.InitializeComponent();
            Maw = Mw;
		}
        private void Delete_Click(object sender, RoutedEventArgs e)
        {
            Maw.del(this);
            this.Visibility = System.Windows.Visibility.Hidden;
        }

        private void TalkPointRet_MouseLeftButtonUp(object sender, System.Windows.Input.MouseButtonEventArgs e)
        {
            Maw.ShowBox(this);
            Maw.Tp = this;
        }

        private void UserControl_MouseMove(object sender, System.Windows.Input.MouseEventArgs e)
        {
            if (e.LeftButton == MouseButtonState.Pressed)
            {
                Maw.MovePoint(this, e);
            }
        }

        public string MyText
        { get; set; }
	}
}