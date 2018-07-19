dividable n [] = True
dividable n (x:xs) = (mod n x == 0) && dividable n xs

answer = head [x|x<-[1..], dividable x [1..10]]
