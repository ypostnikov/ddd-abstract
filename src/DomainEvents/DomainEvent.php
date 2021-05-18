<?php

namespace AbstractArea\DomainEvents;

use DateTimeImmutable;

/**
 * Class DomainEvent
 * @package AbstractArea\DomainEvent
 */
class DomainEvent implements IDomainEvent
{

    /**
     * @var string
     */
    public string $state;

    /**
     * @var string
     */
    public string $cname;

    /**
     * @var DateTimeImmutable
     */
    public DateTimeImmutable $dTime;

    /**
     * DomainEvent constructor.
     * @param string $cname
     * @param string $state
     */
    public function __construct(string $cname, string $state)
    {
        $this->state = $state;
        $this->cname = $cname;
        $this->dTime = new DateTimeImmutable();
    }

    /**
     * @return mixed|void
     */
    public function occurredOn()
    {

    }

}
