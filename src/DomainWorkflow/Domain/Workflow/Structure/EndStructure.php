<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow\Structure;

use Niconoe\DomainWorkflow\Domain\Workflow\Task\TaskInterface;
use Niconoe\DomainWorkflow\Domain\Workflow\WorkflowInterface;

/**
 * Structure that only execute a task.
 */
final class EndStructure implements StructureInterface
{
    /** @var TaskInterface */
    private $task;

    /**
     * EndStructure constructor.
     *
     * @param TaskInterface $task
     */
    public function __construct(TaskInterface $task)
    {
        $this->task = $task;
    }

    /**
     * @param WorkflowInterface $workflow
     */
    public function process(WorkflowInterface $workflow): void
    {
        $this->task->execute($workflow);
    }
}
