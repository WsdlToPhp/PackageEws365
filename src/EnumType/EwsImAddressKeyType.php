<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ImAddressKeyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsImAddressKeyType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ImAddress1'
     * @return string 'ImAddress1'
     */
    const VALUE_IM_ADDRESS_1 = 'ImAddress1';
    /**
     * Constant for value 'ImAddress2'
     * @return string 'ImAddress2'
     */
    const VALUE_IM_ADDRESS_2 = 'ImAddress2';
    /**
     * Constant for value 'ImAddress3'
     * @return string 'ImAddress3'
     */
    const VALUE_IM_ADDRESS_3 = 'ImAddress3';
    /**
     * Return allowed values
     * @uses self::VALUE_IM_ADDRESS_1
     * @uses self::VALUE_IM_ADDRESS_2
     * @uses self::VALUE_IM_ADDRESS_3
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_IM_ADDRESS_1,
            self::VALUE_IM_ADDRESS_2,
            self::VALUE_IM_ADDRESS_3,
        ];
    }
}
