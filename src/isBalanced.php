<?php

function isBalanced($str)
{
    $stackArray=[];
    $balanceArray=['[]', '{}', '()'];
    $openArray=['[', '{', '('];
    $count=strlen($str);
    $balanceStr = '';

    for($i = 0; $i < $count; $i++) {
        if (in_array($str[$i], $openArray)) {
            array_push($stackArray, $str[$i]);
        }else {
            $balanceStr = array_pop($stackArray) . $str[$i];    
            return in_array($balanceStr, $balanceArray);
        }
    }
        return empty($stackArray);
}