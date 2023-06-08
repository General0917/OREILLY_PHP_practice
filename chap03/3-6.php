<?php
$new_messages = '0123456789';
$max_messages = 10;
$dinner = 'Braised Scallops';

if (strlen($new_messages) == 10) {
    print "You have ten new messages.<br />";
}
if (strlen($new_messages) == $max_messages) {
    print "You have the maximum number of messages.<br />";
}
if ($dinner == 'Braised Scallops') {
    print "Yum! I love seafood.";
}

