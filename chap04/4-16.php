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
$value = array_values($meals);
if (in_array(3, $meals)) {
    print "There is a $$value[2] item.\n";
}

// これはTrue
if (in_array('How to Cook and Eat in Chinese', $books)) {
    print "We have $books[1].\n";
}

// これはFalse
if (in_array("the eater's guide to chinese characters", $books)) {
    print "We have $books[0].\n";
}