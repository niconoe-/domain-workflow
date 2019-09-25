<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Application\Command;

use Niconoe\DomainWorkflow\Infrastructure\StdObjectTrait;

/**
 * @internal For Tests.
 * Immutable Concrete Command.
 */
final class Command implements CommandInterface
{
    use StdObjectTrait;

    /** @var int */
    private $int;

    /** @var string */
    private $string;

    /**
     * @param int $int
     * @param string $string
     */
    public function __construct(int $int, string $string)
    {
        $this->int = $int;
        $this->string = $string;
    }

    /**
     * {@inheritDoc}
     */
    public function getInt(): int
    {
        return $this->int;
    }

    /**
     * {@inheritDoc}
     */
    public function getString(): string
    {
        return $this->string;
    }
}
