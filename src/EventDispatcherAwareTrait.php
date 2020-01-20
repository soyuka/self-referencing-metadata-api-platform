<?php

namespace App;

use \Symfony\Component\EventDispatcher\EventDispatcherInterface;

trait EventDispatcherAwareTrait
{

    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @inheritDoc
     */
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }
}
