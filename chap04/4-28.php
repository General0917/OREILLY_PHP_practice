<?php
$meals = [
    'breakfast' => ['Walnut Bun', 'Coffee'],
    'lunch' => ['Cashew Nuts', 'White Mushroom'],
    'snack' => ['Dried Mulberries', 'Salted Sesame Crab'],
];

$lunches = [
    ['Chicken', 'Eggplant', 'Rice'],
    ['Beef', 'Scallions', 'Noodles'],
    ['Eggplant', 'Tofu']
];

$flavors = [
    'Japanese' => ['hot' => 'wasabi', 'salty' => 'soy sauce'],
    'Chinese' => ['hot' => 'mustard', 'pepper-salty' => 'prickly ash']
];

print $meals['lunch'][1] . "\n";
print $meals['snack'][0] . "\n";
print $lunches[0][0] . "\n";
print $lunches[2][1] . "\n";
print $flavors['Japanese']['salty'] . "\n";
print $flavors['Chinese']['hot'] . "\n";