<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSearchableMailboxesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request type for the GetSearchableMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSearchableMailboxesType extends EwsBaseRequestType
{
    /**
     * The SearchFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SearchFilter;
    /**
     * The ExpandGroupMembership
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ExpandGroupMembership;
    /**
     * Constructor method for GetSearchableMailboxesType
     * @uses EwsGetSearchableMailboxesType::setSearchFilter()
     * @uses EwsGetSearchableMailboxesType::setExpandGroupMembership()
     * @param string $searchFilter
     * @param bool $expandGroupMembership
     */
    public function __construct($searchFilter = null, $expandGroupMembership = null)
    {
        $this
            ->setSearchFilter($searchFilter)
            ->setExpandGroupMembership($expandGroupMembership);
    }
    /**
     * Get SearchFilter value
     * @return string|null
     */
    public function getSearchFilter()
    {
        return $this->SearchFilter;
    }
    /**
     * Set SearchFilter value
     * @param string $searchFilter
     * @return \Ews\StructType\EwsGetSearchableMailboxesType
     */
    public function setSearchFilter($searchFilter = null)
    {
        // validation for constraint: string
        if (!is_null($searchFilter) && !is_string($searchFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchFilter, true), gettype($searchFilter)), __LINE__);
        }
        $this->SearchFilter = $searchFilter;
        return $this;
    }
    /**
     * Get ExpandGroupMembership value
     * @return bool|null
     */
    public function getExpandGroupMembership()
    {
        return $this->ExpandGroupMembership;
    }
    /**
     * Set ExpandGroupMembership value
     * @param bool $expandGroupMembership
     * @return \Ews\StructType\EwsGetSearchableMailboxesType
     */
    public function setExpandGroupMembership($expandGroupMembership = null)
    {
        // validation for constraint: boolean
        if (!is_null($expandGroupMembership) && !is_bool($expandGroupMembership)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expandGroupMembership, true), gettype($expandGroupMembership)), __LINE__);
        }
        $this->ExpandGroupMembership = $expandGroupMembership;
        return $this;
    }
}
