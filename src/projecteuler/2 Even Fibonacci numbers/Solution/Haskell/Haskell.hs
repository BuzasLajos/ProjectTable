merge (x:xs) (y:ys) = x:y:merge xs ys
merge x [] = x
merge [] y = y
merge [] [] = []      


fib 0 = 0
fib 1 = 1
fib n = fib (n - 1) + fib (n - 2)

[fib n|n<-[1..1000], (mod (fib n) 2 ) == 0] == [2, 8, 34, 144, 610, 2584, 10946] ++ ⊥