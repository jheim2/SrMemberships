<?php

/**
 * This file is part of ILIAS, a powerful learning management system
 * published by ILIAS open source e-Learning e.V.
 *
 * ILIAS is licensed with the GPL-3.0,
 * see https://www.gnu.org/licenses/gpl-3.0.en.html
 * You should have received a copy of said license along with the
 * source code, too.
 *
 * If this is not the case or you just want to try ILIAS, you'll find
 * us at:
 * https://www.ilias.de
 * https://github.com/ILIAS-eLearning
 *
 *********************************************************************/

declare(strict_types=1);

namespace srag\Plugins\SrMemberships\Person\Account;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
class AccountList
{
    private $accounts = [];

    public function __construct(array $accounts = [])
    {
        $this->accounts = $accounts;
    }

    public function addAccount(Account $account): void
    {
        if (isset($this->accounts[$account->getUserId()])) {
            return;
        }
        $this->accounts[$account->getUserId()] = $account;
    }

    public function removeAccount(Account $account): void
    {
        if (!isset($this->accounts[$account->getUserId()])) {
            return;
        }
        unset($this->accounts[$account->getUserId()]);
    }

    /**
     * @return Account[]
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    public function has(Account $account): bool
    {
        return isset($this->accounts[$account->getUserId()]);
    }
}
