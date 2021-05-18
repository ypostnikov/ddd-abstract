<?php

namespace AbstractArea\DomainEvents;

/**
 * Interface DomainEvent
 * @package AbstractArea\DomainEvent
 */
interface IDomainEvent
{

    /**
     * @return mixed
     */
    public function occurredOn();

}
