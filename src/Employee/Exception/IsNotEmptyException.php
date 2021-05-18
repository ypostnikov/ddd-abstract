<?php

namespace AbstractArea\Employee\Domain;

use Exception;
use Throwable;

class IsEmptyException extends Exception
{
    /**
     * IsEmptyException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct("Value is empty!!!");
    }

}
