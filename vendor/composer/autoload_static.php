<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41e6877b42375d55267017714a73708b
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\Plugins\\SrMemberships\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\Plugins\\SrMemberships\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ilSrMembershipsConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilSrMembershipsConfigGUI.php',
        'ilSrMembershipsDispatcherGUI' => __DIR__ . '/../..' . '/classes/class.ilSrMembershipsDispatcherGUI.php',
        'ilSrMembershipsHandlerGUI' => __DIR__ . '/../..' . '/classes/class.ilSrMembershipsHandlerGUI.php',
        'ilSrMembershipsPlugin' => __DIR__ . '/../..' . '/classes/class.ilSrMembershipsPlugin.php',
        'ilSrMembershipsWorkflowJob' => __DIR__ . '/../..' . '/classes/Cron/class.ilSrMembershipsWorkflowJob.php',
        'ilSrMsAbstractGUI' => __DIR__ . '/../..' . '/classes/Util/class.ilSrMsAbstractGUI.php',
        'ilSrMsAbstractWorkflowProcessorGUI' => __DIR__ . '/../..' . '/classes/Util/class.ilSrMsAbstractWorkflowProcessorGUI.php',
        'ilSrMsAccessHandler' => __DIR__ . '/../..' . '/classes/Util/class.ilSrMsAccessHandler.php',
        'ilSrMsBaseConfigurationGUI' => __DIR__ . '/../..' . '/classes/Config/class.ilSrMsBaseConfigurationGUI.php',
        'ilSrMsByLoginConfigurationGUI' => __DIR__ . '/../..' . '/classes/Config/ByLogin/class.ilSrMsByLoginConfigurationGUI.php',
        'ilSrMsByMatriculationConfigurationGUI' => __DIR__ . '/../..' . '/classes/Config/ByMatriculation/class.ilSrMsByMatriculationConfigurationGUI.php',
        'ilSrMsByRoleSyncConfigurationGUI' => __DIR__ . '/../..' . '/classes/Config/ByRoleSync/class.ilSrMsByRoleSyncConfigurationGUI.php',
        'ilSrMsGeneralConfigurationGUI' => __DIR__ . '/../..' . '/classes/Config/class.ilSrMsGeneralConfigurationGUI.php',
        'ilSrMsGeneralUploadHandlerGUI' => __DIR__ . '/../..' . '/classes/class.ilSrMsGeneralUploadHandlerGUI.php',
        'ilSrMsNullConfigurationGUI' => __DIR__ . '/../..' . '/classes/Config/class.ilSrMsNullConfigurationGUI.php',
        'ilSrMsStakeholder' => __DIR__ . '/../..' . '/classes/Util/class.ilSrMsStakeholder.php',
        'ilSrMsStoreObjectConfigGUI' => __DIR__ . '/../..' . '/classes/Handler/class.ilSrMsStoreObjectConfigGUI.php',
        'ilSrMsTabManager' => __DIR__ . '/../..' . '/classes/Util/class.ilSrMsTabManager.php',
        'ilSrMsTranslator' => __DIR__ . '/../..' . '/classes/Util/class.ilSrMsTranslator.php',
        'srag\\Plugins\\SrMemberships\\Action\\AbstractSubscribe' => __DIR__ . '/../..' . '/src/Action/AbstractSubscribe.php',
        'srag\\Plugins\\SrMemberships\\Action\\AbstractUnsubscribe' => __DIR__ . '/../..' . '/src/Action/AbstractUnsubscribe.php',
        'srag\\Plugins\\SrMemberships\\Action\\Action' => __DIR__ . '/../..' . '/src/Action/Action.php',
        'srag\\Plugins\\SrMemberships\\Action\\ActionBuilder' => __DIR__ . '/../..' . '/src/Action/ActionBuilder.php',
        'srag\\Plugins\\SrMemberships\\Action\\ActionHandler' => __DIR__ . '/../..' . '/src/Action/ActionHandler.php',
        'srag\\Plugins\\SrMemberships\\Action\\BaseActionHandler' => __DIR__ . '/../..' . '/src/Action/BaseActionHandler.php',
        'srag\\Plugins\\SrMemberships\\Action\\CourseSubscribe' => __DIR__ . '/../..' . '/src/Action/CourseSubscribe.php',
        'srag\\Plugins\\SrMemberships\\Action\\CourseUnsubscribe' => __DIR__ . '/../..' . '/src/Action/CourseUnsubscribe.php',
        'srag\\Plugins\\SrMemberships\\Action\\GroupSubscribe' => __DIR__ . '/../..' . '/src/Action/GroupSubscribe.php',
        'srag\\Plugins\\SrMemberships\\Action\\GroupUnsubscribe' => __DIR__ . '/../..' . '/src/Action/GroupUnsubscribe.php',
        'srag\\Plugins\\SrMemberships\\Action\\Helpers\\CourseMembers' => __DIR__ . '/../..' . '/src/Action/Helpers/CourseMembers.php',
        'srag\\Plugins\\SrMemberships\\Action\\Helpers\\GroupMembers' => __DIR__ . '/../..' . '/src/Action/Helpers/GroupMembers.php',
        'srag\\Plugins\\SrMemberships\\Action\\NullAction' => __DIR__ . '/../..' . '/src/Action/NullAction.php',
        'srag\\Plugins\\SrMemberships\\Action\\NullActionHandler' => __DIR__ . '/../..' . '/src/Action/NullActionHandler.php',
        'srag\\Plugins\\SrMemberships\\Action\\Summary' => __DIR__ . '/../..' . '/src/Action/Summary.php',
        'srag\\Plugins\\SrMemberships\\Config\\AbstractConfigForm' => __DIR__ . '/../..' . '/src/Config/AbstractConfigForm.php',
        'srag\\Plugins\\SrMemberships\\Config\\AbstractDBConfig' => __DIR__ . '/../..' . '/src/Config/AbstractDBConfig.php',
        'srag\\Plugins\\SrMemberships\\Config\\AbstractForm' => __DIR__ . '/../..' . '/src/Config/AbstractForm.php',
        'srag\\Plugins\\SrMemberships\\Config\\Config' => __DIR__ . '/../..' . '/src/Config/Config.php',
        'srag\\Plugins\\SrMemberships\\Config\\ConfigForm' => __DIR__ . '/../..' . '/src/Config/ConfigForm.php',
        'srag\\Plugins\\SrMemberships\\Config\\Configs' => __DIR__ . '/../..' . '/src/Config/Configs.php',
        'srag\\Plugins\\SrMemberships\\Config\\General\\GeneralConfig' => __DIR__ . '/../..' . '/src/Config/General/GeneralConfig.php',
        'srag\\Plugins\\SrMemberships\\Config\\General\\GeneralConfigForm' => __DIR__ . '/../..' . '/src/Config/General/GeneralConfigForm.php',
        'srag\\Plugins\\SrMemberships\\Config\\NullConfig' => __DIR__ . '/../..' . '/src/Config/NullConfig.php',
        'srag\\Plugins\\SrMemberships\\Config\\NullConfigForm' => __DIR__ . '/../..' . '/src/Config/NullConfigForm.php',
        'srag\\Plugins\\SrMemberships\\Config\\PackedValue' => __DIR__ . '/../..' . '/src/Config/PackedValue.php',
        'srag\\Plugins\\SrMemberships\\Config\\Packer' => __DIR__ . '/../..' . '/src/Config/Packer.php',
        'srag\\Plugins\\SrMemberships\\Container\\Container' => __DIR__ . '/../..' . '/src/Container/Container.php',
        'srag\\Plugins\\SrMemberships\\Container\\Init' => __DIR__ . '/../..' . '/src/Container/Init.php',
        'srag\\Plugins\\SrMemberships\\Person\\Account\\Account' => __DIR__ . '/../..' . '/src/Person/Account/Account.php',
        'srag\\Plugins\\SrMemberships\\Person\\Account\\AccountList' => __DIR__ . '/../..' . '/src/Person/Account/AccountList.php',
        'srag\\Plugins\\SrMemberships\\Person\\Account\\AccountListGenerators' => __DIR__ . '/../..' . '/src/Person/Account/AccountListGenerators.php',
        'srag\\Plugins\\SrMemberships\\Person\\Account\\ILIASAccount' => __DIR__ . '/../..' . '/src/Person/Account/ILIASAccount.php',
        'srag\\Plugins\\SrMemberships\\Person\\Account\\Resolver\\AccountResolver' => __DIR__ . '/../..' . '/src/Person/Account/Resolver/AccountResolver.php',
        'srag\\Plugins\\SrMemberships\\Person\\Account\\Resolver\\ContainerAccountResolver' => __DIR__ . '/../..' . '/src/Person/Account/Resolver/ContainerAccountResolver.php',
        'srag\\Plugins\\SrMemberships\\Person\\Account\\Source\\AccountSource' => __DIR__ . '/../..' . '/src/Person/Account/Source/AccountSource.php',
        'srag\\Plugins\\SrMemberships\\Person\\Account\\Source\\CourseAccountSource' => __DIR__ . '/../..' . '/src/Person/Account/Source/CourseAccountSource.php',
        'srag\\Plugins\\SrMemberships\\Person\\Account\\Source\\GroupAccountSource' => __DIR__ . '/../..' . '/src/Person/Account/Source/GroupAccountSource.php',
        'srag\\Plugins\\SrMemberships\\Person\\PersonsToAccounts' => __DIR__ . '/../..' . '/src/Person/PersonsToAccounts.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\EmailPerson' => __DIR__ . '/../..' . '/src/Person/Persons/EmailPerson.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\LoginPerson' => __DIR__ . '/../..' . '/src/Person/Persons/LoginPerson.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\MatriculationPerson' => __DIR__ . '/../..' . '/src/Person/Persons/MatriculationPerson.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\Person' => __DIR__ . '/../..' . '/src/Person/Persons/Person.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\PersonList' => __DIR__ . '/../..' . '/src/Person/Persons/PersonList.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\PersonListGenerators' => __DIR__ . '/../..' . '/src/Person/Persons/PersonListGenerators.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\Resolver\\PersonResolver' => __DIR__ . '/../..' . '/src/Person/Persons/Resolver/PersonResolver.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\Resolver\\RolesPersonResolver' => __DIR__ . '/../..' . '/src/Person/Persons/Resolver/RolesPersonResolver.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\Source\\ArrayPersonSource' => __DIR__ . '/../..' . '/src/Person/Persons/Source/ArrayPersonSource.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\Source\\PersonSource' => __DIR__ . '/../..' . '/src/Person/Persons/Source/PersonSource.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\Source\\RolesPersonSource' => __DIR__ . '/../..' . '/src/Person/Persons/Source/RolesPersonSource.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\Source\\StringPersonSource' => __DIR__ . '/../..' . '/src/Person/Persons/Source/StringPersonSource.php',
        'srag\\Plugins\\SrMemberships\\Person\\Persons\\UserIdPerson' => __DIR__ . '/../..' . '/src/Person/Persons/UserIdPerson.php',
        'srag\\Plugins\\SrMemberships\\Person\\Resolver\\LoginPersonResolver' => __DIR__ . '/../..' . '/src/Person/Resolver/LoginPersonResolver.php',
        'srag\\Plugins\\SrMemberships\\Person\\Resolver\\MatriculationPersonResolver' => __DIR__ . '/../..' . '/src/Person/Resolver/MatriculationPersonResolver.php',
        'srag\\Plugins\\SrMemberships\\Provider\\Context\\Context' => __DIR__ . '/../..' . '/src/Provider/Context/Context.php',
        'srag\\Plugins\\SrMemberships\\Provider\\Context\\ContextFactory' => __DIR__ . '/../..' . '/src/Provider/Context/ContextFactory.php',
        'srag\\Plugins\\SrMemberships\\Provider\\Context\\ObjectInfoProvider' => __DIR__ . '/../..' . '/src/Provider/Context/ObjectInfoProvider.php',
        'srag\\Plugins\\SrMemberships\\Provider\\Context\\UserAccessInfoProvider' => __DIR__ . '/../..' . '/src/Provider/Context/UserAccessInfoProvider.php',
        'srag\\Plugins\\SrMemberships\\Provider\\Tool\\CollectedMainBarProvider' => __DIR__ . '/../..' . '/src/Provider/Tool/CollectedMainBarProvider.php',
        'srag\\Plugins\\SrMemberships\\Provider\\Tool\\NullWorkflowToolProvider' => __DIR__ . '/../..' . '/src/Provider/Tool/NullWorkflowToolProvider.php',
        'srag\\Plugins\\SrMemberships\\Provider\\Tool\\StandardWorkflowToolProvider' => __DIR__ . '/../..' . '/src/Provider/Tool/StandardWorkflowToolProvider.php',
        'srag\\Plugins\\SrMemberships\\Provider\\Tool\\WorkflowToolProvider' => __DIR__ . '/../..' . '/src/Provider/Tool/WorkflowToolProvider.php',
        'srag\\Plugins\\SrMemberships\\TrafoGenerator' => __DIR__ . '/../..' . '/src/TrafoGenerator.php',
        'srag\\Plugins\\SrMemberships\\Translator' => __DIR__ . '/../..' . '/src/Translator.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\AbstractBaseWorkflowContainer' => __DIR__ . '/../..' . '/src/Workflow/AbstractBaseWorkflowContainer.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByLogin\\Action\\ByLoginActionHandler' => __DIR__ . '/../..' . '/src/Workflow/ByLogin/Action/ByLoginActionHandler.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByLogin\\ByLoginWorkflowContainer' => __DIR__ . '/../..' . '/src/Workflow/ByLogin/ByLoginWorkflowContainer.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByLogin\\ByLoginWorkflowToolConfigFormProvider' => __DIR__ . '/../..' . '/src/Workflow/ByLogin/ByLoginWorkflowToolConfigFormProvider.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByLogin\\Config\\ByLoginConfig' => __DIR__ . '/../..' . '/src/Workflow/ByLogin/Config/ByLoginConfig.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByLogin\\Config\\Form' => __DIR__ . '/../..' . '/src/Workflow/ByLogin/Config/Form.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByMatriculation\\Action\\ByMatriculationActionHandler' => __DIR__ . '/../..' . '/src/Workflow/ByMatriculation/Action/ByMatriculationActionHandler.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByMatriculation\\ByMatriculationWorkflowContainer' => __DIR__ . '/../..' . '/src/Workflow/ByMatriculation/ByMatriculationWorkflowContainer.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByMatriculation\\ByMatriculationWorkflowToolConfigFormProvider' => __DIR__ . '/../..' . '/src/Workflow/ByMatriculation/ByMatriculationWorkflowToolConfigFormProvider.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByMatriculation\\Config\\ByMatriculationConfig' => __DIR__ . '/../..' . '/src/Workflow/ByMatriculation/Config/ByMatriculationConfig.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByMatriculation\\Config\\Form' => __DIR__ . '/../..' . '/src/Workflow/ByMatriculation/Config/Form.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByRoleSync\\Action\\ByRoleSyncActionHandler' => __DIR__ . '/../..' . '/src/Workflow/ByRoleSync/Action/ByRoleSyncActionHandler.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByRoleSync\\ByRoleSyncWorkflowContainer' => __DIR__ . '/../..' . '/src/Workflow/ByRoleSync/ByRoleSyncWorkflowContainer.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByRoleSync\\ByRoleSyncWorkflowToolConfigFormProvider' => __DIR__ . '/../..' . '/src/Workflow/ByRoleSync/ByRoleSyncWorkflowToolConfigFormProvider.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByRoleSync\\Config\\ByRoleSyncConfig' => __DIR__ . '/../..' . '/src/Workflow/ByRoleSync/Config/ByRoleSyncConfig.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ByRoleSync\\Config\\Form' => __DIR__ . '/../..' . '/src/Workflow/ByRoleSync/Config/Form.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\Config\\AbstractDBWorkflowConfig' => __DIR__ . '/../..' . '/src/Workflow/Config/AbstractDBWorkflowConfig.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\Config\\WorkflowConfig' => __DIR__ . '/../..' . '/src/Workflow/Config/WorkflowConfig.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\General\\AbstractByStringActionHandler' => __DIR__ . '/../..' . '/src/Workflow/General/AbstractByStringActionHandler.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\General\\AbstractByStringListWorkflowToolConfigFormProvider' => __DIR__ . '/../..' . '/src/Workflow/General/AbstractByStringListWorkflowToolConfigFormProvider.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\Mode\\AbstractModes' => __DIR__ . '/../..' . '/src/Workflow/Mode/AbstractModes.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\Mode\\Mode' => __DIR__ . '/../..' . '/src/Workflow/Mode/Mode.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\Mode\\Modes' => __DIR__ . '/../..' . '/src/Workflow/Mode/Modes.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\Mode\\ModesFormHandler' => __DIR__ . '/../..' . '/src/Workflow/Mode/ModesFormHandler.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\Mode\\ObjectModeDBRepository' => __DIR__ . '/../..' . '/src/Workflow/Mode/ObjectModeDBRepository.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\Mode\\ObjectModeRepository' => __DIR__ . '/../..' . '/src/Workflow/Mode/ObjectModeRepository.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\Mode\\RunModes' => __DIR__ . '/../..' . '/src/Workflow/Mode/RunModes.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ToolObjectConfig\\ToolConfig' => __DIR__ . '/../..' . '/src/Workflow/ToolObjectConfig/ToolConfig.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ToolObjectConfig\\ToolConfigFormHandler' => __DIR__ . '/../..' . '/src/Workflow/ToolObjectConfig/ToolConfigFormHandler.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ToolObjectConfig\\ToolConfigFormProvider' => __DIR__ . '/../..' . '/src/Workflow/ToolObjectConfig/ToolConfigFormProvider.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ToolObjectConfig\\ToolObjectConfigDBRepository' => __DIR__ . '/../..' . '/src/Workflow/ToolObjectConfig/ToolObjectConfigDBRepository.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ToolObjectConfig\\ToolObjectConfigFormHandler' => __DIR__ . '/../..' . '/src/Workflow/ToolObjectConfig/ToolObjectConfigFormHandler.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\ToolObjectConfig\\ToolObjectConfigRepository' => __DIR__ . '/../..' . '/src/Workflow/ToolObjectConfig/ToolObjectConfigRepository.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\WorkflowContainer' => __DIR__ . '/../..' . '/src/Workflow/WorkflowContainer.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\WorkflowContainerRepository' => __DIR__ . '/../..' . '/src/Workflow/WorkflowContainerRepository.php',
        'srag\\Plugins\\SrMemberships\\Workflow\\WorkflowFormBuilder' => __DIR__ . '/../..' . '/src/Workflow/WorkflowFormBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41e6877b42375d55267017714a73708b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41e6877b42375d55267017714a73708b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41e6877b42375d55267017714a73708b::$classMap;

        }, null, ClassLoader::class);
    }
}
