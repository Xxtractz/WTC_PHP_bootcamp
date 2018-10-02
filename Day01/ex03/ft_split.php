<?php
    function ft_split($str)
    {
        $newstr = explode(' ', trim($str));
        sort($newstr);
        return $newstr;
    }
?>
