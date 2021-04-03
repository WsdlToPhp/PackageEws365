<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $SearchId = null;
    /**
     * The ExpandGroupMembership
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpandGroupMembership = null;
    /**
     * The InPlaceHoldConfigurationOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $InPlaceHoldConfigurationOnly = null;
    /**
     * Constructor method for GetDiscoverySearchConfigurationType
     * @uses EwsGetDiscoverySearchConfigurationType::setSearchId()
     * @uses EwsGetDiscoverySearchConfigurationType::setExpandGroupMembership()
     * @uses EwsGetDiscoverySearchConfigurationType::setInPlaceHoldConfigurationOnly()
     * @param string $searchId
     * @param bool $expandGroupMembership
     * @param bool $inPlaceHoldConfigurationOnly
     */
    public function __construct(?string $searchId = null, ?bool $expandGroupMembership = null, ?bool $inPlaceHoldConfigurationOnly = null)
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
    public function getSearchId(): ?string
    {
        return $this->SearchId;
    }
    /**
     * Set SearchId value
     * @param string $searchId
     * @return \StructType\EwsGetDiscoverySearchConfigurationType
     */
    public function setSearchId(?string $searchId = null): self
    {
        // validation for constraint: string
        if (!is_null($searchId) && !is_string($searchId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchId, true), gettype($searchId)), __LINE__);
        }
        $this->SearchId = $searchId;
        
        return $this;
    }
    /**
     * Get ExpandGroupMembership value
     * @return bool|null
     */
    public function getExpandGroupMembership(): ?bool
    {
        return $this->ExpandGroupMembership;
    }
    /**
     * Set ExpandGroupMembership value
     * @param bool $expandGroupMembership
     * @return \StructType\EwsGetDiscoverySearchConfigurationType
     */
    public function setExpandGroupMembership(?bool $expandGroupMembership = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expandGroupMembership) && !is_bool($expandGroupMembership)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expandGroupMembership, true), gettype($expandGroupMembership)), __LINE__);
        }
        $this->ExpandGroupMembership = $expandGroupMembership;
        
        return $this;
    }
    /**
     * Get InPlaceHoldConfigurationOnly value
     * @return bool|null
     */
    public function getInPlaceHoldConfigurationOnly(): ?bool
    {
        return $this->InPlaceHoldConfigurationOnly;
    }
    /**
     * Set InPlaceHoldConfigurationOnly value
     * @param bool $inPlaceHoldConfigurationOnly
     * @return \StructType\EwsGetDiscoverySearchConfigurationType
     */
    public function setInPlaceHoldConfigurationOnly(?bool $inPlaceHoldConfigurationOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inPlaceHoldConfigurationOnly) && !is_bool($inPlaceHoldConfigurationOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inPlaceHoldConfigurationOnly, true), gettype($inPlaceHoldConfigurationOnly)), __LINE__);
        }
        $this->InPlaceHoldConfigurationOnly = $inPlaceHoldConfigurationOnly;
        
        return $this;
    }
}
