   M S B A M L   `   `   `  ����   July-Rebuild2!    July_Rebuild2.ControlWindow   \ XPresentationFramework, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35U QWPFToolkit, Version=3.5.40128.1, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=3.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     8x,http://schemas.microsoft.com/winfx/2006/xaml    >d2http://schemas.microsoft.com/expression/blend/2008    Hmc;http://schemas.openxmlformats.org/markup-compatibility/2006    -     �Name$  Window�� � Title$ ControlWindow��$	��848��$	��621�����	#FFF3F3F3 � 	Resources    ObjectEnterAnmation-2 �� TargetProperty O� KeyTime O� Value �� 	KeySpline W� From	 W� To	 g� Duration  OpacityAnmation-2  ListBoxEnterAnmation  LeftGridEnterAnmation  ListBoxLeavingAnmation��%�  &	        &	 �     &	     &	 �    &	 �    �� .��U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.X)�.\��� $ 0��$	 200Q��� $ 0:0:0.5��$ 0Q�$ 0,0,0,1��W� $ Opacity�$ 0X�$ 1X�$	 0:0:0.5D��� .��W� $ Opacity�$ 0X�$ 1X�$	 0:0:0.5D��� .��U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.X)�.\��� $ 0��$
 -200Q��� $ 0:0:0.3��$ 0Q�$ 0,0,0,1��W� $ Opacity�$ 0X�$ 1X�$	 0:0:0.3D��� .��U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.X)�.\��� $ 0��$
 -200Q��� $ 0:0:0.3��$ 0Q�$ 0,0,0,1���� .��U� $U O(UIElement.RenderTransform).(TransformGroup.Children)[3].(TranslateTransform.X)�.\��� $ 0��$ 0Q��� $ 0:0:0.3��$
 -100Q�$ 0,0,0,1��W� $ Opacity�$ 1X�$ 0X�$	 0:0:0.3D�.��� -   
 �Name$
 
LayoutRoot��.+�� -   $
 
RightGrid1��$��	156,8,8,8q�z�V� .~��� �� �� T� .+��� -    ��Name$ AnswerPlayer��$��11,345.501,8,123q�$
��Wrap=�$��32(�
���  ����  � Language$ zh-cn�$�答案��� -   $
 InstructionGrid��$��0,0,0,62.999q�.+��� $
��Left=�$��8,8,0,4q�$
��Wrap=�$��29.333(�$	��652���� $ zh-cn�$�使用说明：���� �� $ zh-cn��� �� $ zh-cn�$:�41.首先点击左边 开始 按钮，解除锁定。���� �� $ zh-cn�$h�b2.然后主窗口出现注意事项，本窗口开始出现可空控制选项 答题 关于 退出���� �� $ zh-cn�$�3.选择对应选项���� �� $ zh-cn�$t�n   答题：直接输入题号 无需回车 后按开始即可进行计时，使用 正确 错误 进行判断��� -   $
 
ChoiceGrid��$��0,0,0,62.999q�z�V� .~��� �� �� T� .+��� -    ��Name$ QuestionFilter��$��145.533,30.396,19.853,0q� �� TextWrapping$
 Wrap=�$$��此处输入题号（数字）��$	��Top=�$��39.837��$��24(����	#FF767676�� -   $ QuestionNumber��$
��Left=�$��	44,28,0,0q�$
��Wrap=�$	��Top=�$��32(��� $ zh-cn�$�题号���� -	   $ QuestionDescribtion��$��15,86,19.853,8q�$
��Wrap=�$��26.667(��� $ zh-cn�$�反馈样例示范：���� �� $ zh-cn��� �� $ zh-cn�$�题号 - 20 状态:正常���� �� $ zh-cn��� �� $ zh-cn�$c�]请简述WPF应用中StoryBoard中SetTarget方法 和 调用对象中的RenderTransform属性���� �� $ zh-cn��� �� $ zh-cn�$�答案-不告你���� -
    ��Name$ Apply��$��开始��$��0,0,245.406,8q�$��Bottom=�  MyMetroButton#���  $��46.836��$��24(�$��Right=�$��114.703���� -   $ Right��$��正确��$��0,0,126.703,8q�$��Bottom=�#���  $��46.836��$��24(�$��Right=�$��114.703���� -   $ Wrong��$��错误��$��Right=�$��0,0,8,8q�$��Bottom=�$��114.703��#���  $��46.836��$��24(�� -   $
 	AboutGrid��$��0,0,0,62.999q�z�V� .~��� �� �� T� .+��� -   $ 	AboutText��$��8q�$
��Wrap=�$��29.333(��� $ zh-cn�$%�所属 太原五中七月书社���� �� $ zh-cn�$D�>程序制作：太原五中摄影社 后期技术部 赵一勤���� �� $ zh-cn��� �� $ zh-cn�$�问题及意见反馈：���� �� $ zh-cn��� �� $ zh-cn�$�
Spartan093���� �� $ zh-cn�$�qq:1044067525���� �� $ zh-cn�$"�e-mail:z1044067525@gmail.com��� -   $
 TypeChoicer��$��0,0,0,62.999q�z�V� .~��� �� �� T� .+�� -   $
 
ChoiceType��z�V� .~��� �� �� T� .+��� -    ��Name$ TypeList��$
��Left=�$��8,8,0,8q�$	��188��$��21.333(��� -   $ 
AnswerType��$��41��$��227,25,248,0q�$
��Wrap=�$	��Top=�$��26.667(��� $ zh-cn�$�选手选择的类型���� -   $ ChoicedType��$��Right=�$��0,25,97.853,0q�$
��Wrap=�$	��Top=�$��26.667(��� -   $ EasyType��$��简单��$��82��$��0,161,248,0q�$	��Top=�#���  $��29.333(�$��Right=�$	��145���� -   $ 	LevelType��$��32��$��227,109,229,0q�$
��Wrap=�$	��Top=�$��26.667(��� $ zh-cn�$�选择难度���� -   $ 
HentaiType��$��困难��$��82��$��0,161,23.45,0q�$	��Top=�#���  $��29.333(�$��Right=�$	��145���� -   $ 
ListBefore��$��向前��$��	0,0,248,8q�$��Bottom=�$��82��#���  $��29.333(�$��Right=�$	��145���� -   $ ListBack��$��向后��$��0,0,23.45,8q�$��Bottom=�$��82��$��Right=�$	��145��#���  $��29.333(�� -   $
 
GoQuestion��z�V� .~��� �� �� T� .+��� -   $ 	TypeTitle��$
��49.5��$��8,35,24.5,0q�$
��Wrap=�$	��Top=�$��32(��� $ zh-cn�$6�0题目类型：历史 难度：困难 文件:5-9���� -   $ TypeQuestionDisplayer��$��29,105,24.5,169q�$
��Wrap=�$~��x第一次工业革命发生于什么时间？并且有什么深远影响和作用？此时的我国处于什么状态？��$��32(��� -   $ 
Type_Apply��$��开始��$��61.001��$��	213,0,0,8q�$��Bottom=�$
��Left=�$	��117��$��24(�#���  {�.  �� -   $ 
Type_Right��$��正确��$��61.001��$��	0,0,179,8q�$��Bottom=�$��Right=�$	��117��$��24(�#���  {�.  �� -   $ 
Type_Wrong��$��错误��$��61.001��$��
0,0,24.5,8q�$��Bottom=�$��Right=�$	��117��$��24(�#���  {�.  �� -   $ MyTime��$
��Left=�$
��Wrap=�$��Bottom=�$��48(�$��8,0,0,16.385q��� $ zh-cn�$�计时��� -    $
 	LeftBroad��$
��Left=�$	��152�����	#FF3F5DA7z�V� .~��� �� �� T� .+��� -!   $ LeftMenu��$��8,77.233,8,8q�  MenuItem#���    MenuItemStyle#���  $��26.667(�
�������$��2q���Z� ��Z� z�V� .~��� �� �� T� �� -"   $ MyTitle��$��24.958,20,28.986,0q�$
��Wrap=�$	��Top=�$��32(�
�������z�V� .~��� �� �� T� �� $ zh-cn�$�	控制台��