<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GroupMailboxConfigurationActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupMailboxConfigurationActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SetRegionalSettings'
     * @return string 'SetRegionalSettings'
     */
    const VALUE_SET_REGIONAL_SETTINGS = 'SetRegionalSettings';
    /**
     * Constant for value 'CreateDefaultFolders'
     * @return string 'CreateDefaultFolders'
     */
    const VALUE_CREATE_DEFAULT_FOLDERS = 'CreateDefaultFolders';
    /**
     * Constant for value 'SetInitialFolderPermissions'
     * @return string 'SetInitialFolderPermissions'
     */
    const VALUE_SET_INITIAL_FOLDER_PERMISSIONS = 'SetInitialFolderPermissions';
    /**
     * Constant for value 'SetAllFolderPermissions'
     * @return string 'SetAllFolderPermissions'
     */
    const VALUE_SET_ALL_FOLDER_PERMISSIONS = 'SetAllFolderPermissions';
    /**
     * Constant for value 'ConfigureCalendar'
     * @return string 'ConfigureCalendar'
     */
    const VALUE_CONFIGURE_CALENDAR = 'ConfigureCalendar';
    /**
     * Constant for value 'SendWelcomeMessage'
     * @return string 'SendWelcomeMessage'
     */
    const VALUE_SEND_WELCOME_MESSAGE = 'SendWelcomeMessage';
    /**
     * Constant for value 'GenerateGroupPhoto'
     * @return string 'GenerateGroupPhoto'
     */
    const VALUE_GENERATE_GROUP_PHOTO = 'GenerateGroupPhoto';
    /**
     * Return allowed values
     * @uses self::VALUE_SET_REGIONAL_SETTINGS
     * @uses self::VALUE_CREATE_DEFAULT_FOLDERS
     * @uses self::VALUE_SET_INITIAL_FOLDER_PERMISSIONS
     * @uses self::VALUE_SET_ALL_FOLDER_PERMISSIONS
     * @uses self::VALUE_CONFIGURE_CALENDAR
     * @uses self::VALUE_SEND_WELCOME_MESSAGE
     * @uses self::VALUE_GENERATE_GROUP_PHOTO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SET_REGIONAL_SETTINGS,
            self::VALUE_CREATE_DEFAULT_FOLDERS,
            self::VALUE_SET_INITIAL_FOLDER_PERMISSIONS,
            self::VALUE_SET_ALL_FOLDER_PERMISSIONS,
            self::VALUE_CONFIGURE_CALENDAR,
            self::VALUE_SEND_WELCOME_MESSAGE,
            self::VALUE_GENERATE_GROUP_PHOTO,
        );
    }
}
