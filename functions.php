<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dd')) {
    function dd($var, ...$moreVars)
    {
        VarDumper::dump($var);
        foreach ($moreVars as $var) {
            VarDumper::dump($var);
        }
        exit(1);
    }
}
