<?php

namespace App\Application\UseCase\AddTask;

class AddTaskCommand
{

    public function __construct(
        protected string $task
    )
    {
    }
}
