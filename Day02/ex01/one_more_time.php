#!/usr/bin/php
<?php
function fte($array)
{
    if ($array[2] === "Janvier")
        return ("January");
    else if ($array[2] === "Fevrier")
        return ("February");
    else if ($array[2] === "Mars")
        return ("March");
    else if ($array[2] === "Avril")
        return ("April");
    else if ($array[2] === "Mai")
        return ("May");
    else if ($array[2] === "Juin")
        return ("June");
    else if ($array[2] === "Juillet")
        return ("July");
    else if ($array[2] === "Aout")
        return ("August");
    else if ($array[2] === "Septembre")
        return ("September");
    else if ($array[2] === "Octobre")
        return ("October");
    else if ($array[2] === "Novembre")
        return ("November");
    else if ($array[2] === "Decembre")
        return ("December");
}

if ($argv[1])
{
    $string = $argv[1];
    $n = preg_match("/(^Lundi|Mardi|Mercredi|Jeudi|Vendredi|Samedi|Dimanche)+\s+\d{1,2}+\s+(Janvier|Fevrier|Mars|Avril|Mai|Juin|Juillet|aout|Septembre|Octobre|Novembre|Decembre)+\s+\d{4}+\s+\d{2}+(:)+\d{2}+(:)+\d{2}$/i" ,$string);

    if ($n != 1)
        echo "Wrong Format\n";
    else
    {
        $array = preg_split("/[\s]/", trim($string));
        $month = fte($array);
        $time =  strtotime($array[1]." ".$month." ".$array[3]." ".$array[4]);
        $time1 = strtotime("01 January 1970 01:00:00");
        $difference = $time - $time1;
        echo $difference,"\n";
    }
}
?>