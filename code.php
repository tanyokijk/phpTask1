<?php

$Name = "Tanya";
echo "Hello! My name is '$Name'";
$Age = 18;
echo "I`m " . $Age;
$a = 6;
$b = 7;
$rez = $a + $b;
echo "'$a' + '$b' = '$rez'";

echo "Before swapping: a = $a, b = $b\n";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After swapping: a = $a, b = $b\n";

$questions = array(
    'first' => ['A' => true, 'B' => false, 'C' => false, 'D' => false],
    'second' => ['A' => true, 'B' => true, 'C' => false, 'D' => false],
    'third' => ['A' => true, 'B' => true, 'C' => true, 'D' => false],
    'fourth' => 'Answer',
    'fifth' => 'Answer',
    'sixth' => 'Answer'
);

$tag = 'Hello';
$background_color_blue = 'blue';
$color_red = 'red';
$width_100px = '100px';
$height_100px = '100px';

?>