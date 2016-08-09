using System;
using System.Collections.Generic;
using System.Text;

namespace Sort
{
    class Program
    {
        static void Main(string[] args)
        {
            int i, j, tmp;
            int[] a = new int[10] { 5, 7, 1, 6, 8, 2, 9, 3, 0, 4 };
            Console.WriteLine("Before sort");
            for (i = 0; i < 10; i++) { Console.Write(a[i]); }
            Console.WriteLine();
            for (i = 1; i < 10; i++)
            {
                tmp = a[i];
                j = i - 1;
                while (j > -1 && a[j] > tmp)
                {
                    a[j + 1] = a[j];
                    j--;
                }
                a[j + 1] = tmp;
            }

            Console.WriteLine("Before sort");
            for (i = 0; i < 10; i++) { Console.Write(a[i]); }
            Console.ReadKey();
        }
    }
}
