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
using System.Windows.Media.Animation;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace PicyLifte
{
	public partial class MesgWindow : Window
	{
        Storyboard OutA;
		public MesgWindow(string title,string info,string bt1,string bt2)
		{
			this.InitializeComponent();
            if (title != null) { MsgTitle.Text = title; }
            MsgInfo.Text = info;
            if (bt1 != null) { MsgButton1.Content = bt1; }
            else { MsgButton1.Visibility = System.Windows.Visibility.Hidden; }
            MsgButton2.Content = bt2;
            OutA = FindResource("MsgOut") as Storyboard;
            OutA.Completed += delegate { this.Close(); };
		}

		private void MsgButton1_Click(object sender, System.Windows.RoutedEventArgs e)
		{
            ChoiceResult = 1;
            OutA.Begin();
		}

		private void MsgButton2_Click(object sender, System.Windows.RoutedEventArgs e)
		{
            ChoiceResult = 2;
            OutA.Begin();
		}

		private void MsgButton3_Click(object sender, System.Windows.RoutedEventArgs e)
		{
            ChoiceResult = 3;
            OutA.Begin();
		}

        public int ChoiceResult { get; set; }

        private void Window_MouseLeftButtonDown(object sender, System.Windows.Input.MouseButtonEventArgs e)
        {
            this.DragMove();
        }
	}
}