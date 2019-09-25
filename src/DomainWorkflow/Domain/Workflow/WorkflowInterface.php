<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow;

use stdClass;

/**
 * Workflow rules
 */
interface WorkflowInterface
{
    /**
     * @return stdClass
     */
    public function getData(): stdClass;

    /**
     * Start the workflow process with the given data.
     * @param stdClass $data
     */
    public function process(stdClass $data): void;

    /**
     * Return the result of the workflow.
     * @return mixed
     */
    public function getResult();
}
