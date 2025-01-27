<?php

/*********************************************************************
 * This code is licensed under the GPL-3.0 license and is part of a
 * ILIAS plugin developed by sr Solutions ag in Switzerland.
 *
 * https://sr.solutions
 *
 *********************************************************************/

declare(strict_types=1);

namespace srag\Plugins\SrMemberships;

use Closure;
use ILIAS\Refinery\Transformation;
use srag\Plugins\SrMemberships\Container\Init;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
trait TrafoGenerator
{
    public function trafo(Closure $closure): Transformation
    {
        $container = Init::init($GLOBALS['DIC']);
        $refinery = $container->dic()->refinery();

        return $refinery->custom()->transformation($closure);
    }
}
