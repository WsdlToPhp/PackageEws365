<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SearchApplicationIdType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchApplicationIdType extends AbstractStructEnumBase
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
    const VALUE_ONE_DRIVE = 'OneDrive';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_OUTLOOK
     * @uses self::VALUE_OWA
     * @uses self::VALUE_PAW
     * @uses self::VALUE_TEAMSPACE
     * @uses self::VALUE_ONE_DRIVE
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
            self::VALUE_ONE_DRIVE,
            self::VALUE_OTHER,
        );
    }
}
