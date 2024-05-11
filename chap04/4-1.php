<?php
$vegetables = array(
    'corn' => 'yellow',
    'beet' => 'red',
    'carrot' => 'orange',
);

$dinner = array(
    0 => 'Sweet Corn and Asparagus',
    1 => 'Lemon Chicken',
    2 => 'Braised Bamboo Fungus'
);

$computers = array(
    'trs-80' => 'Radio Shack',
    2600 => 'Atari',
    'Adam' => 'Coleco'
);

print_r($vegetables);
echo "<br/>";
print_r($dinner);
echo "<br/>";
print_r($computers);

/*
foreach ($vegetables as $vegetable) {
    print_r($vegetable);
}
*/

/*
foreach ($vegetables as $key => $value) {
    print $key .':'. $value ."<br/>";
}
*/