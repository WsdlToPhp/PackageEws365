<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ConnectionStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConnectionStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Return allowed values
     * @uses self::VALUE_OK
     * @uses self::VALUE_CLOSED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OK,
            self::VALUE_CLOSED,
        ];
    }
}
