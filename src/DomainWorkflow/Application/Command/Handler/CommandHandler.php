<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Application\Command\Handler;

use Niconoe\DomainWorkflow\Application\Command\CommandInterface;
use Niconoe\DomainWorkflow\Domain\Workflow\WorkflowInterface;

/**
 * The CommandHandler needs to process a Command through a Workflow.
 * This produce a result the WorkflowCommand is responsible to return.
 */
final class CommandHandler implements CommandHandlerInterface
{
    /** @var WorkflowInterface */
    private $workflow;

    /**
     * @param WorkflowInterface $workflow
     */
    public function __construct(WorkflowInterface $workflow)
    {
        $this->workflow = $workflow;
    }

    /**
     * {@inheritDoc}
     */
    public function process(CommandInterface $command)
    {
        $this->workflow->process($command->toStdClass());
        return $this->workflow->getResult();
    }
}
