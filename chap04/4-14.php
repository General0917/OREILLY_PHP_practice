<?php
$letters[0] = 'A';
$letters[1] = 'B';
$letters[2] = 'C';
$letters[3] = 'D';

/*
foreach ($letters as $letter) {
    print $letter;
}
*/

// 以下のコードでも同様の処理が可能
for ($i = 0, $num_letters = count($letters); $i < $num_letters; $i++) {
    print $letters[$i];
}