<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Infrastructure;

use stdClass;
use function get_object_vars;

/**
 * Trait StdObjectTrait
 */
trait StdObjectTrait
{
    /**
     * {@inheritDoc}
     */
    public function toStdClass(): stdClass
    {
        return (object)get_object_vars($this);
    }
}
