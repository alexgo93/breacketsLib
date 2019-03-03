<?php

function isBalanced(string $str) : bool
{
    $stackArray = [];
    $balanceArray = ['[]', '{}', '()'];
    $openArray = ['[', '{', '('];
    $count = strlen($str);

    for ($i = 0; $i < $count; $i += 1) {
        if (in_array($str[$i], $openArray)) {
            array_push($stackArray, $str[$i]);
        } else {
            $balanceStr = array_pop($stackArray) . $str[$i];

            if (in_array($balanceStr, $balanceArray)) {
                $balanceStr = '';
            } else {
                return false;
            }
        }
    }

    if (empty($stackArray)) {
        return true;
    }
}
