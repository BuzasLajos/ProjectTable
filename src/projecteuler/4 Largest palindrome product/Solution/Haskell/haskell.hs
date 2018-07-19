
tolist' n xs
  | n < 10  = n:xs 
  | n >= 10 = tolist' (div n 10) ((mod n 10):xs) 
 
tolist n = tolist' n []

ispalindrome n = tolist n == reverse (tolist n)

--all palindromes
[x|x<-[10..99*99], ispalindrome x == True]

--TODO: generate all product of three digit numbers and sort the palindromes, then get the last
