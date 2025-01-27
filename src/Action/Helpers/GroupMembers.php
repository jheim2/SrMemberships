<?php

/*********************************************************************
 * This code is licensed under the GPL-3.0 license and is part of a
 * ILIAS plugin developed by sr Solutions ag in Switzerland.
 *
 * https://sr.solutions
 *
 *********************************************************************/

declare(strict_types=1);

namespace srag\Plugins\SrMemberships\Action\Helpers;

use ilGroupParticipants;
use ilObject2;
use srag\Plugins\SrMemberships\Person\Account\Account;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
trait GroupMembers
{
    /**
     * @var int
     */
    private $group_ref_id;
    /**
     * @var \ilGroupParticipants
     */
    private $group_members;
    /**
     * @var int
     */
    private $member_role_id;

    public function __construct(int $group_ref_id)
    {
        $this->group_ref_id = $group_ref_id;
        $this->group_members = new ilGroupParticipants(ilObject2::_lookupObjectId($this->group_ref_id));
        $this->member_role_id = $this->resolveMemberRoleId();
    }

    protected function addToContainer(Account $account): void
    {
        $this->group_members->add(
            $account->getUserId(),
            $this->member_role_id
        );
    }

    protected function removeFromContainer(Account $account): void
    {
        $this->group_members->delete($account->getUserId());
    }

    protected function resolveMemberRoleId(): int
    {
        /** @noinspection PhpUndefinedClassConstantInspection */
        return defined('IL_GRP_MEMBER') ? \IL_GRP_MEMBER : ilGroupParticipants::IL_GRP_MEMBER;
    }
}
