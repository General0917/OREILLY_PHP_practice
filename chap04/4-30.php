<?php
$prices['dinner']['Sweet Corn and Asparagus'] = 12.50;
$prices['lunch']['Cashew Nuts and White Mushrooms'] = 4.95;
$prices['dinner']['Braised Bamboo Fungus'] = 8.95;

$prices['dinner']['total'] = $prices['dinner']['Sweet Corn and Asparagus'] + $prices['dinner']['Braised Bamboo Fungus'];

$specials[0][0] = 'Chestnut Bun';
$specials[0][1] = 'Walnut Bun';
$specials[0][2] = 'Peanut Bun';
$specials[1][0] = 'Chestnut Salad';
$specials[1][1] = 'Walnut Salad';

// インデックスを省略すると、配列の最後に要素を追加する
// 次は$specials[1][2]を作成する
$specials[1][] = 'Peanut Salad';

print $prices['dinner']['total'] . "\n";
print $specials[0][0] . "\n";
print $specials[0][2] . "\n";
print $specials[1][1] . "\n";