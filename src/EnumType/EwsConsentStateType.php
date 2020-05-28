<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ConsentStateType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConsentStateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotResponded'
     * @return string 'NotResponded'
     */
    const VALUE_NOT_RESPONDED = 'NotResponded';
    /**
     * Constant for value 'NotConsented'
     * @return string 'NotConsented'
     */
    const VALUE_NOT_CONSENTED = 'NotConsented';
    /**
     * Constant for value 'Consented'
     * @return string 'Consented'
     */
    const VALUE_CONSENTED = 'Consented';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_RESPONDED
     * @uses self::VALUE_NOT_CONSENTED
     * @uses self::VALUE_CONSENTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_RESPONDED,
            self::VALUE_NOT_CONSENTED,
            self::VALUE_CONSENTED,
        );
    }
}
