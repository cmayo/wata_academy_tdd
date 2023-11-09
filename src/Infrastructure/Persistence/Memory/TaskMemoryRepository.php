<?php

namespace App\Infrastructure\Persistence\Memory;

use App\Domain\Task\Task;
use App\Domain\Task\TaskRepositoryInterface;

class TaskMemoryRepository implements TaskRepositoryInterface
{
    protected array $tasks = [];

    public function nextId(): int
    {
        return count($this->tasks) + 1;
    }

    public function save(Task $task): Task
    {
        $this->tasks[] = $task;

        return $task;
    }

    public function getAll(): array
    {
        return $this->tasks;
    }


}
