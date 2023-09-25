<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

// Tìm chuỗi có độ dài lớn nhất và độ dài tương ứng
$maxLength = 0;
$longestString = '';
foreach ($array as $string) {
    $length = strlen($string);
    if ($length > $maxLength) {
        $maxLength = $length;
        $longestString = $string;
    }
}

// Tìm chuỗi có độ dài nhỏ nhất và độ dài tương ứng
$minLength = PHP_INT_MAX;
$shortestString = '';
foreach ($array as $string) {
    $length = strlen($string);
    if ($length < $minLength) {
        $minLength = $length;
        $shortestString = $string;
    }
}

echo "Chuỗi lớn nhất là $longestString, độ dài = $maxLength" . PHP_EOL;
echo "Chuỗi nhỏ nhất là $shortestString, độ dài = $minLength" . PHP_EOL;