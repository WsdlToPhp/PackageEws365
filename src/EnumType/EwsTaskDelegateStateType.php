<?php

namespace Ews\EnumType;

/**
 * This class stands for TaskDelegateStateType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTaskDelegateStateType
{
    /**
     * Constant for value 'NoMatch'
     * @return string 'NoMatch'
     */
    const VALUE_NOMATCH = 'NoMatch';
    /**
     * Constant for value 'OwnNew'
     * @return string 'OwnNew'
     */
    const VALUE_OWNNEW = 'OwnNew';
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
     * @uses self::VALUE_NOMATCH
     * @uses self::VALUE_OWNNEW
     * @uses self::VALUE_OWNED
     * @uses self::VALUE_ACCEPTED
     * @uses self::VALUE_DECLINED
     * @uses self::VALUE_MAX
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOMATCH,
            self::VALUE_OWNNEW,
            self::VALUE_OWNED,
            self::VALUE_ACCEPTED,
            self::VALUE_DECLINED,
            self::VALUE_MAX,
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
