<?php

/*********************************************************************
 * This code is licensed under the GPL-3.0 license and is part of a
 * ILIAS plugin developed by sr Solutions ag in Switzerland.
 *
 * https://sr.solutions
 *
 *********************************************************************/

declare(strict_types=1);

namespace srag\Plugins\SrMemberships\Person\Account;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
class ILIASAccount implements Account
{
    public function __construct(protected int $user_id)
    {
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }
}
