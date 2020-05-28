<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SyncFolderItemsScopeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderItemsScopeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NormalItems'
     * @return string 'NormalItems'
     */
    const VALUE_NORMAL_ITEMS = 'NormalItems';
    /**
     * Constant for value 'NormalAndAssociatedItems'
     * @return string 'NormalAndAssociatedItems'
     */
    const VALUE_NORMAL_AND_ASSOCIATED_ITEMS = 'NormalAndAssociatedItems';
    /**
     * Return allowed values
     * @uses self::VALUE_NORMAL_ITEMS
     * @uses self::VALUE_NORMAL_AND_ASSOCIATED_ITEMS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NORMAL_ITEMS,
            self::VALUE_NORMAL_AND_ASSOCIATED_ITEMS,
        );
    }
}
