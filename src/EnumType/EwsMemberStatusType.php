<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MemberStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMemberStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unrecognized'
     * @return string 'Unrecognized'
     */
    const VALUE_UNRECOGNIZED = 'Unrecognized';
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Demoted'
     * @return string 'Demoted'
     */
    const VALUE_DEMOTED = 'Demoted';
    /**
     * Return allowed values
     * @uses self::VALUE_UNRECOGNIZED
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_DEMOTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNRECOGNIZED,
            self::VALUE_NORMAL,
            self::VALUE_DEMOTED,
        );
    }
}
