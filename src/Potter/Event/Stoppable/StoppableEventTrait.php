<?php

declare(strict_types=1);

namespace Potter\Event\Stoppable;

trait StoppableEventTrait 
{
    private bool $propagationStopped = false;
    
    final public function isPropagationStopped(): bool
    {
        return $this->propagationStopped;
    }
    
    final protected function stopPropagation(): void
    {
        $this->propagationStopped = true;
    }
}