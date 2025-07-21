<?php
function lengthOfLastWord($s)
{
    $arr = array_filter(explode(' ', trim($s))); // убираем пустые строки
    $last = array_pop($arr);
    return strlen($last);
}

$input = trim(fgets(STDIN));
echo lengthOfLastWord($input) . PHP_EOL;
