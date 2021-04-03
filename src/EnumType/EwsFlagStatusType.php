<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FlagStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFlagStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotFlagged'
     * @return string 'NotFlagged'
     */
    const VALUE_NOT_FLAGGED = 'NotFlagged';
    /**
     * Constant for value 'Flagged'
     * @return string 'Flagged'
     */
    const VALUE_FLAGGED = 'Flagged';
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_FLAGGED
     * @uses self::VALUE_FLAGGED
     * @uses self::VALUE_COMPLETE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOT_FLAGGED,
            self::VALUE_FLAGGED,
            self::VALUE_COMPLETE,
        ];
    }
}
