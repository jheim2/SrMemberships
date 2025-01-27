<?php

/*********************************************************************
 * This code is licensed under the GPL-3.0 license and is part of a
 * ILIAS plugin developed by sr Solutions ag in Switzerland.
 *
 * https://sr.solutions
 *
 *********************************************************************/

declare(strict_types=1);

namespace srag\Plugins\SrMemberships\Workflow\Mode;

use srag\Plugins\SrMemberships\Workflow\WorkflowContainer;
use srag\Plugins\SrMemberships\Workflow\Mode\Run\RunModes;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
interface ObjectModeRepository
{
    public function getSyncMode(int $ref_id, WorkflowContainer $workflow_container): ?Mode;

    public function storeSyncMode(int $ref_id, WorkflowContainer $workflow_container, Mode $mode): void;

    /**
     * @return RunModes|null
     */
    public function getRunModes(int $ref_id, WorkflowContainer $workflow_container): ?Modes;

    public function storeRunModes(int $ref_id, WorkflowContainer $workflow_container, RunModes $modes): void;
}
