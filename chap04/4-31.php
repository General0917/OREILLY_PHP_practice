<?php
$flavors = [
    'Japanese' => ['hot' => 'wasabi', 'salty' => 'soy sauce'],
    'Chinese' => ['hot' => 'mustard', 'pepper-salty' => 'prickly ash']
];

// $cultureはキーで、$culture_flavorsは値(配列)
foreach ($flavors as $culture => $culture_flavors) {
    // $flavorsはキーで、$exampleは値
    foreach ($culture_flavors as $flavors => $example) {
        print "A $culture $flavors flavor is $example.\n";
    }
}