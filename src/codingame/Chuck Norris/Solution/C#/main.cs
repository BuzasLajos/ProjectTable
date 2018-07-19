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
    public static byte[] ToBinary(string stringPassed)
{
   System.Text.ASCIIEncoding  encoding = new System.Text.ASCIIEncoding();
   return encoding.GetBytes(stringPassed);
}

    static void Main(string[] args)
    {
        string MESSAGE = Console.ReadLine();

        // Write an action using Console.WriteLine()
        // To debug: Console.Error.WriteLine("Debug messages...");
string binary = "";
for(int i = 0; i < MESSAGE.Length; i++)
{
    int value = (int) MESSAGE[i]; //Convert.ToInt32(MESSAGE[i]);
    binary += Convert.ToString(value, 2);
}

// Console.WriteLine(binary);
string answer = "";

string[] asd = binary.Split(' ');
string splitted = binary[0].ToString();


for(int i = 1; i < binary.Length; i++)
{
    if(binary[i]!=binary[i-1]){
    splitted += " "+binary[i];
    }else{splitted+=binary[i]; }
}

string[] splitted2 = splitted.Split(' ');
      

for(int i = 0; i < splitted2.Length; i++)
{
        if(splitted2[i][0]=='0'){answer+="00 ";}
        else if(splitted2[i][0]=='1'){answer+="0 ";}  
    for(int j = 0; j < splitted2[i].Length; j++)
    {
        answer+="0"; 
    }//j
             if(i < splitted2.Length-1){ answer+=" ";}
}//i


Console.WriteLine(answer);

/*
int val = Convert.ToInt32('%');
Console.WriteLine( Convert.ToString(val, 2 ) );
*/



    }
}