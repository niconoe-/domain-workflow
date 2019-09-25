<?php
declare(strict_types = 1);

use Niconoe\DomainWorkflow\Application\Command\Command;
use Niconoe\DomainWorkflow\Application\Command\Handler\CommandHandler;
use Niconoe\DomainWorkflow\Domain\Workflow\Structure\EndStructure;
use Niconoe\DomainWorkflow\Domain\Workflow\Structure\ParallelStructure;
use Niconoe\DomainWorkflow\Domain\Workflow\Structure\SequenceStructure;
use Niconoe\DomainWorkflow\Domain\Workflow\Task\ExampleDoubleTask;
use Niconoe\DomainWorkflow\Domain\Workflow\Task\ExampleIncrementTask;
use Niconoe\DomainWorkflow\Domain\Workflow\Task\ExampleSquareTask;
use Niconoe\DomainWorkflow\Domain\Workflow\Task\ExampleSuffixWorldTask;
use Niconoe\DomainWorkflow\Domain\Workflow\Workflow;

include dirname(__DIR__) . '/vendor/autoload.php';

$command = new Command(1, 'Hello ');
$workflow = new Workflow(
    new ParallelStructure(
        new EndStructure(new ExampleDoubleTask()),
        new ParallelStructure(
            new SequenceStructure(new ExampleIncrementTask(), new EndStructure(new ExampleDoubleTask())),
            new EndStructure(new ExampleIncrementTask()),
            new EndStructure(new ExampleSquareTask())
        ),
        new EndStructure(new ExampleSuffixWorldTask())
    )
);
$result = (new CommandHandler($workflow))->process($command);

echo 'Parallel + Sequence simple example:' . PHP_EOL;
var_dump($result);
