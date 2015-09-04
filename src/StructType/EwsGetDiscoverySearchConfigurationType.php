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
 * @release 1.0.0
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
     * @var boolean
     */
    public $ExpandGroupMembership;
    /**
     * The InPlaceHoldConfigurationOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $InPlaceHoldConfigurationOnly;
    /**
     * Constructor method for GetDiscoverySearchConfigurationType
     * @uses EwsGetDiscoverySearchConfigurationType::setSearchId()
     * @uses EwsGetDiscoverySearchConfigurationType::setExpandGroupMembership()
     * @uses EwsGetDiscoverySearchConfigurationType::setInPlaceHoldConfigurationOnly()
     * @param string $searchId
     * @param boolean $expandGroupMembership
     * @param boolean $inPlaceHoldConfigurationOnly
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
        $this->SearchId = $searchId;
        return $this;
    }
    /**
     * Get ExpandGroupMembership value
     * @return boolean|null
     */
    public function getExpandGroupMembership()
    {
        return $this->ExpandGroupMembership;
    }
    /**
     * Set ExpandGroupMembership value
     * @param boolean $expandGroupMembership
     * @return \Ews\StructType\EwsGetDiscoverySearchConfigurationType
     */
    public function setExpandGroupMembership($expandGroupMembership = null)
    {
        $this->ExpandGroupMembership = $expandGroupMembership;
        return $this;
    }
    /**
     * Get InPlaceHoldConfigurationOnly value
     * @return boolean|null
     */
    public function getInPlaceHoldConfigurationOnly()
    {
        return $this->InPlaceHoldConfigurationOnly;
    }
    /**
     * Set InPlaceHoldConfigurationOnly value
     * @param boolean $inPlaceHoldConfigurationOnly
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
