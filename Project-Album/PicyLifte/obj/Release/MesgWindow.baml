   M S B A M L   `   `   `  ����   	PicyLifte    PicyLifte.MesgWindow   \ XPresentationFramework, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    8x,http://schemas.microsoft.com/winfx/2006/xaml    -     �Name$  Window�� � Title$ 
MesgWindow��$	��367��$	��222�� � AllowsTransparency .  � WindowStyle$
 None=� � WindowStartupLocation$ CenterOwner=� � Icon$ ico.ico����Z� ��Z�  � 	Resources    ButtonBrush �� EndPoint �� 
StartPoint	 � Color
 � Offset 	 MsgIn �� TargetProperty �� 
TargetName O� KeyTime O� Value 
 MsgOut��%�  &	        &	 �     &	 �    �� $	 0,1&�$	 0,0&�.��� $	 	#8CF3F3F3��$
 0Q�� $	 	#BF9F9F9F��$
 0.266Q�� $	 	#BF7E7E7E��$
 0.266Q�� $	 	#72CDCDCD��$
 1Q��� .��U� $V P(UIElement.RenderTransform).(TransformGroup.Children)[0].(ScaleTransform.ScaleY)�$ MessageGrid��.\��� $ 0��$ 0.003Q��� $ 0:0:0.2��$ 0.029Q��� $ 0:0:0.4��$ 1Q�U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.Y)�$ MessageGrid��.\��� $ 0��$ 0Q��� $ 0:0:0.2��$ 0Q��� $ 0:0:0.4��$ 0Q�U� $V P(UIElement.RenderTransform).(TransformGroup.Children)[0].(ScaleTransform.ScaleX)�$ MessageGrid��.\��� $ 0��$ -0.003Q��� $ 0:0:0.2��$ 1Q��� $ 0:0:0.4��$ 1Q�U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.X)�$ MessageGrid��.\��� $ 0��$ 0Q��� $ 0:0:0.2��$ 0Q��� .��U� $V P(UIElement.RenderTransform).(TransformGroup.Children)[0].(ScaleTransform.ScaleY)�$ MessageGrid��.\��� $ 0��$ 1Q��� $ 0:0:0.2��$ 0.029Q��� $ 0:0:0.4��$ 0.003Q�U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.Y)�$ MessageGrid��.\��� $ 0��$ 0Q��� $ 0:0:0.2��$ 0Q��� $ 0:0:0.4��$ 0Q�U� $V P(UIElement.RenderTransform).(TransformGroup.Children)[0].(ScaleTransform.ScaleX)�$ MessageGrid��.\��� $ 0��$ 1Q��� $ 0:0:0.2��$ 1Q��� $ 0:0:0.4��$ -0.003Q�U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.X)�$ MessageGrid��.\��� $ 0:0:0.2��$ 0Q��� $ 0:0:0.4��$ 0Q� � Triggers :�  :� RoutedEvent$ FrameworkElement.Loaded��.[��� #��[ .��� -    �Name$ MessageGrid��$��8,8,0,0q� J� RenderTransformOrigin$ 0.5,0.5&�$
��Left=�$	��351��$	��206��$	��Top=�z�V� .~��� �� �� T� .+��� -    ��Name$ BackBord�����	#FF6A6A6A$��1q� �� CornerRadius$ 10������ $ 0.5,1&�$ 0.5,0&�.��� $	 White��$
 0Q�� $	 	#B5FFFFFF��� $	 	#B2999898��$

 0.23Q�� $	 	#E8CACACA��$
 0.294Q�� $	 	#B5FFFFFF��$
 0.113Q�� $	 	#76FFFFFF��$
 1Q��� -    ��Name$ MsgTitle��$��40��$��126.667,8,83.5,0q�$
��Wrap=�$	��Top=�
���   �$��26.667(�$
��Bold"���  � Language$ zh-cn�$�
注    意���� -   $ MsgInfo��$��28,66,21.167,63.167q�$
��Wrap=�
���   �$��18.667(��� $ zh-cn�$�是否放弃保存？���� -    ��Name$ 
MsgButton1��$��保存��$��30��$��120,0,163.167,16.167q�$��Bottom=�#���   �� -   $ 
MsgButton2��$��确定��$��30��$��0,0,92.167,16.167q�$��Bottom=�$��Right=�$��67��#���   �� -   $ 
MsgButton3��$��取消��$��30��$��0,0,21.167,16.167q�$��Bottom=�$��Right=�$��67��#���   