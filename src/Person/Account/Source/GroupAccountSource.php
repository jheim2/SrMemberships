<?php

/*********************************************************************
 * This code is licensed under the GPL-3.0 license and is part of a
 * ILIAS plugin developed by sr Solutions ag in Switzerland.
 *
 * https://sr.solutions
 *
 *********************************************************************/

declare(strict_types=1);

namespace srag\Plugins\SrMemberships\Person\Account\Source;

use ilGroupParticipants;
use ilObject2;
use Generator;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
class GroupAccountSource implements AccountSource
{
    /**
     * @readonly
     */
    private \ilGroupParticipants $group_members;

    public function __construct(int $ref_id)
    {
        $this->group_members = new ilGroupParticipants(ilObject2::_lookupObjectId($ref_id));
    }

    public function getRawEntries(): Generator
    {
        yield from $this->group_members->getMembers();
    }
}
