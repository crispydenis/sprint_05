<?php

// Task 01
// Дана переменная $foo. Напишите цикл, который в переменную $out создает строку вида 0_1_2_3_4_ и так до числа хранящегося в $foo (включительно). Т.е. если в $foo лежит 5 то строка в out должна быть вида 0_1_2_3_4_5_.
// Строку $out выведите в консоль.

$foo = 8;
$out = '';

for ($i = 0; $i <= $foo; $i++) {
  $out .= $i . '_';
}
echo $out;
