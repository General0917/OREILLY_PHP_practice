<?php
$usename1 = 'kira';
$domain1 = '@example.com';

$usename2 = 'athrun';
$domain2 = '@example.com';

$usename1  = $usename1 . $domain1;
print $usename1;

print "<br />";

$usename2 .= $domain2;
print $usename2;
