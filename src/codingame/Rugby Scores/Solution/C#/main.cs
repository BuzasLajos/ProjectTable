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
        int N = int.Parse(Console.ReadLine());

int tries = 0;
int trans = 0;
int pen = 0;

tries = (N-N%5)/5;
N-=tries*5;
trans = (N-N%2)/2;
N-=trans*3;
pen = (N-N%3)/3;
        Console.WriteLine(tries + " " + trans + " " + pen);
        
        
tries = (N-N%3)/3;
N-=tries*3;
trans = (N-N%2)/2;
N-=trans*2;
pen = (N-N%5)/5;
        Console.WriteLine(tries + " " + trans + " " + pen);
    }
}