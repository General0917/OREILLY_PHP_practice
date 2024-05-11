<?php
// 文字列のキーを持つ$vegetablesという配列
$vegetables['corn'] = 'yellow';
$vegetables['beet'] = 'red';
$vegetables['carrot'] = 'orange';

// 数値のキーを持つ$dinnerという配列
$dinner[0] = 'Sweet Corn and Asparagus';
$dinner[1] = 'Lemon Chicken';
$dinner[2] = 'Braised Bamboo Fungus';

// 文字列と数値のキーが混在する$computersという配列
$computers['trs-80'] = 'Radio Shack';
$computers[2600] = 'Atari';
$computers['Adam'] = 'Coleco';

print_r($vegetables);
echo "<br/>";
print_r($dinner);
echo "<br/>";
print_r($computers);
