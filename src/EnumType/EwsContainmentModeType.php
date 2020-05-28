<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ContainmentModeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContainmentModeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FullString'
     * @return string 'FullString'
     */
    const VALUE_FULL_STRING = 'FullString';
    /**
     * Constant for value 'Prefixed'
     * @return string 'Prefixed'
     */
    const VALUE_PREFIXED = 'Prefixed';
    /**
     * Constant for value 'Substring'
     * @return string 'Substring'
     */
    const VALUE_SUBSTRING = 'Substring';
    /**
     * Constant for value 'PrefixOnWords'
     * @return string 'PrefixOnWords'
     */
    const VALUE_PREFIX_ON_WORDS = 'PrefixOnWords';
    /**
     * Constant for value 'ExactPhrase'
     * @return string 'ExactPhrase'
     */
    const VALUE_EXACT_PHRASE = 'ExactPhrase';
    /**
     * Return allowed values
     * @uses self::VALUE_FULL_STRING
     * @uses self::VALUE_PREFIXED
     * @uses self::VALUE_SUBSTRING
     * @uses self::VALUE_PREFIX_ON_WORDS
     * @uses self::VALUE_EXACT_PHRASE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FULL_STRING,
            self::VALUE_PREFIXED,
            self::VALUE_SUBSTRING,
            self::VALUE_PREFIX_ON_WORDS,
            self::VALUE_EXACT_PHRASE,
        );
    }
}
