<?php

/*********************************************************************
 * This code is licensed under the GPL-3.0 license and is part of a
 * ILIAS plugin developed by sr Solutions ag in Switzerland.
 *
 * https://sr.solutions
 *
 *********************************************************************/

declare(strict_types=1);

namespace srag\Plugins\SrMemberships\Person\Persons\Source;

use ilRbacReview;
use Generator;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
class RolesPersonSource implements PersonSource
{
    public function __construct(protected array $role_ids, private readonly \ilRbacReview $rbac_review)
    {
    }

    public function getRawEntries(): Generator
    {
        foreach ($this->role_ids as $role_id) {
            yield from array_map(
                fn($user_id): int => (int) $user_id,
                $this->rbac_review->assignedUsers((int) $role_id)
            );
        }
    }
}
