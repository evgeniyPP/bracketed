<?php

namespace Epp\Bracketed;

class InvalidArgumentException extends \Exception
{
    public function __construct($msg = 'Некорректные символы в строке ввода')
    {
        parent::__construct($msg);
    }
}
