   M S B A M L   `   `   `  ����  July-Rebuild2    July_Rebuild2.App   5      \ XPresentationFramework, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35U QWPFToolkit, Version=3.5.40128.1, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     8x,http://schemas.microsoft.com/winfx/2006/xaml    5      >d2http://schemas.microsoft.com/expression/blend/2008    5      Hmc;http://schemas.openxmlformats.org/markup-compatibility/2006    6K     �� 	Resources  5         ObjectQuitAnmation �� TargetProperty O� KeyTime O� Value �� 	KeySpline W� From	 W� To g� Duration  HorizontalWrap � 	ItemWidth  MenuItem	 �� TextAlignment
 J� Opacity  MenuItemStyle �� 
TargetType �� Property �� Value �� RelativeSource �� AncestorType �� 
TargetType � 	Resources  Key �� 
TargetName �� KeyTime �� Value ��Name �� Padding J� SnapsToDevicePixels �� Triggers P� Property P� Value N� EnterActions  Storyboard1  MyMetroButton �Name ��Name N� ExitActions ��Name  IsEnableTrue  IsEnableFalse  :� RoutedEvent 	 OnClick1��%  &	        &	 J    &	 �    &	 w    7  &	     7  7  7 	 �� 5   
   .��5	      U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.X)�6,   .\�5
      �� $ 0��6'   $ 0Q�63   �� 5      $ 0:0:0.5��6'   $	 200Q�69   $ 	0,0,0.5,0��6E   5      W� 5      $ Opacity�6   $ 1X�6B   $ 0X�6K   $ 0:0:0.5D�6R   5      �� 5   
   .R�5      � $
��Auto��6   $ 90��6&   5      �� 5   
   .R�5      � .+�5      �� $
��Wrap=�6   $	 Center=�6A   $
 0Q�6X   ��60   �� z�5      V� 5      .~�5      �� �� 5      �� 5      T� 5      5      5      5       5!      �� 5#   
   " ��6&   .�5$      ��  � ��
 ���� 6+   �� 5%       � �� 6;   �� *HorizontalContentAlignment+ �� " ���� 5&       � �� 69   �� *VerticalContentAlignment+ �� " ���� 5'       � ��$ 2,0,0,0q�6(   �� 5(       � �� 5)      �� 5*      " ��6&    5+      ���� 5,      Storyboard1 .��5-   "   �� $0 *(Panel.Background).(SolidColorBrush.Color)�6?   $ Bd��6�   .g�5.   &   �� $ 0��6:   $ Transparent��6F   �� 5/   &   $ 0:0:0.2��6:   $ 	#FF50B2FD��6L   �� 50   &   $ 0:0:0.3��6:   $ Transparent��6L   51   #   52      53      .R�54      �� $ Bd��6!   #��z��6-   #��z��6Y   # z��6�    . ���	#00000000._�55      �� # z 6/   #��z��6k   $��Center=�6�   56       57      P� 58       �@��
IsSelected .  59   "   �� 5:   &   8��  66   5<      5>      5@      5A      �� 5C      " ��6-    5D      ���� 5E   	   OnClick1 .��5F   
   �� $0 *(Panel.Background).(SolidColorBrush.Color)�6'   $ border��6n   .g�5G      �� $ 0��6   $ 	#FFE7E7E7��6+   �� 5H      $ 0:0:0.2��6   $ 	#FF389FFF��61   �� 5I      $ 0:0:0.4��6   $ 	#FFE7E7E7��61   5J      5K   
   �� 5L   	   IsEnableFalse .��5M   
   �� $6 0(TextElement.Foreground).(SolidColorBrush.Color)�6'   $ 	textBlock��6t   .g�5N      �� $ 0��6   $ Black��6+   �� 5O      $ 0:0:0.2��6   $ 	#FF666666��61   5P      5Q   
   �� 5R   	   IsEnableTrue .��5S   
   �� $6 0(TextElement.Foreground).(SolidColorBrush.Color)�6'   $ 	textBlock��6t   .g�5T      �� $ 0��6   $ 	#FF666666��6+   �� 5U      $ 0:0:0.2��6   $ Black��61   5V      5W   
   5X   	   .R�5Y      � $
 grid��6   ���	#00000000.+�5Z   	   �� $ border��6   ���	#FF979797$��2q�68   $��0q�6L   ���	#FFE7E7E76W   �� 5[   	   $ 	textBlock��6   $��0q�6&   $
��Wrap=�61   #��z��6E   $��Center=�6f   $��Center=�6�   #��z��6�   5\   	    5]      P� 5^   	    � {� .   5_   
   �� 5`      $" IsEnableTrue_BeginStoryboard��6   8��  6A    5b   
   �� 5c      $# IsEnableFalse_BeginStoryboard��6   8�� 6B   5e   
   :� 5f   	   $  ButtonBase.Click��6   .[�5g   
   �� $ OnClick1_BeginStoryboard��6   8�� 6<   5h   
   5j      5l      5m      