<?php


namespace ValidateInput;


use Throwable;

class ValidateException extends \RuntimeException
{
    public function __construct($message = "", $code = -1, Throwable $previous = null)
    {
        if (is_array($message)) {
            if (!empty($message['code'])) {
                $code = $message['code'];
            }

            if (!empty($message['msg'])) {
                $msg = $message['msg'];
            } else {
                $msg = '系统错误';
            }
        } else {
            $msg = $message;
        }
        parent::__construct($msg, $code, $previous);
    }
}
