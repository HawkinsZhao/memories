// QuickSort.cpp : 定义控制台应用程序的入口点。
//

#include "stdafx.h"
#include <iostream>
using namespace std;

int a[10]={5,7,1,6,8,2,9,3,0,4};
int Partition(int l,int r)
{
	int i,j,x,tmp;
	i=l-1; x=a[r];
	for (j=l;j<r;j++)
	{
		while (i<j && a[j]<=x)
		{
			i++;
			tmp=a[i];
			a[i]=a[j];
			a[j]=tmp;
		}
	}
	tmp=a[i+1];
	a[i+1]=a[r];
	a[r]=tmp;
	return i+1;
}

void QuickSort(int l,int r)
{
	if (l<r) 
	{
		int x=Partition(l,r);
		QuickSort(l,x-1);
		QuickSort(x+1,r);
	}
}
int _tmain(int argc, _TCHAR* argv[])
{
	int i;
	cout<<"Before Sort"<<endl;
	for(i=0;i<10;i++) cout<<a[i];
	cout<<endl;
	QuickSort(0,9);
	cout<<"After Sort"<<endl;
	for(i=0;i<10;i++) cout<<a[i];
	cout<<endl;
	cin>>i;
	return 0;
}

