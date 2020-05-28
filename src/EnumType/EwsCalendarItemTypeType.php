<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CalendarItemTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarItemTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Single'
     * @return string 'Single'
     */
    const VALUE_SINGLE = 'Single';
    /**
     * Constant for value 'Occurrence'
     * @return string 'Occurrence'
     */
    const VALUE_OCCURRENCE = 'Occurrence';
    /**
     * Constant for value 'Exception'
     * @return string 'Exception'
     */
    const VALUE_EXCEPTION = 'Exception';
    /**
     * Constant for value 'RecurringMaster'
     * @return string 'RecurringMaster'
     */
    const VALUE_RECURRING_MASTER = 'RecurringMaster';
    /**
     * Return allowed values
     * @uses self::VALUE_SINGLE
     * @uses self::VALUE_OCCURRENCE
     * @uses self::VALUE_EXCEPTION
     * @uses self::VALUE_RECURRING_MASTER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SINGLE,
            self::VALUE_OCCURRENCE,
            self::VALUE_EXCEPTION,
            self::VALUE_RECURRING_MASTER,
        );
    }
}
