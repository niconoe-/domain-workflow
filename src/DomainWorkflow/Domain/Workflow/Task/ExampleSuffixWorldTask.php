<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow\Task;

use Niconoe\DomainWorkflow\Domain\Workflow\WorkflowInterface;

/**
 * @internal For tests.
 * Suffixes the word "World" to a string.
 */
final class ExampleSuffixWorldTask implements TaskInterface
{
    /**
     * {@inheritDoc}
     */
    public function execute(WorkflowInterface $workflow): void
    {
        $workflow->getData()->string .= 'World';
    }
}
