   M S B A M L   `   `   `  ����   	PicyLifte    PicyLifte.TalkPoint   \ XPresentationFramework, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    8x,http://schemas.microsoft.com/winfx/2006/xaml    >d2http://schemas.microsoft.com/expression/blend/2008    Hmc;http://schemas.openxmlformats.org/markup-compatibility/2006    -     >�Name$  UserControl��$
��42.5��$
��42.5����Z�  � 	Resources    MouseIn �� TargetProperty �� 
TargetName O� KeyTime O� Value  MouseOut  	PointLoad  
PointClose��%�  &	        &	 �     &	     &	 1    �� .��U� $6 0(UIElement.Effect).(DropShadowEffect.BlurRadius)�$
 grid��.\��� $ 0��$ 0Q��� $ 0:0:0.1��$ 7Q��� .��U� $6 0(UIElement.Effect).(DropShadowEffect.BlurRadius)�$
 grid��.\��� $ 0��$ 7Q��� $ 0:0:0.1��$ 0Q��� .��U� $V P(UIElement.RenderTransform).(TransformGroup.Children)[0].(ScaleTransform.ScaleX)�$
 grid��.\��� $ 0��$ -0.059Q��� $ 0:0:0.2��$ 1Q��� $ 0:0:0.3��$ 1.261Q��� $ 0:0:0.4��$ 1Q�U� $V P(UIElement.RenderTransform).(TransformGroup.Children)[0].(ScaleTransform.ScaleY)�$
 grid��.\��� $ 0��$ 0.059Q��� $ 0:0:0.2��$ 1Q��� $ 0:0:0.3��$ 1.261Q��� $ 0:0:0.4��$ 1Q�U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.X)�$
 grid��.\��� $ 0:0:0.2��$ 0Q��� $ 0:0:0.3��$ 0Q��� $ 0:0:0.4��$ 0Q�U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.Y)�$
 grid��.\��� $ 0:0:0.2��$ 0Q��� $ 0:0:0.3��$ 0Q��� $ 0:0:0.4��$ 0Q��� .��U� $V P(UIElement.RenderTransform).(TransformGroup.Children)[0].(ScaleTransform.ScaleX)�$
 grid��.\��� $ 0��$ 1Q��� $ 0:0:0.1��$ 1.261Q��� $ 0:0:0.2��$ 1Q��� $ 0:0:0.4��$ -0.059Q�U� $V P(UIElement.RenderTransform).(TransformGroup.Children)[0].(ScaleTransform.ScaleY)�$
 grid��.\��� $ 0��$ 1Q��� $ 0:0:0.1��$ 1.261Q��� $ 0:0:0.2��$ 1Q��� $ 0:0:0.4��$ 0.059Q�U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.X)�$
 grid��.\��� $ 0:0:0.1��$ 0Q��� $ 0:0:0.2��$ 0Q��� $ 0:0:0.4��$ 0Q�U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.Y)�$
 grid��.\��� $ 0:0:0.1��$ 0Q��� $ 0:0:0.2��$ 0Q��� $ 0:0:0.4��$ 0Q� � Triggers :�  :� RoutedEvent$ Mouse.MouseEnter�� :� 
SourceName$ TalkPointRet��.[��� #��[  :� $ Mouse.MouseLeave��$ TalkPointRet��.[��� -   	 ��Name$	 MouseOut_BeginStoryboard��#��[ :� $ FrameworkElement.Loaded��$ UserControl��.[��� #��[ .��� -   
 �Name$

 grid��$
��Left=�$
��25.5��$	��Top=�$
��25.5��$��8,8,0,0q� J� RenderTransformOrigin$ 0.5,0.5&�z�V� .~��� �� �� T�  J� Effect 3  -System.Windows.Media.Effects.DropShadowEffect     Color$ White��   ShadowDepth$ 0Q�   
BlurRadius$ 0Q�.+��� -    ��Name$ TalkPointRet��$
��25.5�����	#26FFFFFF$��2�����	#FFF1F1F1 � ContextMenu �� .@�m� -   $��删除��