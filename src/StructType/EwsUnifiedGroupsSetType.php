<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupsSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents a set of unified groups in a GetUserUnifiedGroup response
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupsSetType extends AbstractStructBase
{
    /**
     * The FilterType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FilterType = null;
    /**
     * The TotalGroups
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalGroups = null;
    /**
     * The Groups
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnifiedGroupsType|null
     */
    protected ?\ArrayType\EwsArrayOfUnifiedGroupsType $Groups = null;
    /**
     * Constructor method for UnifiedGroupsSetType
     * @uses EwsUnifiedGroupsSetType::setFilterType()
     * @uses EwsUnifiedGroupsSetType::setTotalGroups()
     * @uses EwsUnifiedGroupsSetType::setGroups()
     * @param string $filterType
     * @param int $totalGroups
     * @param \ArrayType\EwsArrayOfUnifiedGroupsType $groups
     */
    public function __construct(?string $filterType = null, ?int $totalGroups = null, ?\ArrayType\EwsArrayOfUnifiedGroupsType $groups = null)
    {
        $this
            ->setFilterType($filterType)
            ->setTotalGroups($totalGroups)
            ->setGroups($groups);
    }
    /**
     * Get FilterType value
     * @return string|null
     */
    public function getFilterType(): ?string
    {
        return $this->FilterType;
    }
    /**
     * Set FilterType value
     * @uses \EnumType\EwsUnifiedGroupsFilterType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupsFilterType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $filterType
     * @return \StructType\EwsUnifiedGroupsSetType
     */
    public function setFilterType(?string $filterType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupsFilterType::valueIsValid($filterType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupsFilterType', is_array($filterType) ? implode(', ', $filterType) : var_export($filterType, true), implode(', ', \EnumType\EwsUnifiedGroupsFilterType::getValidValues())), __LINE__);
        }
        $this->FilterType = $filterType;
        
        return $this;
    }
    /**
     * Get TotalGroups value
     * @return int|null
     */
    public function getTotalGroups(): ?int
    {
        return $this->TotalGroups;
    }
    /**
     * Set TotalGroups value
     * @param int $totalGroups
     * @return \StructType\EwsUnifiedGroupsSetType
     */
    public function setTotalGroups(?int $totalGroups = null): self
    {
        // validation for constraint: int
        if (!is_null($totalGroups) && !(is_int($totalGroups) || ctype_digit($totalGroups))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalGroups, true), gettype($totalGroups)), __LINE__);
        }
        $this->TotalGroups = $totalGroups;
        
        return $this;
    }
    /**
     * Get Groups value
     * @return \ArrayType\EwsArrayOfUnifiedGroupsType|null
     */
    public function getGroups(): ?\ArrayType\EwsArrayOfUnifiedGroupsType
    {
        return $this->Groups;
    }
    /**
     * Set Groups value
     * @param \ArrayType\EwsArrayOfUnifiedGroupsType $groups
     * @return \StructType\EwsUnifiedGroupsSetType
     */
    public function setGroups(?\ArrayType\EwsArrayOfUnifiedGroupsType $groups = null): self
    {
        $this->Groups = $groups;
        
        return $this;
    }
}
