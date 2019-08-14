<?php
// https://github.com/BaseMax/LimitLastLinePHP
$string="1
2
3
4
5
6";
print join("\n", array_slice(explode("\n", $string), 0, -1));
print "-------\n";
print join("\n", array_slice(explode("\n", $string), 0, -2));
