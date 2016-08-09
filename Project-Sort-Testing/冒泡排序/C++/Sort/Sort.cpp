// Sort.cpp : 定义控制台应用程序的入口点。
//

#include "stdafx.h"
#include <iostream>
using namespace std;

int _tmain(int argc, _TCHAR* argv[])
{
	int i,j,tmp;
	int a[10]={5,7,1,6,8,2,9,3,0,4};
	cout<<"Before sort"<<endl;
	for (i=0;i<10;i++) {cout<<a[i];}
	cout<<endl;

	for (i=0;i<10;i++)
	{
		for (j=9;j>i;j--)
		{
			if (a[j]<a[j-1]) 
			{
				tmp=a[j];
				a[j]=a[j-1];
				a[j-1]=tmp;
			}
		}
	}

	cout<<"After sort"<<endl;
	for (i=0;i<10;i++) {cout<<a[i];}
	cout<<endl;
	cin>>i;
	return 0;
}

