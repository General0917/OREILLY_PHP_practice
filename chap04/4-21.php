<?php
$dimsum = [
    'Chicken Bun',
    'Stuffed Duck Web',
    'Turnip Cake'
];

$menu = implode(', ', $dimsum);

print $menu . "\n";

// 区切りなしの場合
$letters = ['A', 'B', 'C', 'D'];
print implode('', $letters);