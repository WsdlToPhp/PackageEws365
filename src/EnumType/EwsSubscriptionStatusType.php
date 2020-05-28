<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SubscriptionStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSubscriptionStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'Unsubscribe'
     * @return string 'Unsubscribe'
     */
    const VALUE_UNSUBSCRIBE = 'Unsubscribe';
    /**
     * Return allowed values
     * @uses self::VALUE_OK
     * @uses self::VALUE_UNSUBSCRIBE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OK,
            self::VALUE_UNSUBSCRIBE,
        );
    }
}
