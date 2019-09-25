<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow\Task;

use Niconoe\DomainWorkflow\Domain\Workflow\WorkflowInterface;

/**
 * Represent any task to execute.
 */
interface TaskInterface
{
    /**
     * Execute a task using the workflow to interact with the data.
     * @param WorkflowInterface $workflow
     */
    public function execute(WorkflowInterface $workflow): void;
}
