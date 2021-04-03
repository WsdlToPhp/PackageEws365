<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SenderRestrictionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSenderRestrictionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Allow'
     * @return string 'Allow'
     */
    const VALUE_ALLOW = 'Allow';
    /**
     * Constant for value 'Reject'
     * @return string 'Reject'
     */
    const VALUE_REJECT = 'Reject';
    /**
     * Return allowed values
     * @uses self::VALUE_ALLOW
     * @uses self::VALUE_REJECT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALLOW,
            self::VALUE_REJECT,
        ];
    }
}
