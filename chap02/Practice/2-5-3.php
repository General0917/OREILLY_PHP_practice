<?php
$hamburger = 4.95;
$shake = 1.95;
$cola = 0.85;

$tip_rate = 0.16;
$tax_rate = 0.075;

$food = ($hamburger * 2) + $shake + $cola;
$tip = $food * $tip_rate;
$tax = $food * $tax_rate;

$total = $food + $tip + $tax;

printf("%d %-9s at \$%.2f each: \$%5.2f\n", 2, 'Hamburger', $hamburger, 2 * $hamburger);
print "<br />";
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Shake', $shake, $hamburger);
print "<br />";
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Cola', $cola, $cola);
print "<br />";
printf("%25s: \$%5.2f\n", 'Food Total', $food);
print "<br />";
printf("%25s: \$%5.2f\n", 'Food and Tax Total', $food + $tax);
print "<br />";
printf("%25s: \$%5.2f\n", 'Food, Tax, and Tip Total', $total);