<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LocationSourceType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsLocationSourceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'LocationServices'
     * @return string 'LocationServices'
     */
    const VALUE_LOCATION_SERVICES = 'LocationServices';
    /**
     * Constant for value 'PhonebookServices'
     * @return string 'PhonebookServices'
     */
    const VALUE_PHONEBOOK_SERVICES = 'PhonebookServices';
    /**
     * Constant for value 'Device'
     * @return string 'Device'
     */
    const VALUE_DEVICE = 'Device';
    /**
     * Constant for value 'Contact'
     * @return string 'Contact'
     */
    const VALUE_CONTACT = 'Contact';
    /**
     * Constant for value 'Resource'
     * @return string 'Resource'
     */
    const VALUE_RESOURCE = 'Resource';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_LOCATION_SERVICES
     * @uses self::VALUE_PHONEBOOK_SERVICES
     * @uses self::VALUE_DEVICE
     * @uses self::VALUE_CONTACT
     * @uses self::VALUE_RESOURCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_LOCATION_SERVICES,
            self::VALUE_PHONEBOOK_SERVICES,
            self::VALUE_DEVICE,
            self::VALUE_CONTACT,
            self::VALUE_RESOURCE,
        );
    }
}
