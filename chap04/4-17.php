<?php
$meals = [
    'Walnut Bun' => 1,
    'Cashew Nuts and White Mushroom' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Source' => 6.50,
    'Shrimp Puffs' => 0
];

$dish = array_search(6.50, $meals);

if ($dish) {
    print "$dish costs \$6.50";
}