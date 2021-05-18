<?php

namespace AbstractArea\DomainEvents;

/**
 * Class DomainEventPublisher
 * @package AbstractArea\DomainEvent
 */
interface IDomainEventPublisher
{

    /**
     * @param DomainEvent $event
     * Dispatch some event
     * @return mixed
     */
    public function dispatch(DomainEvent $event);

}
