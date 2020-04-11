<?php

namespace Epp\Bracketed;

class Bracketed
{
    public static function validate($args)
    {
        if (!preg_match_all("/^[\(\)\ \n\t\r]+$/", $args)) {
            throw new InvalidArgumentException();
        }

        $arr = str_split($args);
        $left = 0;

        foreach ($arr as $element) {
            if ($element === '(') {
                $left++;
            } else if ($element === ')') {
                $left--;

                if ($left < 0) {
                    return false;
                }
            }
        }

        if ($left === 0) {
            return true;
        } else {
            return false;
        }
    }
}
