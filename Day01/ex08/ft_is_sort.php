<?php
function ft_is_sort($value)
{
    $ret = array_values($value);
    sort($ret);
    return ($value == $ret);
}
?>