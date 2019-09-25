<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow\Structure;

use Niconoe\DomainWorkflow\Domain\Workflow\WorkflowInterface;

/**
 * Represent any kind of structure for the workflow process.
 */
interface StructureInterface
{
    /**
     * Process the structure by executing tasks in a specific order determined by the structure.
     * @param WorkflowInterface $workflow
     */
    public function process(WorkflowInterface $workflow): void;
}
