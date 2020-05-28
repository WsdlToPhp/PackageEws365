<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnifiedGroupActionResultType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupActionResultType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'SuccessDelayed'
     * @return string 'SuccessDelayed'
     */
    const VALUE_SUCCESS_DELAYED = 'SuccessDelayed';
    /**
     * Constant for value 'Unauthorized'
     * @return string 'Unauthorized'
     */
    const VALUE_UNAUTHORIZED = 'Unauthorized';
    /**
     * Return allowed values
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_SUCCESS_DELAYED
     * @uses self::VALUE_UNAUTHORIZED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS,
            self::VALUE_SUCCESS_DELAYED,
            self::VALUE_UNAUTHORIZED,
        );
    }
}
