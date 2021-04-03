<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingTimesLocationConstraints StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMeetingTimesLocationConstraints extends AbstractStructBase
{
    /**
     * The LocationEntries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfLocationConstraintItems|null
     */
    protected ?\ArrayType\EwsArrayOfLocationConstraintItems $LocationEntries = null;
    /**
     * The IsRequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRequired = null;
    /**
     * The SuggestLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SuggestLocation = null;
    /**
     * Constructor method for FindMeetingTimesLocationConstraints
     * @uses EwsFindMeetingTimesLocationConstraints::setLocationEntries()
     * @uses EwsFindMeetingTimesLocationConstraints::setIsRequired()
     * @uses EwsFindMeetingTimesLocationConstraints::setSuggestLocation()
     * @param \ArrayType\EwsArrayOfLocationConstraintItems $locationEntries
     * @param bool $isRequired
     * @param bool $suggestLocation
     */
    public function __construct(?\ArrayType\EwsArrayOfLocationConstraintItems $locationEntries = null, ?bool $isRequired = null, ?bool $suggestLocation = null)
    {
        $this
            ->setLocationEntries($locationEntries)
            ->setIsRequired($isRequired)
            ->setSuggestLocation($suggestLocation);
    }
    /**
     * Get LocationEntries value
     * @return \ArrayType\EwsArrayOfLocationConstraintItems|null
     */
    public function getLocationEntries(): ?\ArrayType\EwsArrayOfLocationConstraintItems
    {
        return $this->LocationEntries;
    }
    /**
     * Set LocationEntries value
     * @param \ArrayType\EwsArrayOfLocationConstraintItems $locationEntries
     * @return \StructType\EwsFindMeetingTimesLocationConstraints
     */
    public function setLocationEntries(?\ArrayType\EwsArrayOfLocationConstraintItems $locationEntries = null): self
    {
        $this->LocationEntries = $locationEntries;
        
        return $this;
    }
    /**
     * Get IsRequired value
     * @return bool|null
     */
    public function getIsRequired(): ?bool
    {
        return $this->IsRequired;
    }
    /**
     * Set IsRequired value
     * @param bool $isRequired
     * @return \StructType\EwsFindMeetingTimesLocationConstraints
     */
    public function setIsRequired(?bool $isRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRequired) && !is_bool($isRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRequired, true), gettype($isRequired)), __LINE__);
        }
        $this->IsRequired = $isRequired;
        
        return $this;
    }
    /**
     * Get SuggestLocation value
     * @return bool|null
     */
    public function getSuggestLocation(): ?bool
    {
        return $this->SuggestLocation;
    }
    /**
     * Set SuggestLocation value
     * @param bool $suggestLocation
     * @return \StructType\EwsFindMeetingTimesLocationConstraints
     */
    public function setSuggestLocation(?bool $suggestLocation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suggestLocation) && !is_bool($suggestLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suggestLocation, true), gettype($suggestLocation)), __LINE__);
        }
        $this->SuggestLocation = $suggestLocation;
        
        return $this;
    }
}
