<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Application\Command;

use Niconoe\DomainWorkflow\Infrastructure\StdObjectInterface;

/**
 * @internal For tests.
 *
 * Interface of the command.
 * Application Layer
 */
interface CommandInterface extends StdObjectInterface
{
    /**
     * Emulation of an integer data on the command to get.
     * @return int
     */
    public function getInt(): int;

    /**
     * Emulation of a string data on the command to get.
     * @return string
     */
    public function getString(): string;
}
