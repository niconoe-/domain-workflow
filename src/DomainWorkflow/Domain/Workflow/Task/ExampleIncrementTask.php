<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow\Task;

use Niconoe\DomainWorkflow\Domain\Workflow\WorkflowInterface;

/**
 * @internal For tests.
 * Increments of an integer.
 */
final class ExampleIncrementTask implements TaskInterface
{
    /**
     * {@inheritDoc}
     */
    public function execute(WorkflowInterface $workflow): void
    {
        ++$workflow->getData()->int;
    }
}
