# SuperSum_Kata

 * Problem
 * =================================================================================================
 * SuperSum is a function defined as:
 * SuperSum(0 , n) = n, for all positive n.
 * SuperSum(k , n) = SuperSum(k-1 , 1) + SuperSum(k-1 , 2) + ... + SuperSum(k-1 , n), for all positive k, n.
 *
 * Given k and n, return the value for SuperSum(k , n).
 *
 * =================================================================================================
 * Examples
 * =================================================================================================
 * SuperSum(1,3) = 6
 * SuperSum(2,3) = 10
