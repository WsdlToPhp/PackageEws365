<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemQueryTraversalType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of sub-tree traversal for deletion and enumeration
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsItemQueryTraversalType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Shallow'
     * @return string 'Shallow'
     */
    const VALUE_SHALLOW = 'Shallow';
    /**
     * Constant for value 'SoftDeleted'
     * @return string 'SoftDeleted'
     */
    const VALUE_SOFT_DELETED = 'SoftDeleted';
    /**
     * Constant for value 'Associated'
     * @return string 'Associated'
     */
    const VALUE_ASSOCIATED = 'Associated';
    /**
     * Return allowed values
     * @uses self::VALUE_SHALLOW
     * @uses self::VALUE_SOFT_DELETED
     * @uses self::VALUE_ASSOCIATED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SHALLOW,
            self::VALUE_SOFT_DELETED,
            self::VALUE_ASSOCIATED,
        ];
    }
}
