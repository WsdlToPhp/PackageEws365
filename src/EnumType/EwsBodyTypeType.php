<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BodyTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBodyTypeType extends AbstractStructEnumBase
{
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
     * @uses self::VALUE_HTML
     * @uses self::VALUE_TEXT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_HTML,
            self::VALUE_TEXT,
        ];
    }
}
