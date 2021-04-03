<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for XrmGraphRelationshipEntityType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsXrmGraphRelationshipEntityType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'XrmDeal'
     * @return string 'XrmDeal'
     */
    const VALUE_XRM_DEAL = 'XrmDeal';
    /**
     * Constant for value 'XrmContact'
     * @return string 'XrmContact'
     */
    const VALUE_XRM_CONTACT = 'XrmContact';
    /**
     * Constant for value 'XrmOrganization'
     * @return string 'XrmOrganization'
     */
    const VALUE_XRM_ORGANIZATION = 'XrmOrganization';
    /**
     * Return allowed values
     * @uses self::VALUE_XRM_DEAL
     * @uses self::VALUE_XRM_CONTACT
     * @uses self::VALUE_XRM_ORGANIZATION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_XRM_DEAL,
            self::VALUE_XRM_CONTACT,
            self::VALUE_XRM_ORGANIZATION,
        ];
    }
}
