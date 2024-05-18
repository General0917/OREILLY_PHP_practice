<?php
$dinner = [
    'Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus'
];

for ($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++) {
    print "Dish number $i is $dinner[$i]\n";
}

/*
// 以下のコードでも同様の処理が可能
for ($i = 0; $i < count($dinner); $i++) {
    print "Dish number $i is $dinner[$i]\n";
}
*/