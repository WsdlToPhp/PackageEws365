<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermissionType StructType
 * Meta information extracted from the WSDL
 * - documentation: A permission on a folder
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPermissionType extends EwsBasePermissionType
{
    /**
     * The PermissionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PermissionLevel;
    /**
     * The ReadItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReadItems;
    /**
     * Constructor method for PermissionType
     * @uses EwsPermissionType::setPermissionLevel()
     * @uses EwsPermissionType::setReadItems()
     * @param string $permissionLevel
     * @param string $readItems
     */
    public function __construct($permissionLevel = null, $readItems = null)
    {
        $this
            ->setPermissionLevel($permissionLevel)
            ->setReadItems($readItems);
    }
    /**
     * Get PermissionLevel value
     * @return string
     */
    public function getPermissionLevel()
    {
        return $this->PermissionLevel;
    }
    /**
     * Set PermissionLevel value
     * @uses \Ews\EnumType\EwsPermissionLevelType::valueIsValid()
     * @uses \Ews\EnumType\EwsPermissionLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $permissionLevel
     * @return \Ews\StructType\EwsPermissionType
     */
    public function setPermissionLevel($permissionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsPermissionLevelType::valueIsValid($permissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsPermissionLevelType', is_array($permissionLevel) ? implode(', ', $permissionLevel) : var_export($permissionLevel, true), implode(', ', \Ews\EnumType\EwsPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->PermissionLevel = $permissionLevel;
        return $this;
    }
    /**
     * Get ReadItems value
     * @return string|null
     */
    public function getReadItems()
    {
        return $this->ReadItems;
    }
    /**
     * Set ReadItems value
     * @uses \Ews\EnumType\EwsPermissionReadAccessType::valueIsValid()
     * @uses \Ews\EnumType\EwsPermissionReadAccessType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $readItems
     * @return \Ews\StructType\EwsPermissionType
     */
    public function setReadItems($readItems = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsPermissionReadAccessType::valueIsValid($readItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsPermissionReadAccessType', is_array($readItems) ? implode(', ', $readItems) : var_export($readItems, true), implode(', ', \Ews\EnumType\EwsPermissionReadAccessType::getValidValues())), __LINE__);
        }
        $this->ReadItems = $readItems;
        return $this;
    }
}
