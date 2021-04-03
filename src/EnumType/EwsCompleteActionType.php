<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CompleteActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCompleteActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Commit'
     * @return string 'Commit'
     */
    const VALUE_COMMIT = 'Commit';
    /**
     * Constant for value 'Abandon'
     * @return string 'Abandon'
     */
    const VALUE_ABANDON = 'Abandon';
    /**
     * Return allowed values
     * @uses self::VALUE_COMMIT
     * @uses self::VALUE_ABANDON
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COMMIT,
            self::VALUE_ABANDON,
        ];
    }
}
