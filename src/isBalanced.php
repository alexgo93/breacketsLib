<?php

function isBalanced($str)
{
    $stackArray=[];
    $balanceArray=['[]', '{}', '()'];
    $openArray=['[', '{', '('];
    $count=strlen($str);

    for($i = 0; $i < $count; $i++) {
        if (in_array($str[$i], $openArray)) {
            array_push($stackArray, $str[$i]);
        }else {
            $balanceStr = array_pop($stackArray) . $str[$i];

            if(in_array($balanceStr, $balanceArray)) {
                $balanceStr = '';
            }else {
                return false;
            }
        }
    }

    return empty($stackArray);
}
