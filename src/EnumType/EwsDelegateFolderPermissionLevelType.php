<?php

namespace Ews\EnumType;

/**
 * This class stands for DelegateFolderPermissionLevelType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDelegateFolderPermissionLevelType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Editor'
     * @return string 'Editor'
     */
    const VALUE_EDITOR = 'Editor';
    /**
     * Constant for value 'Reviewer'
     * @return string 'Reviewer'
     */
    const VALUE_REVIEWER = 'Reviewer';
    /**
     * Constant for value 'Author'
     * @return string 'Author'
     */
    const VALUE_AUTHOR = 'Author';
    /**
     * Constant for value 'Custom'
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_EDITOR
     * @uses self::VALUE_REVIEWER
     * @uses self::VALUE_AUTHOR
     * @uses self::VALUE_CUSTOM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_EDITOR,
            self::VALUE_REVIEWER,
            self::VALUE_AUTHOR,
            self::VALUE_CUSTOM,
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
