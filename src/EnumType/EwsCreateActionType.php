<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CreateActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CreateNew'
     * @return string 'CreateNew'
     */
    const VALUE_CREATE_NEW = 'CreateNew';
    /**
     * Constant for value 'Update'
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'UpdateOrCreate'
     * @return string 'UpdateOrCreate'
     */
    const VALUE_UPDATE_OR_CREATE = 'UpdateOrCreate';
    /**
     * Return allowed values
     * @uses self::VALUE_CREATE_NEW
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_UPDATE_OR_CREATE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CREATE_NEW,
            self::VALUE_UPDATE,
            self::VALUE_UPDATE_OR_CREATE,
        ];
    }
}
