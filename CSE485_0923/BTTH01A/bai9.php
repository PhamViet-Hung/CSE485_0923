<?php
function convertToLowercase($item)
{
    if (is_string($item)) {
        return strtolower($item);
    }
    return $item;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

$convertedArr1 = array_map('convertToLowercase', $arr1);
$convertedArr2 = array_map('convertToLowercase', $arr2);
$convertedArr3 = array_map('convertToLowercase', $arr3);

echo "Converted array 1: ";
print_r($convertedArr1);

echo "Converted array 2: ";
print_r($convertedArr2);

echo "Converted array 3: ";
print_r($convertedArr3);