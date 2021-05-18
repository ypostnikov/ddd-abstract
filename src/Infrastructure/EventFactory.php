<?php

namespace AbstractArea\Infrastructure;

use AbstractArea\DomainEvents\DomainEvent;
use AbstractArea\DomainEvents\IDomainEvent;

/**
 * Class EventFactory
 * @package AbstractArea\DomainEvent
 */
class EventFactory
{

    /**
     * @param string $method
     * @param $obj
     * @return IDomainEvent
     */
    public static function create(string $method, $obj): IDomainEvent
    {
        return new DomainEvent($method, serialize($obj));
    }

}
