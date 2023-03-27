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

namespace srag\Plugins\SrMemberships\Person\Persons;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
class UserIdPerson implements Person
{
    /**
     * @var int
     */
    protected $user_id;

    public function __construct(int $user_id)
    {
        $this->user_id = $user_id;
    }

    public function getUniqueIdentification(): string
    {
        return (string) $this->user_id;
    }

    public function isAccountCreatable(): bool
    {
        return false;
    }
}
