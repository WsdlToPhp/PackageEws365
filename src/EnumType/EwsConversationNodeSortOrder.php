<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ConversationNodeSortOrder EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversationNodeSortOrder extends AbstractStructEnumBase
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
     * Return allowed values
     * @uses self::VALUE_TREE_ORDER_ASCENDING
     * @uses self::VALUE_TREE_ORDER_DESCENDING
     * @uses self::VALUE_DATE_ORDER_ASCENDING
     * @uses self::VALUE_DATE_ORDER_DESCENDING
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TREE_ORDER_ASCENDING,
            self::VALUE_TREE_ORDER_DESCENDING,
            self::VALUE_DATE_ORDER_ASCENDING,
            self::VALUE_DATE_ORDER_DESCENDING,
        ];
    }
}
