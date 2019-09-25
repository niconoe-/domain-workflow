<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow\Task;

use Niconoe\DomainWorkflow\Domain\Workflow\WorkflowInterface;

/**
 * @internal For tests.
 * Does the double of an integer.
 */
final class ExampleDoubleTask implements TaskInterface
{
    /**
     * {@inheritDoc}
     */
    public function execute(WorkflowInterface $workflow): void
    {
        $workflow->getData()->int *= 2;
    }
}
