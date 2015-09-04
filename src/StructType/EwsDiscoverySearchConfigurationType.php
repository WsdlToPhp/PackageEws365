<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscoverySearchConfigurationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Discovery search configuration.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsDiscoverySearchConfigurationType extends AbstractStructBase
{
    /**
     * The SearchId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchId;
    /**
     * The SearchQuery
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchQuery;
    /**
     * The SearchableMailboxes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Array of searchable mailbox.
     * @var \Ews\ArrayType\EwsArrayOfSearchableMailboxesType
     */
    public $SearchableMailboxes;
    /**
     * The InPlaceHoldIdentity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InPlaceHoldIdentity;
    /**
     * The ManagedByOrganization
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ManagedByOrganization;
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Language;
    /**
     * Constructor method for DiscoverySearchConfigurationType
     * @uses EwsDiscoverySearchConfigurationType::setSearchId()
     * @uses EwsDiscoverySearchConfigurationType::setSearchQuery()
     * @uses EwsDiscoverySearchConfigurationType::setSearchableMailboxes()
     * @uses EwsDiscoverySearchConfigurationType::setInPlaceHoldIdentity()
     * @uses EwsDiscoverySearchConfigurationType::setManagedByOrganization()
     * @uses EwsDiscoverySearchConfigurationType::setLanguage()
     * @param string $searchId
     * @param string $searchQuery
     * @param \Ews\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes
     * @param string $inPlaceHoldIdentity
     * @param string $managedByOrganization
     * @param string $language
     */
    public function __construct($searchId = null, $searchQuery = null, \Ews\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes = null, $inPlaceHoldIdentity = null, $managedByOrganization = null, $language = null)
    {
        $this
            ->setSearchId($searchId)
            ->setSearchQuery($searchQuery)
            ->setSearchableMailboxes($searchableMailboxes)
            ->setInPlaceHoldIdentity($inPlaceHoldIdentity)
            ->setManagedByOrganization($managedByOrganization)
            ->setLanguage($language);
    }
    /**
     * Get SearchId value
     * @return string
     */
    public function getSearchId()
    {
        return $this->SearchId;
    }
    /**
     * Set SearchId value
     * @param string $searchId
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType
     */
    public function setSearchId($searchId = null)
    {
        $this->SearchId = $searchId;
        return $this;
    }
    /**
     * Get SearchQuery value
     * @return string
     */
    public function getSearchQuery()
    {
        return $this->SearchQuery;
    }
    /**
     * Set SearchQuery value
     * @param string $searchQuery
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType
     */
    public function setSearchQuery($searchQuery = null)
    {
        $this->SearchQuery = $searchQuery;
        return $this;
    }
    /**
     * Get SearchableMailboxes value
     * @return \Ews\ArrayType\EwsArrayOfSearchableMailboxesType|null
     */
    public function getSearchableMailboxes()
    {
        return $this->SearchableMailboxes;
    }
    /**
     * Set SearchableMailboxes value
     * @param \Ews\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType
     */
    public function setSearchableMailboxes(\Ews\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes = null)
    {
        $this->SearchableMailboxes = $searchableMailboxes;
        return $this;
    }
    /**
     * Get InPlaceHoldIdentity value
     * @return string|null
     */
    public function getInPlaceHoldIdentity()
    {
        return $this->InPlaceHoldIdentity;
    }
    /**
     * Set InPlaceHoldIdentity value
     * @param string $inPlaceHoldIdentity
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType
     */
    public function setInPlaceHoldIdentity($inPlaceHoldIdentity = null)
    {
        $this->InPlaceHoldIdentity = $inPlaceHoldIdentity;
        return $this;
    }
    /**
     * Get ManagedByOrganization value
     * @return string|null
     */
    public function getManagedByOrganization()
    {
        return $this->ManagedByOrganization;
    }
    /**
     * Set ManagedByOrganization value
     * @param string $managedByOrganization
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType
     */
    public function setManagedByOrganization($managedByOrganization = null)
    {
        $this->ManagedByOrganization = $managedByOrganization;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType
     */
    public function setLanguage($language = null)
    {
        $this->Language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDiscoverySearchConfigurationType
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
