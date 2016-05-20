<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedUnifiedGroupsSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents a set of unified groups in a GetUserUnifiedGroup request
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRequestedUnifiedGroupsSetType extends AbstractStructBase
{
    /**
     * The FilterType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FilterType;
    /**
     * The SortType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SortType;
    /**
     * The SortDirection
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SortDirection;
    /**
     * The GroupsLimit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $GroupsLimit;
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
    public function __construct($filterType = null, $sortType = null, $sortDirection = null, $groupsLimit = null)
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
    public function getFilterType()
    {
        return $this->FilterType;
    }
    /**
     * Set FilterType value
     * @uses \Ews\EnumType\EwsUnifiedGroupsFilterType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupsFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $filterType
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType
     */
    public function setFilterType($filterType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupsFilterType::valueIsValid($filterType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $filterType, implode(', ', \Ews\EnumType\EwsUnifiedGroupsFilterType::getValidValues())), __LINE__);
        }
        $this->FilterType = $filterType;
        return $this;
    }
    /**
     * Get SortType value
     * @return string|null
     */
    public function getSortType()
    {
        return $this->SortType;
    }
    /**
     * Set SortType value
     * @uses \Ews\EnumType\EwsUnifiedGroupsSortType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupsSortType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortType
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType
     */
    public function setSortType($sortType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupsSortType::valueIsValid($sortType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortType, implode(', ', \Ews\EnumType\EwsUnifiedGroupsSortType::getValidValues())), __LINE__);
        }
        $this->SortType = $sortType;
        return $this;
    }
    /**
     * Get SortDirection value
     * @return string|null
     */
    public function getSortDirection()
    {
        return $this->SortDirection;
    }
    /**
     * Set SortDirection value
     * @uses \Ews\EnumType\EwsSortDirectionType::valueIsValid()
     * @uses \Ews\EnumType\EwsSortDirectionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortDirection
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType
     */
    public function setSortDirection($sortDirection = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSortDirectionType::valueIsValid($sortDirection)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortDirection, implode(', ', \Ews\EnumType\EwsSortDirectionType::getValidValues())), __LINE__);
        }
        $this->SortDirection = $sortDirection;
        return $this;
    }
    /**
     * Get GroupsLimit value
     * @return int|null
     */
    public function getGroupsLimit()
    {
        return $this->GroupsLimit;
    }
    /**
     * Set GroupsLimit value
     * @param int $groupsLimit
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType
     */
    public function setGroupsLimit($groupsLimit = null)
    {
        // validation for constraint: int
        if (!is_null($groupsLimit) && !is_numeric($groupsLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupsLimit)), __LINE__);
        }
        $this->GroupsLimit = $groupsLimit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
