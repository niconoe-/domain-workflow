<?php
declare(strict_types = 1);

namespace Niconoe\DomainWorkflow\Infrastructure;

use stdClass;

/**
 * Interface StdObjectInterface
 */
interface StdObjectInterface
{
    /**
     * Cast the current instance into an stdClass object, keeping its properties.
     * @return stdClass
     */
    public function toStdClass(): stdClass;
}
