<?php

class Description
{
    function __construct($PostData)
    {
        $arr = [];
        $keys = array_keys($PostData);
        for ($i = 4; $i <= count($keys) - 2; $i++) {
            array_push($arr, $_POST[$keys[$i]]);
        }
        return (implode("X", $arr));
    }
}
