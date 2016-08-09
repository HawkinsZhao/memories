using System;
using System.Collections.Generic;
using System.Text;

namespace sort
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

            for (i = 0; i < 9; i++)
            {
                for (j = 9; j > i; j--)
                {
                    if (a[j] < a[j - 1])
                    {
                        tmp = a[j];
                        a[j] = a[j-1];
                        a[j-1] = tmp;
                    }
                }
            }
            Console.WriteLine("After sort");
            for (i = 0; i < 10; i++) { Console.Write(a[i]); }
            Console.ReadKey();
        }
    }
}
