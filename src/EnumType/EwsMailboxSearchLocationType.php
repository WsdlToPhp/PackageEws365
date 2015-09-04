<?php

namespace Ews\EnumType;

/**
 * This class stands for MailboxSearchLocationType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMailboxSearchLocationType
{
    /**
     * Constant for value 'PrimaryOnly'
     * @return string 'PrimaryOnly'
     */
    const VALUE_PRIMARYONLY = 'PrimaryOnly';
    /**
     * Constant for value 'ArchiveOnly'
     * @return string 'ArchiveOnly'
     */
    const VALUE_ARCHIVEONLY = 'ArchiveOnly';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_PRIMARYONLY
     * @uses self::VALUE_ARCHIVEONLY
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRIMARYONLY,
            self::VALUE_ARCHIVEONLY,
            self::VALUE_ALL,
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
