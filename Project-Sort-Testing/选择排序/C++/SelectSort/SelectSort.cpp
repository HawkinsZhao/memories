// SelectSort.cpp : 定义控制台应用程序的入口点。
//

#include "stdafx.h"
#include <iostream>
using namespace std;

int _tmain(int argc, _TCHAR* argv[])
{
	int i,j,k,tmp,min;
	int a[10]={5,7,1,6,8,2,9,3,0,4};

	cout<<"Before sort"<<endl;
	for (i=0;i<10;i++) {cout<<a[i];}
	cout<<endl;

	//Sort
	for (i=0;i<9;i++)
	{
		min =a[i];
		for (j=i+1;j<10;j++)
		{
			if (a[j]<min)
			{
				min=a[j];
				k=j;
			}
		}
		tmp=a[i];
		a[i]=a[k];
		a[k]=tmp;
	}
	cout<<"After sort"<<endl;
	for (i=0;i<10;i++) {cout<<a[i];}
	cout<<endl;
	cin>>i;
	return 0;
}

