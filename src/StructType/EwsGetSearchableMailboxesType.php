<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSearchableMailboxesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Request type for the GetSearchableMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSearchableMailboxesType extends EwsBaseRequestType
{
    /**
     * The SearchFilter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SearchFilter;
    /**
     * The ExpandGroupMembership
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchFilter)), __LINE__);
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
        $this->ExpandGroupMembership = $expandGroupMembership;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetSearchableMailboxesType
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
