<?php

/*********************************************************************
 * This code is licensed under the GPL-3.0 license and is part of a
 * ILIAS plugin developed by sr Solutions ag in Switzerland.
 *
 * https://sr.solutions
 *
 *********************************************************************/

declare(strict_types=1);

namespace srag\Plugins\SrMemberships\Workflow\ByMatriculation\Config;

use srag\Plugins\SrMemberships\Workflow\Config\AbstractDBWorkflowConfig;

/**
 * @author Fabian Schmid <fabian@sr.solutions>
 */
class ByMatriculationConfig extends AbstractDBWorkflowConfig
{
    public const F_OFFER_WORKFLOW_TO = 'offer_workflow_to';

    public function getNameSpace(): string
    {
        return 'by_matriculation';
    }
}
