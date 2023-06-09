<?php
print 100.00 - 100 . '<br />'; // false
print "zero" . '<br />'; // true
print "false" . '<br />'; // true
print 0 + "true" . '<br />'; // false
print 0.000 . '<br />'; // false
print "0.0" . '<br />'; // true
print strcmp("false", "False") . '<br />'; // true
print 0 <=> "0"; // true