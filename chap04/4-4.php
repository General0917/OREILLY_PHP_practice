<?php
// $vegetablesは配列になる
$vegetables['corn'] = 'yellow';

// [corn]と[yellow]の痕跡を削除して$vegetablesはスカラーになる
$vegetables = 'delicious';

// $fruitsはスカラーになる
$fruits = 283;

// 正しく動作しない--$fruitsは283のままで
// PHPエンジンは警告を発する。
// $fruits['potassium'] = 'banana';

// しかし、これは$fruitsを上書きして配列になる
$fruits = array('potassium' => 'banana');

print_r($fruits);