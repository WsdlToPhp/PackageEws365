<?php

namespace Ews\EnumType;

/**
 * This class stands for SuggestionKindType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSuggestionKindType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Keywords'
     * @return string 'Keywords'
     */
    const VALUE_KEYWORDS = 'Keywords';
    /**
     * Constant for value 'People'
     * @return string 'People'
     */
    const VALUE_PEOPLE = 'People';
    /**
     * Constant for value 'Hashtags'
     * @return string 'Hashtags'
     */
    const VALUE_HASHTAGS = 'Hashtags';
    /**
     * Constant for value 'QueryHistory'
     * @return string 'QueryHistory'
     */
    const VALUE_QUERY_HISTORY = 'QueryHistory';
    /**
     * Constant for value 'OneDriveQueryHistory'
     * @return string 'OneDriveQueryHistory'
     */
    const VALUE_ONE_DRIVE_QUERY_HISTORY = 'OneDriveQueryHistory';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_KEYWORDS
     * @uses self::VALUE_PEOPLE
     * @uses self::VALUE_HASHTAGS
     * @uses self::VALUE_QUERY_HISTORY
     * @uses self::VALUE_ONE_DRIVE_QUERY_HISTORY
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_KEYWORDS,
            self::VALUE_PEOPLE,
            self::VALUE_HASHTAGS,
            self::VALUE_QUERY_HISTORY,
            self::VALUE_ONE_DRIVE_QUERY_HISTORY,
            self::VALUE_ALL,
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
