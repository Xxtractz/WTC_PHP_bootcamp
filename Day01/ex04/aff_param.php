#!/usr/bin/php
<?php
    for ($i = 1; $i < $argc; $i++)
    {
        $newstr = preg_split('/[\s]+/', trim($argv[$i]));
        foreach($newstr as $v)
        {
            echo $v."\n";
        }  
    }

?>