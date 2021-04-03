<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $SearchId;
    /**
     * The SearchQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SearchQuery;
    /**
     * The SearchableMailboxes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSearchableMailboxesType|null
     */
    protected ?\ArrayType\EwsArrayOfSearchableMailboxesType $SearchableMailboxes = null;
    /**
     * The InPlaceHoldIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InPlaceHoldIdentity = null;
    /**
     * The ManagedByOrganization
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ManagedByOrganization = null;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Language = null;
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
     * @param \ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes
     * @param string $inPlaceHoldIdentity
     * @param string $managedByOrganization
     * @param string $language
     */
    public function __construct(string $searchId, string $searchQuery, ?\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes = null, ?string $inPlaceHoldIdentity = null, ?string $managedByOrganization = null, ?string $language = null)
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
    public function getSearchId(): string
    {
        return $this->SearchId;
    }
    /**
     * Set SearchId value
     * @param string $searchId
     * @return \StructType\EwsDiscoverySearchConfigurationType
     */
    public function setSearchId(string $searchId): self
    {
        // validation for constraint: string
        if (!is_null($searchId) && !is_string($searchId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchId, true), gettype($searchId)), __LINE__);
        }
        $this->SearchId = $searchId;
        
        return $this;
    }
    /**
     * Get SearchQuery value
     * @return string
     */
    public function getSearchQuery(): string
    {
        return $this->SearchQuery;
    }
    /**
     * Set SearchQuery value
     * @param string $searchQuery
     * @return \StructType\EwsDiscoverySearchConfigurationType
     */
    public function setSearchQuery(string $searchQuery): self
    {
        // validation for constraint: string
        if (!is_null($searchQuery) && !is_string($searchQuery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchQuery, true), gettype($searchQuery)), __LINE__);
        }
        $this->SearchQuery = $searchQuery;
        
        return $this;
    }
    /**
     * Get SearchableMailboxes value
     * @return \ArrayType\EwsArrayOfSearchableMailboxesType|null
     */
    public function getSearchableMailboxes(): ?\ArrayType\EwsArrayOfSearchableMailboxesType
    {
        return $this->SearchableMailboxes;
    }
    /**
     * Set SearchableMailboxes value
     * @param \ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes
     * @return \StructType\EwsDiscoverySearchConfigurationType
     */
    public function setSearchableMailboxes(?\ArrayType\EwsArrayOfSearchableMailboxesType $searchableMailboxes = null): self
    {
        $this->SearchableMailboxes = $searchableMailboxes;
        
        return $this;
    }
    /**
     * Get InPlaceHoldIdentity value
     * @return string|null
     */
    public function getInPlaceHoldIdentity(): ?string
    {
        return $this->InPlaceHoldIdentity;
    }
    /**
     * Set InPlaceHoldIdentity value
     * @param string $inPlaceHoldIdentity
     * @return \StructType\EwsDiscoverySearchConfigurationType
     */
    public function setInPlaceHoldIdentity(?string $inPlaceHoldIdentity = null): self
    {
        // validation for constraint: string
        if (!is_null($inPlaceHoldIdentity) && !is_string($inPlaceHoldIdentity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inPlaceHoldIdentity, true), gettype($inPlaceHoldIdentity)), __LINE__);
        }
        $this->InPlaceHoldIdentity = $inPlaceHoldIdentity;
        
        return $this;
    }
    /**
     * Get ManagedByOrganization value
     * @return string|null
     */
    public function getManagedByOrganization(): ?string
    {
        return $this->ManagedByOrganization;
    }
    /**
     * Set ManagedByOrganization value
     * @param string $managedByOrganization
     * @return \StructType\EwsDiscoverySearchConfigurationType
     */
    public function setManagedByOrganization(?string $managedByOrganization = null): self
    {
        // validation for constraint: string
        if (!is_null($managedByOrganization) && !is_string($managedByOrganization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($managedByOrganization, true), gettype($managedByOrganization)), __LINE__);
        }
        $this->ManagedByOrganization = $managedByOrganization;
        
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \StructType\EwsDiscoverySearchConfigurationType
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->Language = $language;
        
        return $this;
    }
}
