#!/usr/bin/php
<?php
$newstr = [];
unset($argv[0]);
foreach ($argv as $arr)
    $newstr = array_merge($newstr, explode(" ",$arr));
sort($newstr);
foreach ($newstr as $v)
    echo $v . "\n";
?>