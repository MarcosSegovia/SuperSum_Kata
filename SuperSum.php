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


function SuperSum($param1, $param2, &$data = [], &$numbers = [])
{
    $result = 0;

    if($param1==0)
    {
        return $param2;
    }
    else
    {
        $result += SecondSum($param1, $param2, $data, $numbers);
        return $result;
    }
}

function SecondSum($param1, $param2, &$data, &$numbers)
{
    $result = 0;
    if($param1 == 0)
    {
        return $param2;
    }
    else
    {
        for($i=1; $i<=$param2; $i++)
        {
            $index = retrieveIndexFromNumbers($param1, $i, $numbers);
            if($index !=-1)
            {
                $result += $data[$index];
            }
            else
            {
                $result += SuperSum($param1-1, $i, $data, $numbers);
            }
        }

        $data[count($numbers)] = $result;
        array_push($numbers, $param1.','.$param2);
        return $result;

    }
}

function retrieveIndexFromNumbers($param1, $param2, $numbers)
{
    //echo count($numbers);
    for($i=0; $i<count($numbers); $i++)
    {
        $bothNumbers = explode(',', $numbers[$i]);

        if($param1 == $bothNumbers[0])
        {
            if($param2 == $bothNumbers[1])
            {
                return $i;
            }
        }
    }

    return -1;
}

echo "SuperSum(1,3) = ";
$a = SuperSum(1,3);
echo $a;
echo "SuperSum(2,3) = ";
$b = SuperSum(2,3);
echo $b;
echo "SuperSum(20,20) =";
$c = SuperSum(20,20);
echo $c;
echo "SuperSum(40,40) =";
$d = SuperSum(40,40);
echo $d;
