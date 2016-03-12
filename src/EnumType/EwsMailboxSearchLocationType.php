<?php

namespace Ews\EnumType;

/**
 * This class stands for MailboxSearchLocationType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxSearchLocationType
{
    /**
     * Constant for value 'PrimaryOnly'
     * @return string 'PrimaryOnly'
     */
    const VALUE_PRIMARY_ONLY = 'PrimaryOnly';
    /**
     * Constant for value 'ArchiveOnly'
     * @return string 'ArchiveOnly'
     */
    const VALUE_ARCHIVE_ONLY = 'ArchiveOnly';
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
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_PRIMARY_ONLY
     * @uses self::VALUE_ARCHIVE_ONLY
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRIMARY_ONLY,
            self::VALUE_ARCHIVE_ONLY,
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
