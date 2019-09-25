<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Domain\Workflow\Structure;

use Amp\Promise;
use Niconoe\DomainWorkflow\Domain\Workflow\WorkflowInterface;
use Throwable;
use function Amp\call;
use function array_map;
use function array_pop;

/**
 * Structure that execute his task then call other structures in parallel.
 */
final class ParallelStructure implements StructureInterface
{
    /** @var StructureInterface */
    private $next;

    /** @var StructureInterface[] */
    private $parallels;

    /**
     * ParallelStructure constructor.
     *
     * @param StructureInterface[] $parallels
     */
    public function __construct(StructureInterface ...$parallels)
    {
        $this->next = array_pop($parallels);
        $this->parallels = $parallels;
    }

    /**
     * @param WorkflowInterface $workflow
     * @throws Throwable
     */
    public function process(WorkflowInterface $workflow): void
    {
        array_map(
            '\Amp\Promise\wait',
            array_map(static function (StructureInterface $current) use ($workflow): Promise {
                return call([$current, 'process'], $workflow);
            }, $this->parallels)
        );

        $this->next->process($workflow);
    }
}
