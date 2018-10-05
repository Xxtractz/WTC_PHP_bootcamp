#!/usr/bin/php
<?php

$file = fopen("/var/run/utmpx", "r");
$stack = [];
$newstack = [];
date_default_timezone_set("Africa/Johannesburg");
while ($read = fread($file, 628))
{
   $stack = unpack("a256ut_user/a4ut_id/a32ut_line/iut_pid/iut_type/I2ut_time ", $read);
   if ($stack[ut_type] == 7)
        array_push($newstack, $stack);
}
foreach ($newstack as $pri)
    printf("%s  %s  %s\n", $pri[ut_user], $pri[ut_line], date("M  j H:i", $pri["ut_time 1"]));
?>