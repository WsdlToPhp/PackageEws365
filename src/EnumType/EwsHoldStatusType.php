<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for HoldStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsHoldStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotOnHold'
     * @return string 'NotOnHold'
     */
    const VALUE_NOT_ON_HOLD = 'NotOnHold';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'OnHold'
     * @return string 'OnHold'
     */
    const VALUE_ON_HOLD = 'OnHold';
    /**
     * Constant for value 'PartialHold'
     * @return string 'PartialHold'
     */
    const VALUE_PARTIAL_HOLD = 'PartialHold';
    /**
     * Constant for value 'Failed'
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_ON_HOLD
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_ON_HOLD
     * @uses self::VALUE_PARTIAL_HOLD
     * @uses self::VALUE_FAILED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_ON_HOLD,
            self::VALUE_PENDING,
            self::VALUE_ON_HOLD,
            self::VALUE_PARTIAL_HOLD,
            self::VALUE_FAILED,
        );
    }
}
