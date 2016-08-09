using System;
using System.Collections.Generic;
using System.Text;

namespace QuickSort
{
    class Program
    {
        int[] a = new int[10] { 5, 7, 1, 6, 8, 2, 9, 3, 0, 4 };
        int Partition(int l,int r)
        {
            int i, j, k, tmp;
            k = a[r]; i = l - 1;
            for (j = l; j < r; j++)
            {
                while (i <j && a[j] <= k)
                {
                    i++;
                    tmp = a[i];
                    a[i] = a[j];
                    a[j] = tmp;
                }
            }
            tmp = a[i + 1];
            a[i + 1] = a[r];
            a[r] = tmp;
            return i + 1;
        }

        void Qs(int l, int r)
        {
            int x;
            if (l < r)
            {
                x = Partition(l, r);
                Qs(l, x - 1);
                Qs(x + 1, r);
            }
        }

        static void Main(string[] args)
        {
            Program p = new Program();
            Console.WriteLine("Before Sort");
            for (int i = 0; i < 10; i++) Console.Write(p.a[i]);
            Console.WriteLine();
            p.Qs(0, 9);
            Console.WriteLine("After Sort");
            for (int i = 0; i < 10; i++) Console.Write(p.a[i]);
            Console.ReadKey();
        }
    }
}
