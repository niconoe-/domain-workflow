<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow\Task;

use Niconoe\DomainWorkflow\Domain\Workflow\WorkflowInterface;

/**
 * @internal For tests.
 * Does the square of an integer.
 */
final class ExampleSquareTask implements TaskInterface
{
    /**
     * {@inheritDoc}
     */
    public function execute(WorkflowInterface $workflow): void
    {
        $workflow->getData()->int **= 2;
    }
}
