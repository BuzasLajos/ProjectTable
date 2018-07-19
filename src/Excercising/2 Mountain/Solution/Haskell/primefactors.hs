mountain x = [n|n<-[1..x]] ++ [m|m<-[x-1, x-2..1]]
mountain 1 = [1]
mountain 0 = []