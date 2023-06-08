<?php
// 1は12.7より小さいので$aは負数になる
$a = 1 <=> 12.7;
print $a . "<br />";

print "<br />";

// 「c」は「b」より後に来るので$bは正数になる
$b = "charlie" <=> "bob";
print $b . "<br />";

print "<br />";

// 数字文字列の比較はstrcmp()ではなく<と>のように機能する
$x = '6 pack' <=> '55 card stud';
print $x . "<br />";

if ($x > 0) {
    print 'The string "6 pack" is greater than the string "55 card stud".<br />';
} elseif ($x < 0) {
    print 'The string "6 pack" is less than the string "55 card stud".<br />';
}

print "<br />";

// 数字文字列の比較はstrcmp()ではなく<と>のように機能する
$x = '6 pack' <=> 55;
print $x . "<br />";

if ($x > 0) {
    print 'The string "6 pack" is greater than the number 55.<br />';
} elseif ($x < 0) {
    print 'The string "6 pack" is less than the number 55.<br />';
}