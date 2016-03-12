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
    const VALUE_TREE_ORDER_ASCENDING = 'TreeOrderAscending';
    /**
     * Constant for value 'TreeOrderDescending'
     * @return string 'TreeOrderDescending'
     */
    const VALUE_TREE_ORDER_DESCENDING = 'TreeOrderDescending';
    /**
     * Constant for value 'DateOrderAscending'
     * @return string 'DateOrderAscending'
     */
    const VALUE_DATE_ORDER_ASCENDING = 'DateOrderAscending';
    /**
     * Constant for value 'DateOrderDescending'
     * @return string 'DateOrderDescending'
     */
    const VALUE_DATE_ORDER_DESCENDING = 'DateOrderDescending';
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
     * @uses self::VALUE_TREE_ORDER_ASCENDING
     * @uses self::VALUE_TREE_ORDER_DESCENDING
     * @uses self::VALUE_DATE_ORDER_ASCENDING
     * @uses self::VALUE_DATE_ORDER_DESCENDING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TREE_ORDER_ASCENDING,
            self::VALUE_TREE_ORDER_DESCENDING,
            self::VALUE_DATE_ORDER_ASCENDING,
            self::VALUE_DATE_ORDER_DESCENDING,
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
