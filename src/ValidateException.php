<?php


namespace ValidateInput;


use Throwable;

class ValidateException extends \RuntimeException
{
    public function __construct($message = "", $code = 101001, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}