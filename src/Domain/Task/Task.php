<?php

namespace App\Domain\Task;

class Task
{
    public function __construct(
        protected int $id,
        protected string $name,
        protected bool $done = false,
    )
    {
    }
}
