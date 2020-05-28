<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $DisplayName;
    /**
     * The FileAs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FileAs;
    /**
     * The ContactSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContactSource;
    /**
     * The Members
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMembersListType
     */
    public $Members;
    /**
     * Constructor method for DistributionListType
     * @uses EwsDistributionListType::setDisplayName()
     * @uses EwsDistributionListType::setFileAs()
     * @uses EwsDistributionListType::setContactSource()
     * @uses EwsDistributionListType::setMembers()
     * @param string $displayName
     * @param string $fileAs
     * @param string $contactSource
     * @param \Ews\StructType\EwsMembersListType $members
     */
    public function __construct($displayName = null, $fileAs = null, $contactSource = null, \Ews\StructType\EwsMembersListType $members = null)
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
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsDistributionListType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get FileAs value
     * @return string|null
     */
    public function getFileAs()
    {
        return $this->FileAs;
    }
    /**
     * Set FileAs value
     * @param string $fileAs
     * @return \Ews\StructType\EwsDistributionListType
     */
    public function setFileAs($fileAs = null)
    {
        // validation for constraint: string
        if (!is_null($fileAs) && !is_string($fileAs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileAs, true), gettype($fileAs)), __LINE__);
        }
        $this->FileAs = $fileAs;
        return $this;
    }
    /**
     * Get ContactSource value
     * @return string|null
     */
    public function getContactSource()
    {
        return $this->ContactSource;
    }
    /**
     * Set ContactSource value
     * @uses \Ews\EnumType\EwsContactSourceType::valueIsValid()
     * @uses \Ews\EnumType\EwsContactSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $contactSource
     * @return \Ews\StructType\EwsDistributionListType
     */
    public function setContactSource($contactSource = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsContactSourceType::valueIsValid($contactSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsContactSourceType', is_array($contactSource) ? implode(', ', $contactSource) : var_export($contactSource, true), implode(', ', \Ews\EnumType\EwsContactSourceType::getValidValues())), __LINE__);
        }
        $this->ContactSource = $contactSource;
        return $this;
    }
    /**
     * Get Members value
     * @return \Ews\StructType\EwsMembersListType|null
     */
    public function getMembers()
    {
        return $this->Members;
    }
    /**
     * Set Members value
     * @param \Ews\StructType\EwsMembersListType $members
     * @return \Ews\StructType\EwsDistributionListType
     */
    public function setMembers(\Ews\StructType\EwsMembersListType $members = null)
    {
        $this->Members = $members;
        return $this;
    }
}
