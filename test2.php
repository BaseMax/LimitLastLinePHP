<?php
// https://github.com/BaseMax/LimitLastLinePHP
$string="1
2
3
4
5
6";
$lines = explode("\n", trim($string));
unset($lines[count($lines) - 1]);
$result=implode($lines);
print $result;

print "-------\n";

unset($lines[count($lines) - 1]);
$result=implode($lines);
print $result;
