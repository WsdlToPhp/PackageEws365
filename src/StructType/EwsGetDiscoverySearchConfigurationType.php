<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDiscoverySearchConfigurationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request type for the GetDiscoverySearchConfiguration web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetDiscoverySearchConfigurationType extends EwsBaseRequestType
{
    /**
     * The SearchId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SearchId;
    /**
     * The ExpandGroupMembership
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ExpandGroupMembership;
    /**
     * The InPlaceHoldConfigurationOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $InPlaceHoldConfigurationOnly;
    /**
     * Constructor method for GetDiscoverySearchConfigurationType
     * @uses EwsGetDiscoverySearchConfigurationType::setSearchId()
     * @uses EwsGetDiscoverySearchConfigurationType::setExpandGroupMembership()
     * @uses EwsGetDiscoverySearchConfigurationType::setInPlaceHoldConfigurationOnly()
     * @param string $searchId
     * @param bool $expandGroupMembership
     * @param bool $inPlaceHoldConfigurationOnly
     */
    public function __construct($searchId = null, $expandGroupMembership = null, $inPlaceHoldConfigurationOnly = null)
    {
        $this
            ->setSearchId($searchId)
            ->setExpandGroupMembership($expandGroupMembership)
            ->setInPlaceHoldConfigurationOnly($inPlaceHoldConfigurationOnly);
    }
    /**
     * Get SearchId value
     * @return string|null
     */
    public function getSearchId()
    {
        return $this->SearchId;
    }
    /**
     * Set SearchId value
     * @param string $searchId
     * @return \Ews\StructType\EwsGetDiscoverySearchConfigurationType
     */
    public function setSearchId($searchId = null)
    {
        // validation for constraint: string
        if (!is_null($searchId) && !is_string($searchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchId, true), gettype($searchId)), __LINE__);
        }
        $this->SearchId = $searchId;
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
     * @return \Ews\StructType\EwsGetDiscoverySearchConfigurationType
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
    /**
     * Get InPlaceHoldConfigurationOnly value
     * @return bool|null
     */
    public function getInPlaceHoldConfigurationOnly()
    {
        return $this->InPlaceHoldConfigurationOnly;
    }
    /**
     * Set InPlaceHoldConfigurationOnly value
     * @param bool $inPlaceHoldConfigurationOnly
     * @return \Ews\StructType\EwsGetDiscoverySearchConfigurationType
     */
    public function setInPlaceHoldConfigurationOnly($inPlaceHoldConfigurationOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($inPlaceHoldConfigurationOnly) && !is_bool($inPlaceHoldConfigurationOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inPlaceHoldConfigurationOnly, true), gettype($inPlaceHoldConfigurationOnly)), __LINE__);
        }
        $this->InPlaceHoldConfigurationOnly = $inPlaceHoldConfigurationOnly;
        return $this;
    }
}
