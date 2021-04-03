<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TeamMailboxLifecycleStateType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTeamMailboxLifecycleStateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'Unlinked'
     * @return string 'Unlinked'
     */
    const VALUE_UNLINKED = 'Unlinked';
    /**
     * Constant for value 'PendingDelete'
     * @return string 'PendingDelete'
     */
    const VALUE_PENDING_DELETE = 'PendingDelete';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_UNLINKED
     * @uses self::VALUE_PENDING_DELETE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACTIVE,
            self::VALUE_CLOSED,
            self::VALUE_UNLINKED,
            self::VALUE_PENDING_DELETE,
        ];
    }
}
