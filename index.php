<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 1</title>
</head>
<body>

<?php
$Name = "Tanya";
echo "Hello! My name is '$Name'";
?>
<br>
<?php
$Age = 18;
echo "I`m " . $Age;
?>
<br>
<?php
$a = 6;
$b = 7;
$rez = $a + $b;
echo "'$a' + '$b' = '$rez'";
?>
<br>
<?php
echo "До перестановки: a = $a, b = $b\n";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo " Після: a = $a, b = $b\n";
$questions = array(
    'first' => ['A' => true, 'B' => false, 'C' => false, 'D' => false],
    'second' => ['A' => true, 'B' => true, 'C' => false, 'D' => false],
    'third' => ['A' => true, 'B' => true, 'C' => true, 'D' => false],
    'fourth' => 'Answer',
    'fifth' => 'Answer',
    'sixth' => 'Answer'
);
?>


<p><?= array_keys($questions)[0] ?> :</p>

<?php
foreach ($questions['first'] as $key => $value): ?>
    <?php
    if ($value === true): ?>
        <input type="radio" value="<?= $key ?>">
        <label for="<?= $key ?>" style="color: green;"><?= $key ?></label><br>
    <?php
    else: ?>
        <input type="radio" value="<?= $key ?>">
        <label for="<?= $key ?>"><?= $key ?></label><br>
    <?php
    endif; ?>
<?php
endforeach; ?>

<p><?= array_keys($questions)[1] ?> :</p>
<?php
foreach ($questions['second'] as $key => $value): ?>
    <?php
    if ($value === true): ?>
        <input type="checkbox" value="<?= $key ?>">
        <label for="<?= $key ?>" style="color: green;"><?= $key ?></label><br>
    <?php
    else: ?>
        <input type="checkbox" value="<?= $key ?>">
        <label for="<?= $key ?>"><?= $key ?></label><br>
    <?php
    endif; ?>
<?php
endforeach; ?>

<p><?= array_keys($questions)[2] ?> :</p>
<?php
foreach ($questions['third'] as $key => $value): ?>
    <?php
    if ($value === true): ?>
        <input type="checkbox" value="<?= $key ?>">
        <label for="<?= $key ?>" style="color: green;"><?= $key ?></label><br>
    <?php
    else: ?>
        <input type="checkbox" value="<?= $key ?>">
        <label for="<?= $key ?>"><?= $key ?></label><br>
    <?php
    endif; ?>
<?php
endforeach; ?>


<br>
<label><?= array_keys($questions)[3] ?> :</label>
<input type="text" placeholder="<?= $questions['fourth'] ?>">
<br>

<br>
<label><?= array_keys($questions)[4] ?> :</label>
<input type="text" placeholder="<?= $questions['fifth'] ?>">
<br>

<br>
<label><?= array_keys($questions)[5] ?> :</label>
<input type="text" placeholder="<?= $questions['sixth'] ?>">

<br>
<?php
$tag = 'Hello';
$background_color_blue = 'blue';
$color_red = 'red';
$width_100px = '100px';
$height_100px = '100px';
echo "<br>background_color : " . $background_color_blue;
echo "<br>color: " . $color_red;
echo "<br>width: " . $width_100px;
echo "<br>height: " . $height_100px;
?>
<div style="
        background-color: <?= $background_color_blue ?>;
        color: <?= $color_red ?>;
        width: <?= $width_100px ?>;
        height: <?= $height_100px ?>;">

    <?= $tag ?>
</div>

</body>
</html>