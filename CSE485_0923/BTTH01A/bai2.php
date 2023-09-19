<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];

$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];
$favoriteColors = array_combine($names, $arrs);

$output = [];
foreach ($favoriteColors as $name => $color) {
    if (in_array($color, $arrs)) {
        $output[] = "Màu <span style='color: red;'>$color</span> là màu yêu thích của $name";
    } else {
        $output[] = "Màu $color là màu yêu thích của $name";
    }
}

$result = implode(', ', $output);
echo $result;
?>