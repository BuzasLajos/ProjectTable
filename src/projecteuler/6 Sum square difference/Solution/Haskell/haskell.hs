
--differences
answer6 n = (sum [1..n] * sum [1..n]) - sum [x*x|x<-[1..n]]
