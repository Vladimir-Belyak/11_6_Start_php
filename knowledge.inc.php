<?php
$varFirstNumber = 79;
$varSecondNumber = 13;
$varBool = true;
$a = 'Мы научились работать с переменными разного типа(int, float, string, boolean и другие)<br/>';
$b = "Можно легко сделать простейшие математические операции(например, для чисел $varFirstNumber и $varSecondNumber):<br/>";
$c = "Сумма чисел $varFirstNumber и $varSecondNumber будет: ".($varFirstNumber + $varSecondNumber)."<br/>";
$d = "Разность чисел $varFirstNumber и $varSecondNumber будет: ".($varFirstNumber -$varSecondNumber)."<br/>";
$e = "Произведение чисел $varFirstNumber и $varSecondNumber будет: ".($varFirstNumber * $varSecondNumber)."<br/>";
$f = "Частное чисел $varFirstNumber и $varSecondNumber будет(округлено до 3 знаков после запятой): ".number_format(($varFirstNumber / $varSecondNumber), 3, '.', '');
?>