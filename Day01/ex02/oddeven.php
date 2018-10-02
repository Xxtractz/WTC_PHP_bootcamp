#!/usr/bin/php
<?php

function check($int)
{
    if (($int % 2) == 0)
        echo "The number $int is even\n";
    else
        echo "The number $int is odd\n";
}

while(1)
{
    echo "Enter a number: ";

    $input = fgets(STDIN, 1024);

    if ($input == NULL) 
        {
            echo "^D\n";
            exit(0);
        }
    $input = trim($input);
    if (is_numeric($input)) 
        check($input);
    else 
        echo "'$input' is not a number\n";
}
?>