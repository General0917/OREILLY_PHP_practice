<?php
$meals = [
    'Walnut Bun' => 1,
    'Cashew Nuts and White Mushroom' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Source' => 6.50
];

foreach ($meals as $dish => $price) {
    // $price = $price * 2ではうまくいかない
    $meals[$dish] = $meals[$dish] * 2;
}

// 配列をもう一度反復処理をして変更した値を出力する
foreach ($meals as $dish => $price) {
    printf("The new price of %s is \$%.2f.\n", $dish, $price);
}