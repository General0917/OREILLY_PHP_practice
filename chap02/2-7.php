<?php
$price = 5;
const tax = 0.075;

printf('The dish costs $%.2f', $price * (1 + tax));