<?php

// Task 02
// Дана переменная $foo. Напишите цикл, который в переменную $out создает строку от $foo (включительно) до нуля с разделителем _. Например, в $foo лежит число 3. В out должна лежать строка вида 3_2_1_0_
// Строку $out выведите в консоль.

$foo = 4;
$out = '';

for ($i = $foo; $i >= 0; $i--) {
  $out .= $i . '_';
}
echo $out;