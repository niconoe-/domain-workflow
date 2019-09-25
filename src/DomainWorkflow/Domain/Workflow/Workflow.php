<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow;

use Niconoe\DomainWorkflow\Domain\Workflow\Structure\StructureInterface;
use stdClass;

/**
 * Concrete Workflow
 * Domain Layer
 */
final class Workflow implements WorkflowInterface
{
    /** @var stdClass The workflow data. */
    private $data;

    /** @var StructureInterface */
    private $workflowStructure;

    /**
     * @param StructureInterface $workflowStructure
     */
    public function __construct(StructureInterface $workflowStructure)
    {
        $this->workflowStructure = $workflowStructure;
    }

    /**
     * @return stdClass
     */
    public function getData(): stdClass
    {
        return $this->data;
    }

    /**
     * {@inheritDoc}
     */
    public function process(stdClass $data): void
    {
        $this->data = $data;
        $this->workflowStructure->process($this);
    }

    /**
     * {@inheritDoc}
     */
    public function getResult()
    {
        return $this->data;
    }
}
