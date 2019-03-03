<?php

use function \cli\out;
use function \cli\input;

function run()
{
    out("Enter a string of brackets\n");
    $brackets = input();
    return isBalanced($brackets);
}
