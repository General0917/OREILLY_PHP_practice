<?php
$meals = [
    'Walnut Bun' => 1,
    'Cashew Nuts and White Mushroom' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Source' => 6.50,
    'Shrimp Puffs' => 0
];

$books = [
    "The Eater's Guide to Chinese Characters",
    'How to Cook and Eat in Chinese'
];

// これはTrue
$value_keys = array_keys($meals);
if (array_key_exists('Shrimp Puffs', $meals)) {
    print "Yes, we have $value_keys[4]\n";
}

// これはFalse
if (array_key_exists('Steak Sandwich', $meals)) {
    print 'We have a Steak Sandwich' . "\n";
}

// これはTrue
if (array_key_exists('1', $books)) {
    print "Element 1 is $books[1]" . "\n";
}