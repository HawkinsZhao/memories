   M S B A M L   `   `   `  ����  July-Rebuild2    July_Rebuild2.Window1   5      \ XPresentationFramework, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35U QWPFToolkit, Version=3.5.40128.1, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     8x,http://schemas.microsoft.com/winfx/2006/xaml    5      >d2http://schemas.microsoft.com/expression/blend/2008    5      Hmc;http://schemas.openxmlformats.org/markup-compatibility/2006    6?   -   5          �Name$  Window��5       � Title$ Window1��5      $	��640��5      $	��480��6    � 	Resources 5	         Storyboard1 �� TargetProperty �� 
TargetName O� KeyTime O� Value �� 	KeySpline  ListBoxItemStyle1 �� 
TargetType	 �� Property
 �� Value �� RelativeSource �� AncestorType �� 
TargetType ��Name �� Padding J� SnapsToDevicePixels �� Triggers P� Property P� Value �� 
TargetName ]� 
Conditions �� Property �� Value  DataTemplate1��%K  &	        &	     &	 �    �� 5
      .��5      U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.X)�6#   $ button��6�   .\�5      �� $ 0��6   $ 0Q�6'   �� 5      $ 0:0:0.6��6   $
 -123Q�6-   $ 0,0,0,1��6:   5      5      �� 5      " ��6$   .�5      �� 	 � ��

 ���� 6"   �� 5      	 � ��
 62   �� *HorizontalContentAlignment+ �� " ���� 5      	 � ��
 60   �� *VerticalContentAlignment+ �� " ���� 5      	 � ��$
 2,0,0,0q�6   �� 5      	 � ��
 5      �� 5      " ��6   .R�5      �� $ Bd��6   #��z��6   #��z��6G   #��z��6{   # z��6�    . ._�5   	   �� #��z��6   # z 6]   #��z��6�   5   	    5      P� 5   	    �@��
IsSelected . . �5   
   �� $ Bd��6'   #
 � ��67   	 � ���� 5   
   #
 � ��6'   	 � ��5   
   ]� 5    	    5!   
   �� 5"       �@��
IsSelected . 6+   �� 5#       �@��IsSelectionActive .  6;   ./�5%   
   �� $ Bd��6'   #
 � ��67   	 � ���� 5&   
   #
 � ��6'   	 � ��5'   
   P� 5(   	    � {� .  . �5)   
   �� #
 � ��6'   	 � ��5*   
   5,      5.      5/      �� 50      .R�51      � .+�52      �� $��0q�6   $
��Wrap=�6   $��	TextBlock��6/   53      54      55       � Triggers 56      :� 57       :� RoutedEvent$ FrameworkElement.Loaded��6   .[�58      �� #��[  6   59      .��5<      � -   5         �Name$ 
LayoutRoot��5<      .+�5=      �� -   5         ��Name$ button��5=      $��Button��6   $��87��6,   $��260,113,124,0q�68   $	��Top=�6O    J� RenderTransformOrigin$ 0.5,0.5&�6g   z�5>      V� 5?      .~�5@      �� �� 5A      �� 5B      T� 5C      5D      5F      5G      5H      