<?php
$char='a';
$next_char= chr(ord($char) + 1);
 if ($next_char == '{')
    $next_char = 'a';
echo $next_char;
?>