<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedUnifiedGroupsSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents a set of unified groups in a GetUserUnifiedGroup request
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRequestedUnifiedGroupsSetType extends AbstractStructBase
{
    /**
     * The FilterType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FilterType;
    /**
     * The SortType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SortType = null;
    /**
     * The SortDirection
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SortDirection = null;
    /**
     * The GroupsLimit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $GroupsLimit = null;
    /**
     * Constructor method for RequestedUnifiedGroupsSetType
     * @uses EwsRequestedUnifiedGroupsSetType::setFilterType()
     * @uses EwsRequestedUnifiedGroupsSetType::setSortType()
     * @uses EwsRequestedUnifiedGroupsSetType::setSortDirection()
     * @uses EwsRequestedUnifiedGroupsSetType::setGroupsLimit()
     * @param string $filterType
     * @param string $sortType
     * @param string $sortDirection
     * @param int $groupsLimit
     */
    public function __construct(string $filterType, ?string $sortType = null, ?string $sortDirection = null, ?int $groupsLimit = null)
    {
        $this
            ->setFilterType($filterType)
            ->setSortType($sortType)
            ->setSortDirection($sortDirection)
            ->setGroupsLimit($groupsLimit);
    }
    /**
     * Get FilterType value
     * @return string
     */
    public function getFilterType(): string
    {
        return $this->FilterType;
    }
    /**
     * Set FilterType value
     * @uses \EnumType\EwsUnifiedGroupsFilterType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupsFilterType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $filterType
     * @return \StructType\EwsRequestedUnifiedGroupsSetType
     */
    public function setFilterType(string $filterType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupsFilterType::valueIsValid($filterType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupsFilterType', is_array($filterType) ? implode(', ', $filterType) : var_export($filterType, true), implode(', ', \EnumType\EwsUnifiedGroupsFilterType::getValidValues())), __LINE__);
        }
        $this->FilterType = $filterType;
        
        return $this;
    }
    /**
     * Get SortType value
     * @return string|null
     */
    public function getSortType(): ?string
    {
        return $this->SortType;
    }
    /**
     * Set SortType value
     * @uses \EnumType\EwsUnifiedGroupsSortType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupsSortType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortType
     * @return \StructType\EwsRequestedUnifiedGroupsSetType
     */
    public function setSortType(?string $sortType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupsSortType::valueIsValid($sortType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupsSortType', is_array($sortType) ? implode(', ', $sortType) : var_export($sortType, true), implode(', ', \EnumType\EwsUnifiedGroupsSortType::getValidValues())), __LINE__);
        }
        $this->SortType = $sortType;
        
        return $this;
    }
    /**
     * Get SortDirection value
     * @return string|null
     */
    public function getSortDirection(): ?string
    {
        return $this->SortDirection;
    }
    /**
     * Set SortDirection value
     * @uses \EnumType\EwsSortDirectionType::valueIsValid()
     * @uses \EnumType\EwsSortDirectionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortDirection
     * @return \StructType\EwsRequestedUnifiedGroupsSetType
     */
    public function setSortDirection(?string $sortDirection = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSortDirectionType::valueIsValid($sortDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSortDirectionType', is_array($sortDirection) ? implode(', ', $sortDirection) : var_export($sortDirection, true), implode(', ', \EnumType\EwsSortDirectionType::getValidValues())), __LINE__);
        }
        $this->SortDirection = $sortDirection;
        
        return $this;
    }
    /**
     * Get GroupsLimit value
     * @return int|null
     */
    public function getGroupsLimit(): ?int
    {
        return $this->GroupsLimit;
    }
    /**
     * Set GroupsLimit value
     * @param int $groupsLimit
     * @return \StructType\EwsRequestedUnifiedGroupsSetType
     */
    public function setGroupsLimit(?int $groupsLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($groupsLimit) && !(is_int($groupsLimit) || ctype_digit($groupsLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupsLimit, true), gettype($groupsLimit)), __LINE__);
        }
        $this->GroupsLimit = $groupsLimit;
        
        return $this;
    }
}
