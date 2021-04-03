<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmailReminderSendOption EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailReminderSendOption extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotSet'
     * @return string 'NotSet'
     */
    const VALUE_NOT_SET = 'NotSet';
    /**
     * Constant for value 'User'
     * @return string 'User'
     */
    const VALUE_USER = 'User';
    /**
     * Constant for value 'AllAttendees'
     * @return string 'AllAttendees'
     */
    const VALUE_ALL_ATTENDEES = 'AllAttendees';
    /**
     * Constant for value 'Staff'
     * @return string 'Staff'
     */
    const VALUE_STAFF = 'Staff';
    /**
     * Constant for value 'Customer'
     * @return string 'Customer'
     */
    const VALUE_CUSTOMER = 'Customer';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_SET
     * @uses self::VALUE_USER
     * @uses self::VALUE_ALL_ATTENDEES
     * @uses self::VALUE_STAFF
     * @uses self::VALUE_CUSTOMER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOT_SET,
            self::VALUE_USER,
            self::VALUE_ALL_ATTENDEES,
            self::VALUE_STAFF,
            self::VALUE_CUSTOMER,
        ];
    }
}
