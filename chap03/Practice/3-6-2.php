<?php
$age = 12;
$shoe_size = 13;
if ($age > $shoe_size) {
    print "Message 1" . '<br />';
} elseif (($shoe_size++) && ($age > 20)) {
    print "Message 2" . '<br />';
} else {
    print "Message 3" . '<br />';
}

print "Age: $age. Shoe Size: $shoe_size";