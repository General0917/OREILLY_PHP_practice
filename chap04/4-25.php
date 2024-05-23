<?php
$meal = [
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushroom',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Source'
];

print "Before Sorting:\n";
foreach ($meal as $key => $value) {
    print " \$meal: $key $value\n";
}

asort($meal);

print "After Sorting:\n";
foreach ($meal as $key => $value) {
    print " \$meal: $key $value\n";
}