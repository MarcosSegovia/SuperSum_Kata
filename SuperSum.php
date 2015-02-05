<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 5/2/15
 * Time: 0:23
 */


/**
 * =================================================================================================
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
 **************************************************************************************************/


function SuperSum($param1, $param2)
{
    $result = 0;

    if($param1==0)
    {
        return $param2;
    }
    else
    {
        for($i=1; $i<=$param2; $i++)
        {
            $result += SuperSum($param1-1, $i);
        }
        return $result;
    }
}

echo "SuperSum(1,3) = ";
$a = SuperSum(1,3);
echo $a;
echo "SuperSum(2,3) = ";
$b = SuperSum(2,3);
echo $b;