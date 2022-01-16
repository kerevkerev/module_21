<?php
$a = 'Мои знания на';
$b = 100;
$c = '%';
?>

<?php
$variable = '
$a = 10;
$b = 20;'
?>

<?php
$operation = '
echo $a + $b;
echo $a -­ $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;
echo $a ** $b;'
?>


<?php
$if = '
$num = -10;
$result;
if ($num > 0) {
    $result = " Число $num положительное";
} else {
    $result = \'Неверно!\';
}';

$num = -10;
$result;
if ($num > 0) {
    $result = " Число $num положительное";
} else {
    $result = " Число $num отрицательное";
}
?>

<?php
$fun = '
function fibo($num)
{
    if ($num <= 30) {
        if ($num == 0) return 0;
        if ($num == 1 || $num == 2) {
            return 1;
        } else {
            return fibo($num - 1) + fibo($num - 2);
        }
    }
}
echo fibo($num);
';

function fibo($num)
{
    if ($num <= 30) {
        if ($num == 0) return 0;
        if ($num == 1 || $num == 2) {
            return 1;
        } else {
            return fibo($num - 1) + fibo($num - 2);
        }
    }
}


?>