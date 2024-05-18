<?php
$row_styles = ['even', 'odd'];
$dinner = [
    'Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus'
];

print "<table>\n";

for ($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++) {
    print '<tr class="' . $row_styles[$i % 2] . '">';
    print "<td>Element $i</td><td>$dinner[$i]</td></tr>\n";
}

/*
// 以下のコードでも同様の処理が可能
for ($i = 0; $i < count($dinner); $i++) {
    print '<tr class="' . $row_styles[$i % 2] . '">';
    print "<td>Element $i</td><td>$dinner[$i]</td></tr>\n";
}
*/

print "</table>";