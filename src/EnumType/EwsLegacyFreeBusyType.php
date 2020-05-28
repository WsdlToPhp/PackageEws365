<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LegacyFreeBusyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsLegacyFreeBusyType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Free'
     * @return string 'Free'
     */
    const VALUE_FREE = 'Free';
    /**
     * Constant for value 'Tentative'
     * @return string 'Tentative'
     */
    const VALUE_TENTATIVE = 'Tentative';
    /**
     * Constant for value 'Busy'
     * @return string 'Busy'
     */
    const VALUE_BUSY = 'Busy';
    /**
     * Constant for value 'OOF'
     * @return string 'OOF'
     */
    const VALUE_OOF = 'OOF';
    /**
     * Constant for value 'WorkingElsewhere'
     * @return string 'WorkingElsewhere'
     */
    const VALUE_WORKING_ELSEWHERE = 'WorkingElsewhere';
    /**
     * Constant for value 'NoData'
     * @return string 'NoData'
     */
    const VALUE_NO_DATA = 'NoData';
    /**
     * Return allowed values
     * @uses self::VALUE_FREE
     * @uses self::VALUE_TENTATIVE
     * @uses self::VALUE_BUSY
     * @uses self::VALUE_OOF
     * @uses self::VALUE_WORKING_ELSEWHERE
     * @uses self::VALUE_NO_DATA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FREE,
            self::VALUE_TENTATIVE,
            self::VALUE_BUSY,
            self::VALUE_OOF,
            self::VALUE_WORKING_ELSEWHERE,
            self::VALUE_NO_DATA,
        );
    }
}
