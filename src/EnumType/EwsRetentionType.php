<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RetentionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRetentionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Delete'
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'Archive'
     * @return string 'Archive'
     */
    const VALUE_ARCHIVE = 'Archive';
    /**
     * Return allowed values
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_ARCHIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELETE,
            self::VALUE_ARCHIVE,
        );
    }
}
