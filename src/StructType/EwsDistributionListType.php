<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistributionListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDistributionListType extends EwsItemType
{
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The FileAs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileAs = null;
    /**
     * The ContactSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContactSource = null;
    /**
     * The Members
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsMembersListType|null
     */
    protected ?\StructType\EwsMembersListType $Members = null;
    /**
     * Constructor method for DistributionListType
     * @uses EwsDistributionListType::setDisplayName()
     * @uses EwsDistributionListType::setFileAs()
     * @uses EwsDistributionListType::setContactSource()
     * @uses EwsDistributionListType::setMembers()
     * @param string $displayName
     * @param string $fileAs
     * @param string $contactSource
     * @param \StructType\EwsMembersListType $members
     */
    public function __construct(?string $displayName = null, ?string $fileAs = null, ?string $contactSource = null, ?\StructType\EwsMembersListType $members = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setFileAs($fileAs)
            ->setContactSource($contactSource)
            ->setMembers($members);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsDistributionListType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get FileAs value
     * @return string|null
     */
    public function getFileAs(): ?string
    {
        return $this->FileAs;
    }
    /**
     * Set FileAs value
     * @param string $fileAs
     * @return \StructType\EwsDistributionListType
     */
    public function setFileAs(?string $fileAs = null): self
    {
        // validation for constraint: string
        if (!is_null($fileAs) && !is_string($fileAs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileAs, true), gettype($fileAs)), __LINE__);
        }
        $this->FileAs = $fileAs;
        
        return $this;
    }
    /**
     * Get ContactSource value
     * @return string|null
     */
    public function getContactSource(): ?string
    {
        return $this->ContactSource;
    }
    /**
     * Set ContactSource value
     * @uses \EnumType\EwsContactSourceType::valueIsValid()
     * @uses \EnumType\EwsContactSourceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $contactSource
     * @return \StructType\EwsDistributionListType
     */
    public function setContactSource(?string $contactSource = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsContactSourceType::valueIsValid($contactSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsContactSourceType', is_array($contactSource) ? implode(', ', $contactSource) : var_export($contactSource, true), implode(', ', \EnumType\EwsContactSourceType::getValidValues())), __LINE__);
        }
        $this->ContactSource = $contactSource;
        
        return $this;
    }
    /**
     * Get Members value
     * @return \StructType\EwsMembersListType|null
     */
    public function getMembers(): ?\StructType\EwsMembersListType
    {
        return $this->Members;
    }
    /**
     * Set Members value
     * @param \StructType\EwsMembersListType $members
     * @return \StructType\EwsDistributionListType
     */
    public function setMembers(?\StructType\EwsMembersListType $members = null): self
    {
        $this->Members = $members;
        
        return $this;
    }
}
