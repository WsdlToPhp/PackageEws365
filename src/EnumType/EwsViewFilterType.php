<?php

namespace Ews\EnumType;

/**
 * This class stands for ViewFilterType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Types of view filters for finding items/conversations
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsViewFilterType
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Flagged'
     * @return string 'Flagged'
     */
    const VALUE_FLAGGED = 'Flagged';
    /**
     * Constant for value 'HasAttachment'
     * @return string 'HasAttachment'
     */
    const VALUE_HASATTACHMENT = 'HasAttachment';
    /**
     * Constant for value 'ToOrCcMe'
     * @return string 'ToOrCcMe'
     */
    const VALUE_TOORCCME = 'ToOrCcMe';
    /**
     * Constant for value 'Unread'
     * @return string 'Unread'
     */
    const VALUE_UNREAD = 'Unread';
    /**
     * Constant for value 'TaskActive'
     * @return string 'TaskActive'
     */
    const VALUE_TASKACTIVE = 'TaskActive';
    /**
     * Constant for value 'TaskOverdue'
     * @return string 'TaskOverdue'
     */
    const VALUE_TASKOVERDUE = 'TaskOverdue';
    /**
     * Constant for value 'TaskCompleted'
     * @return string 'TaskCompleted'
     */
    const VALUE_TASKCOMPLETED = 'TaskCompleted';
    /**
     * Constant for value 'NoClutter'
     * @return string 'NoClutter'
     */
    const VALUE_NOCLUTTER = 'NoClutter';
    /**
     * Constant for value 'Clutter'
     * @return string 'Clutter'
     */
    const VALUE_CLUTTER = 'Clutter';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_FLAGGED
     * @uses self::VALUE_HASATTACHMENT
     * @uses self::VALUE_TOORCCME
     * @uses self::VALUE_UNREAD
     * @uses self::VALUE_TASKACTIVE
     * @uses self::VALUE_TASKOVERDUE
     * @uses self::VALUE_TASKCOMPLETED
     * @uses self::VALUE_NOCLUTTER
     * @uses self::VALUE_CLUTTER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_FLAGGED,
            self::VALUE_HASATTACHMENT,
            self::VALUE_TOORCCME,
            self::VALUE_UNREAD,
            self::VALUE_TASKACTIVE,
            self::VALUE_TASKOVERDUE,
            self::VALUE_TASKCOMPLETED,
            self::VALUE_NOCLUTTER,
            self::VALUE_CLUTTER,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
