using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Collections;
using System.Collections.Generic;

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
class Solution
{
    static void Main(string[] args)
    {
        string ROW = "";
        string line = "";
        int L = int.Parse(Console.ReadLine());
        int H = int.Parse(Console.ReadLine());
        
        string T = Console.ReadLine();
        //T = "HELLOWORLD";
        
        
        T=T.ToUpper();
        int tInd = 0;
        int[] tIndArray = new int[T.Length];
        for(int i = 0; i < T.Length; i++){
            tInd = "ABCDEFGHIJKLMNOPQRSTUVWXYZ".IndexOf(T[i]);
            if (tInd<0){tInd=27;}
            tIndArray[i]=tInd;
        }
        
       // string q = "###   #  ##      #  ";
        string q = "###   #  ##      #                                                                                                                                                                                                                 ";
        for (int i = 0; i < H; i++)
        {
         ROW = Console.ReadLine()+q.Substring(i*L);
         for(int j = 0; j < tIndArray.Length; j++){
         try{line = ROW.Substring(L*tIndArray[j], L);}catch{}
         Console.Write(line);
         }//j
            Console.WriteLine();

        }//i
        
     //    Console.WriteLine("ABC".IndexOf("D"));



    }
}