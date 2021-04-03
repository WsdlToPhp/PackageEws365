<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for XrmGraphRelationshipType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsXrmGraphRelationshipType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PointsOfContactFor'
     * @return string 'PointsOfContactFor'
     */
    const VALUE_POINTS_OF_CONTACT_FOR = 'PointsOfContactFor';
    /**
     * Constant for value 'CustomerOf'
     * @return string 'CustomerOf'
     */
    const VALUE_CUSTOMER_OF = 'CustomerOf';
    /**
     * Constant for value 'WorksFor'
     * @return string 'WorksFor'
     */
    const VALUE_WORKS_FOR = 'WorksFor';
    /**
     * Return allowed values
     * @uses self::VALUE_POINTS_OF_CONTACT_FOR
     * @uses self::VALUE_CUSTOMER_OF
     * @uses self::VALUE_WORKS_FOR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POINTS_OF_CONTACT_FOR,
            self::VALUE_CUSTOMER_OF,
            self::VALUE_WORKS_FOR,
        ];
    }
}
