<?php

namespace Ews\EnumType;

/**
 * This class stands for AffectedTaskOccurrencesType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAffectedTaskOccurrencesType
{
    /**
     * Constant for value 'AllOccurrences'
     * @return string 'AllOccurrences'
     */
    const VALUE_ALLOCCURRENCES = 'AllOccurrences';
    /**
     * Constant for value 'SpecifiedOccurrenceOnly'
     * @return string 'SpecifiedOccurrenceOnly'
     */
    const VALUE_SPECIFIEDOCCURRENCEONLY = 'SpecifiedOccurrenceOnly';
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
     * @uses self::VALUE_ALLOCCURRENCES
     * @uses self::VALUE_SPECIFIEDOCCURRENCEONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALLOCCURRENCES,
            self::VALUE_SPECIFIEDOCCURRENCEONLY,
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
