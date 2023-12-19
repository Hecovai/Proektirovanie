<?php
$sum = 0;
$N = $_POST['N'];
$x = $_POST['X'];
if (-1 < $x && $x <= 1) {
for ($i = 0; $i <= $N; $i++) {
$sum = $sum + (((-1) ** $i) * ($x ** ($i + 1)) / ($i + 1));
}
echo $sum;
} else {
echo "Введёное значение X не соответствует";
}
?>