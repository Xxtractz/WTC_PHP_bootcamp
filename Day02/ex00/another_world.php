#!/usr/bin/php
<?php
if ($argv[1])
{
    $arr = preg_replace("# [\s\t]+#"," ", trim($argv[1]));
    echo $arr,"\n";
}
?>
