<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MessageDispositionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMessageDispositionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SaveOnly'
     * @return string 'SaveOnly'
     */
    const VALUE_SAVE_ONLY = 'SaveOnly';
    /**
     * Constant for value 'SendOnly'
     * @return string 'SendOnly'
     */
    const VALUE_SEND_ONLY = 'SendOnly';
    /**
     * Constant for value 'SendAndSaveCopy'
     * @return string 'SendAndSaveCopy'
     */
    const VALUE_SEND_AND_SAVE_COPY = 'SendAndSaveCopy';
    /**
     * Return allowed values
     * @uses self::VALUE_SAVE_ONLY
     * @uses self::VALUE_SEND_ONLY
     * @uses self::VALUE_SEND_AND_SAVE_COPY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SAVE_ONLY,
            self::VALUE_SEND_ONLY,
            self::VALUE_SEND_AND_SAVE_COPY,
        );
    }
}
