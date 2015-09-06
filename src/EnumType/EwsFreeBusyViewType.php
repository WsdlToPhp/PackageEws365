<?php

namespace Ews\EnumType;

/**
 * This class stands for FreeBusyViewType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFreeBusyViewType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MergedOnly'
     * @return string 'MergedOnly'
     */
    const VALUE_MERGEDONLY = 'MergedOnly';
    /**
     * Constant for value 'FreeBusy'
     * @return string 'FreeBusy'
     */
    const VALUE_FREEBUSY = 'FreeBusy';
    /**
     * Constant for value 'FreeBusyMerged'
     * @return string 'FreeBusyMerged'
     */
    const VALUE_FREEBUSYMERGED = 'FreeBusyMerged';
    /**
     * Constant for value 'Detailed'
     * @return string 'Detailed'
     */
    const VALUE_DETAILED = 'Detailed';
    /**
     * Constant for value 'DetailedMerged'
     * @return string 'DetailedMerged'
     */
    const VALUE_DETAILEDMERGED = 'DetailedMerged';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_MERGEDONLY
     * @uses self::VALUE_FREEBUSY
     * @uses self::VALUE_FREEBUSYMERGED
     * @uses self::VALUE_DETAILED
     * @uses self::VALUE_DETAILEDMERGED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MERGEDONLY,
            self::VALUE_FREEBUSY,
            self::VALUE_FREEBUSYMERGED,
            self::VALUE_DETAILED,
            self::VALUE_DETAILEDMERGED,
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
