<?php

namespace App\Domain\Task;

interface TaskRepositoryInterface
{
    public function nextId(): int;
    public function save(Task $task): Task;
}
