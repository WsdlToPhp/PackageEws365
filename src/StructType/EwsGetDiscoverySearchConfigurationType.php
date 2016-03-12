<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDiscoverySearchConfigurationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Request type for the GetDiscoverySearchConfiguration web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetDiscoverySearchConfigurationType extends EwsBaseRequestType
{
    /**
     * The SearchId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SearchId;
    /**
     * The ExpandGroupMembership
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ExpandGroupMembership;
    /**
     * The InPlaceHoldConfigurationOnly
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchId)), __LINE__);
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
        $this->InPlaceHoldConfigurationOnly = $inPlaceHoldConfigurationOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetDiscoverySearchConfigurationType
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
