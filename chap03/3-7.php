<?php
$new_messages = '012345678910';
$max_messages = 10;
$dinner = 'pasta';

if (strlen($new_messages) != 10) {
    print "You don't have ten new messages.<br />";
}

if ($dinner != 'Braised Scallops') {
    print "I guess we're out of scallops";
}