<?php

namespace App\Tests\Infrastructure\Persistence\Memory;

use App\Domain\Task\Task;
use App\Infrastructure\Persistence\Memory\TaskMemoryRepository;
use PHPUnit\Framework\TestCase;

class TaskMemoryRepositoryTest extends TestCase
{
    public function testGetNextId(): void
    {
        // Arrange
        $expectedNextId = 1;
        $taskRepository = new TaskMemoryRepository();

        // Act
        $nextId = $taskRepository->nextId();

        // Assert
        $this->assertEquals($expectedNextId, $nextId);
    }

    public function testSaveTask(): void
    {
        // Arrange
        $taskRepository = new TaskMemoryRepository();
        $task = new Task(1, 'My new task');

        // Act
        $savedTask = $taskRepository->save($task);

        // Assert
        $this->assertEquals(2, $taskRepository->nextId());
    }


}
