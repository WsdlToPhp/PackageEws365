<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscoverySearchConfigurationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Discovery search configuration.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDiscoverySearchConfigurationType extends AbstractStructBase
{
    /**
     * The SearchId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchId;
    /**
     * The SearchQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchQuery;
    /**
     * The SearchableMailboxes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSearchableMailboxesType
     */
    public $SearchableMailboxes;
    /**
     * The InPlaceHoldIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InPlaceHoldIdentity;
    /**
     * The ManagedByOrganization
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ManagedByOrganization;
    /**
     * The Language
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($searchId) && !is_string($searchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchId, true), gettype($searchId)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($searchQuery) && !is_string($searchQuery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchQuery, true), gettype($searchQuery)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($inPlaceHoldIdentity) && !is_string($inPlaceHoldIdentity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inPlaceHoldIdentity, true), gettype($inPlaceHoldIdentity)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($managedByOrganization) && !is_string($managedByOrganization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($managedByOrganization, true), gettype($managedByOrganization)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
}
