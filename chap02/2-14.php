<?php
$my_class = 'lunch';

$html = '<span class="{class}">Fried Bean Curd</span>
<br />
<span class="{class}">Oil-Soaked Fish</span>';

print str_replace('{class}', $my_class, $html);