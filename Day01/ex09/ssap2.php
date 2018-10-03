#!/usr/bin/php
<?php
$newstr = [];
unset($argv[0]);
foreach ($argv as $arr)
    $newstr = array_merge($newstr, explode(" ", $arr));
sort($newstr, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($newstr as $v)
    if(ctype_alpha($v[0]))
        echo $v . "\n";
foreach ($newstr as $v)
    if (ctype_digit($v[0]))
    echo $v . "\n";
foreach ($newstr as $v)
    if (!ctype_alnum($v[0]) && !ctype_alpha($v[0]))
    echo $v . "\n";
?>