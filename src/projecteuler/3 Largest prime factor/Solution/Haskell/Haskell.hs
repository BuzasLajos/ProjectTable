primes = sieve [2..]
sieve (p:xs) = p : sieve [x | x <- xs, x `mod` p /= 0]

primefactors x = [n|n<-(sieve [2..x]), x `mod` n == 0]
