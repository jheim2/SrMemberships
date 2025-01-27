<?php

/*********************************************************************
 * This code is licensed under the GPL-3.0 license and is part of a
 * ILIAS plugin developed by sr Solutions ag in Switzerland.
 *
 * https://sr.solutions
 *
 *********************************************************************/

declare(strict_types=1);

namespace srag\Plugins\SrMemberships\Person\Account\Resolver;

use srag\Plugins\SrMemberships\Person\Account\Source\AccountSource;
use srag\Plugins\SrMemberships\Person\Account\AccountList;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
interface AccountResolver
{
    public function resolveFor(AccountSource $source): AccountList;
}
