import Data.Ord (comparing)
import Data.List (sortBy)

project2 ps@(_:_:_) = go 10000 p1 t 
  where
    (p1:t) = sortBy (comparing fst) ps
    go d _         [] = d
    go d p1@(x1,_) t  = g2 d t
      where
        g2 d []          = go d (head t) (tail t)
        g2 d (p2@(x2,_):r)
           | x2-x1 >= d  = go d (head t) (tail t)
           | d2 >= d     = g2 d  r
           | otherwise   = g2 d2 r   -- change it "mid-flight"
               where
                 d2 = distance p1 p2