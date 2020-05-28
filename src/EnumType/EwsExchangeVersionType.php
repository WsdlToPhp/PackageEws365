<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ExchangeVersionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExchangeVersionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Exchange2007'
     * @return string 'Exchange2007'
     */
    const VALUE_EXCHANGE_2007 = 'Exchange2007';
    /**
     * Constant for value 'Exchange2007_SP1'
     * @return string 'Exchange2007_SP1'
     */
    const VALUE_EXCHANGE_2007_SP_1 = 'Exchange2007_SP1';
    /**
     * Constant for value 'Exchange2010'
     * @return string 'Exchange2010'
     */
    const VALUE_EXCHANGE_2010 = 'Exchange2010';
    /**
     * Constant for value 'Exchange2010_SP1'
     * @return string 'Exchange2010_SP1'
     */
    const VALUE_EXCHANGE_2010_SP_1 = 'Exchange2010_SP1';
    /**
     * Constant for value 'Exchange2010_SP2'
     * @return string 'Exchange2010_SP2'
     */
    const VALUE_EXCHANGE_2010_SP_2 = 'Exchange2010_SP2';
    /**
     * Constant for value 'Exchange2013'
     * @return string 'Exchange2013'
     */
    const VALUE_EXCHANGE_2013 = 'Exchange2013';
    /**
     * Constant for value 'Exchange2013_SP1'
     * @return string 'Exchange2013_SP1'
     */
    const VALUE_EXCHANGE_2013_SP_1 = 'Exchange2013_SP1';
    /**
     * Constant for value 'Exchange2015'
     * @return string 'Exchange2015'
     */
    const VALUE_EXCHANGE_2015 = 'Exchange2015';
    /**
     * Constant for value 'V2_47'
     * @return string 'V2_47'
     */
    const VALUE_V_2_47 = 'V2_47';
    /**
     * Return allowed values
     * @uses self::VALUE_EXCHANGE_2007
     * @uses self::VALUE_EXCHANGE_2007_SP_1
     * @uses self::VALUE_EXCHANGE_2010
     * @uses self::VALUE_EXCHANGE_2010_SP_1
     * @uses self::VALUE_EXCHANGE_2010_SP_2
     * @uses self::VALUE_EXCHANGE_2013
     * @uses self::VALUE_EXCHANGE_2013_SP_1
     * @uses self::VALUE_EXCHANGE_2015
     * @uses self::VALUE_V_2_47
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXCHANGE_2007,
            self::VALUE_EXCHANGE_2007_SP_1,
            self::VALUE_EXCHANGE_2010,
            self::VALUE_EXCHANGE_2010_SP_1,
            self::VALUE_EXCHANGE_2010_SP_2,
            self::VALUE_EXCHANGE_2013,
            self::VALUE_EXCHANGE_2013_SP_1,
            self::VALUE_EXCHANGE_2015,
            self::VALUE_V_2_47,
        );
    }
}
