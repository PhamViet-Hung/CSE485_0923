<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// Lấy phần tử đầu tiên và phần tử cuối cùng trong mảng
$firstElement = reset($numbers);
$lastElement = end($numbers);

// Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng
$minValue = min($numbers);
$maxValue = max($numbers);
$sum = array_sum($numbers);

// Sắp xếp mảng theo chiều tăng, giảm các giá trị
$ascendingValues = $numbers;
asort($ascendingValues);
$descendingValues = $numbers;
arsort($descendingValues);

// Sắp xếp mảng theo chiều tăng, giảm các key
$ascendingKeys = $numbers;
ksort($ascendingKeys);
$descendingKeys = $numbers;
krsort($descendingKeys);

// Hiển thị kết quả
echo "Phần tử đầu tiên: " . $firstElement . "\n";
echo "Phần tử cuối cùng: " . $lastElement . "\n";
echo "Số nhỏ nhất: " . $minValue . "\n";
echo "Số lớn nhất: " . $maxValue . "\n";
echo "Tổng các giá trị: " . $sum . "\n";

echo "Mảng theo chiều tăng các giá trị: ";
print_r($ascendingValues);

echo "Mảng theo chiều giảm các giá trị: ";
print_r($descendingValues);

echo "Mảng theo chiều tăng các key: ";
print_r($ascendingKeys);

echo "Mảng theo chiều giảm các key: ";
print_r($descendingKeys);