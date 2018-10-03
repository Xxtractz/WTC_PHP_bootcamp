#!/usr/bin/php
<?php
$newstr = [];
unset($argv[0]);
foreach ($argv as $arr)
    $newstr = array_merge($newstr, explode(" ", $arr));
usort($newstr);

foreach ($newstr as $v)
    if(ctype_alpha($av[0]))
        echo $v . "\n";

foreach ($newstr as $v)
    if (is_numeric($av))
    echo $v . "\n";
foreach ($newstr as $v)
    if (is_writable($av))
    echo $v . "\n";

?>