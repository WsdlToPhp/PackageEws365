<?php

namespace Ews\EnumType;

/**
 * This class stands for SearchApplicationIdType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchApplicationIdType
{
    /**
     * Constant for value 'Outlook'
     * @return string 'Outlook'
     */
    const VALUE_OUTLOOK = 'Outlook';
    /**
     * Constant for value 'Owa'
     * @return string 'Owa'
     */
    const VALUE_OWA = 'Owa';
    /**
     * Constant for value 'Paw'
     * @return string 'Paw'
     */
    const VALUE_PAW = 'Paw';
    /**
     * Constant for value 'Teamspace'
     * @return string 'Teamspace'
     */
    const VALUE_TEAMSPACE = 'Teamspace';
    /**
     * Constant for value 'OneDrive'
     * @return string 'OneDrive'
     */
    const VALUE_ONEDRIVE = 'OneDrive';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
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
     * @uses self::VALUE_OUTLOOK
     * @uses self::VALUE_OWA
     * @uses self::VALUE_PAW
     * @uses self::VALUE_TEAMSPACE
     * @uses self::VALUE_ONEDRIVE
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OUTLOOK,
            self::VALUE_OWA,
            self::VALUE_PAW,
            self::VALUE_TEAMSPACE,
            self::VALUE_ONEDRIVE,
            self::VALUE_OTHER,
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
