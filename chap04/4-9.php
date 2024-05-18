<?php
$row_styles = ['even', 'odd'];
$style_index = 0;
$meal = [
    'breakfast' => 'Walnut Bun',
    'lunch' => 'Cashew Nuts and White Mushroom',
    'snack' => 'Dried Mulberries',
    'dinner' => 'Eggplant with Chili Source'
];

print "<table>\n";

foreach ($meal as $key => $value) {
    print '<tr class="' . $row_styles[$style_index] . '">';
    print "<td>$key</td><td>$value</td></tr>\n";
    // style_indexを0と1で切り替える
    $style_index = 1 - $style_index;
}

print "</table>";