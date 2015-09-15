<?php

namespace Ews\EnumType;

/**
 * This class stands for GroupMailboxConfigurationActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupMailboxConfigurationActionType
{
    /**
     * Constant for value 'SetRegionalSettings'
     * @return string 'SetRegionalSettings'
     */
    const VALUE_SETREGIONALSETTINGS = 'SetRegionalSettings';
    /**
     * Constant for value 'CreateDefaultFolders'
     * @return string 'CreateDefaultFolders'
     */
    const VALUE_CREATEDEFAULTFOLDERS = 'CreateDefaultFolders';
    /**
     * Constant for value 'SetInitialFolderPermissions'
     * @return string 'SetInitialFolderPermissions'
     */
    const VALUE_SETINITIALFOLDERPERMISSIONS = 'SetInitialFolderPermissions';
    /**
     * Constant for value 'SetAllFolderPermissions'
     * @return string 'SetAllFolderPermissions'
     */
    const VALUE_SETALLFOLDERPERMISSIONS = 'SetAllFolderPermissions';
    /**
     * Constant for value 'ConfigureCalendar'
     * @return string 'ConfigureCalendar'
     */
    const VALUE_CONFIGURECALENDAR = 'ConfigureCalendar';
    /**
     * Constant for value 'SendWelcomeMessage'
     * @return string 'SendWelcomeMessage'
     */
    const VALUE_SENDWELCOMEMESSAGE = 'SendWelcomeMessage';
    /**
     * Constant for value 'GenerateGroupPhoto'
     * @return string 'GenerateGroupPhoto'
     */
    const VALUE_GENERATEGROUPPHOTO = 'GenerateGroupPhoto';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_SETREGIONALSETTINGS
     * @uses self::VALUE_CREATEDEFAULTFOLDERS
     * @uses self::VALUE_SETINITIALFOLDERPERMISSIONS
     * @uses self::VALUE_SETALLFOLDERPERMISSIONS
     * @uses self::VALUE_CONFIGURECALENDAR
     * @uses self::VALUE_SENDWELCOMEMESSAGE
     * @uses self::VALUE_GENERATEGROUPPHOTO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SETREGIONALSETTINGS,
            self::VALUE_CREATEDEFAULTFOLDERS,
            self::VALUE_SETINITIALFOLDERPERMISSIONS,
            self::VALUE_SETALLFOLDERPERMISSIONS,
            self::VALUE_CONFIGURECALENDAR,
            self::VALUE_SENDWELCOMEMESSAGE,
            self::VALUE_GENERATEGROUPPHOTO,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
