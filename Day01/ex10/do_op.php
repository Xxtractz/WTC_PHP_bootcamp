#!/usr/bin/php
<?php
    if($argc == 4)
    {
        $firs = trim($argv[1]);
        $last = trim($argv[3]);
        $oper = trim($argv[2]);
        
        if ($oper === "+") {
            $final = $firs + $last;
        } elseif ($oper === "-") {
            $final = $firs - $last;
        } elseif ($oper === "*") {
            $final = $firs * $last;
        } elseif ($oper === "/") {
            $final = $firs / $last;
        } elseif ($oper === "%") {
            $final = $firs % $last;
        }
        echo $final,"\n";
    }
    else
        echo "Incorrect Parameters\n";
?>