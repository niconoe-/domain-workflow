<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Application\Command\Handler;

use Niconoe\DomainWorkflow\Application\Command\CommandInterface;

/**
 * The WorkflowCommand needs to process a Command through a Workflow.
 * Application Layer
 */
interface CommandHandlerInterface
{
    /**
     * Initialize the Workflow with the command data and run it.
     * @param CommandInterface $command
     * @return mixed
     */
    public function process(CommandInterface $command);
}
