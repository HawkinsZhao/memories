using System;
using System.Collections.Generic;
using System.Text;

namespace selectsort
{
    class Program
    {
        static void Main(string[] args)
        {
            int i, j, k, min,tmp;
            k = 0; tmp = 0;
            int[] a = new int[10] { 5, 7, 1, 6, 8, 2, 9, 3, 0, 4 };
            //输出
            Console.WriteLine("Before sort");
            for (i = 0; i < 10; i++)
            {
                Console.Write(a[i]); 
            }
            Console.WriteLine();

            //排序
            for (i = 0; i < 9; i++)
            {
                min=a[i];
                for (j = i + 1; j < 10; j++)
                {
                    if (a[j] < min)
                    {
                        min = a[j];
                        k = j;
                    }
                }

                tmp=a[i];
                a[i] = a[k];
                a[k] = tmp;
            }
            //输出
            Console.WriteLine("After sort");
            for (i = 0; i < 10; i++)
            {
                Console.Write(a[i]);
            }
            Console.ReadKey();
        }
    }
}
