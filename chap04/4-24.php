<?php
$dinner = [
    'Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus'
];

$meal = [
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushroom',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Source'
];

print "Before Sorting:\n";
foreach ($dinner as $key => $value) {
    print " \$dinner: $key $value\n";
}
foreach ($dinner as $key => $value) {
    print "   \$meal: $key $value\n";
}

sort($dinner);
sort($meal);

print "After Sorting:\n";
foreach ($dinner as $key => $value) {
    print " \$dinner: $key $value\n";
}
foreach ($meal as $key => $value) {
    print "   \$meal: $key $value\n";
}