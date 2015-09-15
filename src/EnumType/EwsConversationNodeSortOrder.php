<?php

namespace Ews\EnumType;

/**
 * This class stands for ConversationNodeSortOrder EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversationNodeSortOrder
{
    /**
     * Constant for value 'TreeOrderAscending'
     * @return string 'TreeOrderAscending'
     */
    const VALUE_TREEORDERASCENDING = 'TreeOrderAscending';
    /**
     * Constant for value 'TreeOrderDescending'
     * @return string 'TreeOrderDescending'
     */
    const VALUE_TREEORDERDESCENDING = 'TreeOrderDescending';
    /**
     * Constant for value 'DateOrderAscending'
     * @return string 'DateOrderAscending'
     */
    const VALUE_DATEORDERASCENDING = 'DateOrderAscending';
    /**
     * Constant for value 'DateOrderDescending'
     * @return string 'DateOrderDescending'
     */
    const VALUE_DATEORDERDESCENDING = 'DateOrderDescending';
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
     * @uses self::VALUE_TREEORDERASCENDING
     * @uses self::VALUE_TREEORDERDESCENDING
     * @uses self::VALUE_DATEORDERASCENDING
     * @uses self::VALUE_DATEORDERDESCENDING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TREEORDERASCENDING,
            self::VALUE_TREEORDERDESCENDING,
            self::VALUE_DATEORDERASCENDING,
            self::VALUE_DATEORDERDESCENDING,
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
