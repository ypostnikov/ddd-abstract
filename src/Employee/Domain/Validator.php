<?php

namespace AbstractArea\Employee\Domain;

/**
 * Class Validator
 * @package AbstractArea\Employee\Domain
 */
abstract class Validator
{

    /**
     * @var ValidationHandler
     */
    private $validationHandler;

    /**
     * Validator constructor.
     * @param ValidationHandler $validationHandler
     */
    public function __construct(ValidationHandler $validationHandler)
    {
        $this->validationHandler = $validationHandler;
    }

    /**
     * @param $error
     */
    protected function handleError($error)
    {
        $this->validationHandler->handleError($error);
    }

    /**
     * @return mixed
     */
    abstract public function validate();

}
