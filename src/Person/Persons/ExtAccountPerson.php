<?php

/*********************************************************************
 * This code is licensed under the GPL-3.0 license and is part of a
 * ILIAS plugin developed by sr Solutions ag in Switzerland.
 *
 * https://sr.solutions
 *
 *********************************************************************/

declare(strict_types=1);

namespace srag\Plugins\SrMemberships\Person\Persons;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
class ExtAccountPerson implements Person
{
    public function __construct(protected string $ext_account)
    {
    }

    public function getUniqueIdentification(): string
    {
        return $this->ext_account;
    }

    public function isAccountCreatable(): bool
    {
        return false;
    }
}
