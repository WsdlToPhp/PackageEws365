<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $PermissionLevel;
    /**
     * The ReadItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReadItems = null;
    /**
     * Constructor method for PermissionType
     * @uses EwsPermissionType::setPermissionLevel()
     * @uses EwsPermissionType::setReadItems()
     * @param string $permissionLevel
     * @param string $readItems
     */
    public function __construct(string $permissionLevel, ?string $readItems = null)
    {
        $this
            ->setPermissionLevel($permissionLevel)
            ->setReadItems($readItems);
    }
    /**
     * Get PermissionLevel value
     * @return string
     */
    public function getPermissionLevel(): string
    {
        return $this->PermissionLevel;
    }
    /**
     * Set PermissionLevel value
     * @uses \EnumType\EwsPermissionLevelType::valueIsValid()
     * @uses \EnumType\EwsPermissionLevelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $permissionLevel
     * @return \StructType\EwsPermissionType
     */
    public function setPermissionLevel(string $permissionLevel): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsPermissionLevelType::valueIsValid($permissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsPermissionLevelType', is_array($permissionLevel) ? implode(', ', $permissionLevel) : var_export($permissionLevel, true), implode(', ', \EnumType\EwsPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->PermissionLevel = $permissionLevel;
        
        return $this;
    }
    /**
     * Get ReadItems value
     * @return string|null
     */
    public function getReadItems(): ?string
    {
        return $this->ReadItems;
    }
    /**
     * Set ReadItems value
     * @uses \EnumType\EwsPermissionReadAccessType::valueIsValid()
     * @uses \EnumType\EwsPermissionReadAccessType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $readItems
     * @return \StructType\EwsPermissionType
     */
    public function setReadItems(?string $readItems = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsPermissionReadAccessType::valueIsValid($readItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsPermissionReadAccessType', is_array($readItems) ? implode(', ', $readItems) : var_export($readItems, true), implode(', ', \EnumType\EwsPermissionReadAccessType::getValidValues())), __LINE__);
        }
        $this->ReadItems = $readItems;
        
        return $this;
    }
}
