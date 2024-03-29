<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SearchScopeGroupsType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchScopeGroupsType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MyGroups'
     * @return string 'MyGroups'
     */
    const VALUE_MY_GROUPS = 'MyGroups';
    /**
     * Return allowed values
     * @uses self::VALUE_MY_GROUPS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MY_GROUPS,
        ];
    }
}
