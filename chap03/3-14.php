<?php
// $finishedがfalseであれば、テスト式($finished == false)全体はtrueになる
$finished = false;
if ($finished == false) {
    print 'Not done yet!';
}

print "<br />";

// $finishedがfalseであれば、テスト式(! $finished)全体はtrueになる
if (! $finished) {
    print 'Not done yet!';
}