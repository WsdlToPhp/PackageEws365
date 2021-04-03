<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TaskDelegateStateType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTaskDelegateStateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoMatch'
     * @return string 'NoMatch'
     */
    const VALUE_NO_MATCH = 'NoMatch';
    /**
     * Constant for value 'OwnNew'
     * @return string 'OwnNew'
     */
    const VALUE_OWN_NEW = 'OwnNew';
    /**
     * Constant for value 'Owned'
     * @return string 'Owned'
     */
    const VALUE_OWNED = 'Owned';
    /**
     * Constant for value 'Accepted'
     * @return string 'Accepted'
     */
    const VALUE_ACCEPTED = 'Accepted';
    /**
     * Constant for value 'Declined'
     * @return string 'Declined'
     */
    const VALUE_DECLINED = 'Declined';
    /**
     * Constant for value 'Max'
     * @return string 'Max'
     */
    const VALUE_MAX = 'Max';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_MATCH
     * @uses self::VALUE_OWN_NEW
     * @uses self::VALUE_OWNED
     * @uses self::VALUE_ACCEPTED
     * @uses self::VALUE_DECLINED
     * @uses self::VALUE_MAX
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_MATCH,
            self::VALUE_OWN_NEW,
            self::VALUE_OWNED,
            self::VALUE_ACCEPTED,
            self::VALUE_DECLINED,
            self::VALUE_MAX,
        ];
    }
}
