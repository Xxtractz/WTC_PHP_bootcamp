#!/usr/bin/php
<?php
$newstr = [];
unset($argv[0]);
foreach ($argv as $arr)
    $newstr = array_merge($newstr, explode(" ", $arr));
natcasesort($newstr);
foreach ($newstr as $v)
    if(ctype_alpha($v[0]))
        echo $v . "\n";
rsort($newstr);
foreach ($newstr as $v)
    if (ctype_digit($v[0]))
    echo $v . "\n";
sort($newstr);
foreach ($newstr as $v)
    if (!ctype_alnum($v[0]) && !ctype_alpha($v[0]))
    echo $v . "\n";
?>