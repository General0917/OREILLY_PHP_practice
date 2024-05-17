<?php
$meal = [
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushroom',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Source'
];

print "<table>\n";

foreach ($meal as $key => $value) {
    print "<tr><td>$key</td><td>$value</td></tr>\n";
}

print "</table>";