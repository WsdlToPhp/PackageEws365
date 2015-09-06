<?php

namespace Ews\EnumType;

/**
 * This class stands for SetClientExtensionActionIdType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetClientExtensionActionIdType
{
    /**
     * Constant for value 'Install'
     * @return string 'Install'
     */
    const VALUE_INSTALL = 'Install';
    /**
     * Constant for value 'Uninstall'
     * @return string 'Uninstall'
     */
    const VALUE_UNINSTALL = 'Uninstall';
    /**
     * Constant for value 'Configure'
     * @return string 'Configure'
     */
    const VALUE_CONFIGURE = 'Configure';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_INSTALL
     * @uses self::VALUE_UNINSTALL
     * @uses self::VALUE_CONFIGURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INSTALL,
            self::VALUE_UNINSTALL,
            self::VALUE_CONFIGURE,
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
