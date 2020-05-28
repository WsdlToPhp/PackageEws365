<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BodyTypeResponseType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBodyTypeResponseType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Best'
     * @return string 'Best'
     */
    const VALUE_BEST = 'Best';
    /**
     * Constant for value 'HTML'
     * @return string 'HTML'
     */
    const VALUE_HTML = 'HTML';
    /**
     * Constant for value 'Text'
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
    /**
     * Return allowed values
     * @uses self::VALUE_BEST
     * @uses self::VALUE_HTML
     * @uses self::VALUE_TEXT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BEST,
            self::VALUE_HTML,
            self::VALUE_TEXT,
        );
    }
}
