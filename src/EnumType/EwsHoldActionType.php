<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for HoldActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsHoldActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Create'
     * @return string 'Create'
     */
    const VALUE_CREATE = 'Create';
    /**
     * Constant for value 'Update'
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'Remove'
     * @return string 'Remove'
     */
    const VALUE_REMOVE = 'Remove';
    /**
     * Return allowed values
     * @uses self::VALUE_CREATE
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_REMOVE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CREATE,
            self::VALUE_UPDATE,
            self::VALUE_REMOVE,
        ];
    }
}
