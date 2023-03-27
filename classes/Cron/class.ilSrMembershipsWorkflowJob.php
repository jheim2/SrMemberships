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

use srag\Plugins\SrMemberships\Container;

/**
 * This is the entry point of the plugin-configuration.
 *
 * @author       Thibeau Fuhrer <thibeau@sr.solutions>
 *
 * The classes only purpose is, to forward requests to the configuration
 * to the actual implementation: @see ilSrConfigGUI.
 *
 * @noinspection AutoloadingIssuesInspection
 */
class ilSrMembershipsWorkflowJob extends ilCronJob
{
    public const SRMS_WORKFLOW_JOB = "srms_workflow_job";
    /**
     * @var Container
     */
    private $container;

    public function __construct(ilSrMembershipsPlugin $plugin)
    {
        $this->container = Container::getInstance($plugin);
    }

    public function getId()
    {
        return self::SRMS_WORKFLOW_JOB;
    }

    public function hasAutoActivation()
    {
        return true;
    }

    public function hasFlexibleSchedule()
    {
        return true;
    }

    public function getDefaultScheduleType()
    {
        return ilCronJob::SCHEDULE_TYPE_IN_HOURS;
    }

    public function getDefaultScheduleValue()
    {
        return 6;
    }

    public function run()
    {
        $result = new ilCronJobResult();

        $workflows = $this->container->workflows()->getEnabledWorkflows();
        foreach ($workflows as $workflow) {
            if (!$workflow->getPossiblesModes()->isCron()) {
                continue;
            }
            // Get all assigned objects of this workflow
            foreach ($this->container->toolObjectConfigRepository()->getAssignedRefIds($workflow) as $ref_id) {
                $context = $this->container->contextFactory()->get($ref_id, $this->container->dic()->user()->getId());
                $modes = $this->container->objectModeRepository()->get($ref_id, $workflow);
                $workflow->getActionHandler($context)->performActions($workflow, $context, $modes);
            }
        }
        $result->setStatus(ilCronJobResult::STATUS_OK);

        return $result;
    }

}
