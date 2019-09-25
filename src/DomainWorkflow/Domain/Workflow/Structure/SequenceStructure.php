<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow\Structure;

use Niconoe\DomainWorkflow\Domain\Workflow\Task\TaskInterface;
use Niconoe\DomainWorkflow\Domain\Workflow\WorkflowInterface;

/**
 * Structure that execute his task then call the next structure.
 */
final class SequenceStructure implements StructureInterface
{
    /** @var StructureInterface */
    private $next;

    /** @var TaskInterface */
    private $task;

    /**
     * SequenceStructure constructor.
     *
     * @param StructureInterface $next
     * @param TaskInterface $task
     */
    public function __construct(TaskInterface $task, StructureInterface $next)
    {
        $this->next = $next;
        $this->task = $task;
    }

    /**
     * @param WorkflowInterface $workflow
     */
    public function process(WorkflowInterface $workflow): void
    {
        $this->task->execute($workflow);
        $this->next->process($workflow);
    }
}
