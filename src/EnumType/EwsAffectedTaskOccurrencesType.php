<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AffectedTaskOccurrencesType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAffectedTaskOccurrencesType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AllOccurrences'
     * @return string 'AllOccurrences'
     */
    const VALUE_ALL_OCCURRENCES = 'AllOccurrences';
    /**
     * Constant for value 'SpecifiedOccurrenceOnly'
     * @return string 'SpecifiedOccurrenceOnly'
     */
    const VALUE_SPECIFIED_OCCURRENCE_ONLY = 'SpecifiedOccurrenceOnly';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL_OCCURRENCES
     * @uses self::VALUE_SPECIFIED_OCCURRENCE_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL_OCCURRENCES,
            self::VALUE_SPECIFIED_OCCURRENCE_ONLY,
        );
    }
}
