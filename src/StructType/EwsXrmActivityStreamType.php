<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XrmActivityStreamType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsXrmActivityStreamType extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The ClientSessionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ClientSessionId = null;
    /**
     * The EventTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EventTime = null;
    /**
     * The SourceUser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SourceUser = null;
    /**
     * The ActionVerb
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ActionVerb = null;
    /**
     * The Subtype
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subtype = null;
    /**
     * The TargetEntities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $TargetEntities = null;
    /**
     * The OtherRelatedEntities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $OtherRelatedEntities = null;
    /**
     * The Flags
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Flags = null;
    /**
     * The ModifiedProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModifiedProperties = null;
    /**
     * The AdditionalActivityDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AdditionalActivityDetails = null;
    /**
     * Constructor method for XrmActivityStreamType
     * @uses EwsXrmActivityStreamType::setId()
     * @uses EwsXrmActivityStreamType::setClientSessionId()
     * @uses EwsXrmActivityStreamType::setEventTime()
     * @uses EwsXrmActivityStreamType::setSourceUser()
     * @uses EwsXrmActivityStreamType::setActionVerb()
     * @uses EwsXrmActivityStreamType::setSubtype()
     * @uses EwsXrmActivityStreamType::setTargetEntities()
     * @uses EwsXrmActivityStreamType::setOtherRelatedEntities()
     * @uses EwsXrmActivityStreamType::setFlags()
     * @uses EwsXrmActivityStreamType::setModifiedProperties()
     * @uses EwsXrmActivityStreamType::setAdditionalActivityDetails()
     * @param string $id
     * @param string $clientSessionId
     * @param string $eventTime
     * @param string $sourceUser
     * @param string $actionVerb
     * @param string $subtype
     * @param \ArrayType\EwsArrayOfStringsType $targetEntities
     * @param \ArrayType\EwsArrayOfStringsType $otherRelatedEntities
     * @param string $flags
     * @param string $modifiedProperties
     * @param string $additionalActivityDetails
     */
    public function __construct(?string $id = null, ?string $clientSessionId = null, ?string $eventTime = null, ?string $sourceUser = null, ?string $actionVerb = null, ?string $subtype = null, ?\ArrayType\EwsArrayOfStringsType $targetEntities = null, ?\ArrayType\EwsArrayOfStringsType $otherRelatedEntities = null, ?string $flags = null, ?string $modifiedProperties = null, ?string $additionalActivityDetails = null)
    {
        $this
            ->setId($id)
            ->setClientSessionId($clientSessionId)
            ->setEventTime($eventTime)
            ->setSourceUser($sourceUser)
            ->setActionVerb($actionVerb)
            ->setSubtype($subtype)
            ->setTargetEntities($targetEntities)
            ->setOtherRelatedEntities($otherRelatedEntities)
            ->setFlags($flags)
            ->setModifiedProperties($modifiedProperties)
            ->setAdditionalActivityDetails($additionalActivityDetails);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get ClientSessionId value
     * @return string|null
     */
    public function getClientSessionId(): ?string
    {
        return $this->ClientSessionId;
    }
    /**
     * Set ClientSessionId value
     * @param string $clientSessionId
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setClientSessionId(?string $clientSessionId = null): self
    {
        // validation for constraint: string
        if (!is_null($clientSessionId) && !is_string($clientSessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientSessionId, true), gettype($clientSessionId)), __LINE__);
        }
        $this->ClientSessionId = $clientSessionId;
        
        return $this;
    }
    /**
     * Get EventTime value
     * @return string|null
     */
    public function getEventTime(): ?string
    {
        return $this->EventTime;
    }
    /**
     * Set EventTime value
     * @param string $eventTime
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setEventTime(?string $eventTime = null): self
    {
        // validation for constraint: string
        if (!is_null($eventTime) && !is_string($eventTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventTime, true), gettype($eventTime)), __LINE__);
        }
        $this->EventTime = $eventTime;
        
        return $this;
    }
    /**
     * Get SourceUser value
     * @return string|null
     */
    public function getSourceUser(): ?string
    {
        return $this->SourceUser;
    }
    /**
     * Set SourceUser value
     * @param string $sourceUser
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setSourceUser(?string $sourceUser = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceUser) && !is_string($sourceUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceUser, true), gettype($sourceUser)), __LINE__);
        }
        $this->SourceUser = $sourceUser;
        
        return $this;
    }
    /**
     * Get ActionVerb value
     * @return string|null
     */
    public function getActionVerb(): ?string
    {
        return $this->ActionVerb;
    }
    /**
     * Set ActionVerb value
     * @param string $actionVerb
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setActionVerb(?string $actionVerb = null): self
    {
        // validation for constraint: string
        if (!is_null($actionVerb) && !is_string($actionVerb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionVerb, true), gettype($actionVerb)), __LINE__);
        }
        $this->ActionVerb = $actionVerb;
        
        return $this;
    }
    /**
     * Get Subtype value
     * @return string|null
     */
    public function getSubtype(): ?string
    {
        return $this->Subtype;
    }
    /**
     * Set Subtype value
     * @param string $subtype
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setSubtype(?string $subtype = null): self
    {
        // validation for constraint: string
        if (!is_null($subtype) && !is_string($subtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subtype, true), gettype($subtype)), __LINE__);
        }
        $this->Subtype = $subtype;
        
        return $this;
    }
    /**
     * Get TargetEntities value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getTargetEntities(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->TargetEntities;
    }
    /**
     * Set TargetEntities value
     * @param \ArrayType\EwsArrayOfStringsType $targetEntities
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setTargetEntities(?\ArrayType\EwsArrayOfStringsType $targetEntities = null): self
    {
        $this->TargetEntities = $targetEntities;
        
        return $this;
    }
    /**
     * Get OtherRelatedEntities value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getOtherRelatedEntities(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->OtherRelatedEntities;
    }
    /**
     * Set OtherRelatedEntities value
     * @param \ArrayType\EwsArrayOfStringsType $otherRelatedEntities
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setOtherRelatedEntities(?\ArrayType\EwsArrayOfStringsType $otherRelatedEntities = null): self
    {
        $this->OtherRelatedEntities = $otherRelatedEntities;
        
        return $this;
    }
    /**
     * Get Flags value
     * @return string|null
     */
    public function getFlags(): ?string
    {
        return $this->Flags;
    }
    /**
     * Set Flags value
     * @uses \EnumType\EwsXrmActivityStreamFlagsType::valueIsValid()
     * @uses \EnumType\EwsXrmActivityStreamFlagsType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $flags
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setFlags(?string $flags = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsXrmActivityStreamFlagsType::valueIsValid($flags)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsXrmActivityStreamFlagsType', is_array($flags) ? implode(', ', $flags) : var_export($flags, true), implode(', ', \EnumType\EwsXrmActivityStreamFlagsType::getValidValues())), __LINE__);
        }
        $this->Flags = $flags;
        
        return $this;
    }
    /**
     * Get ModifiedProperties value
     * @return string|null
     */
    public function getModifiedProperties(): ?string
    {
        return $this->ModifiedProperties;
    }
    /**
     * Set ModifiedProperties value
     * @param string $modifiedProperties
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setModifiedProperties(?string $modifiedProperties = null): self
    {
        // validation for constraint: string
        if (!is_null($modifiedProperties) && !is_string($modifiedProperties)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedProperties, true), gettype($modifiedProperties)), __LINE__);
        }
        $this->ModifiedProperties = $modifiedProperties;
        
        return $this;
    }
    /**
     * Get AdditionalActivityDetails value
     * @return string|null
     */
    public function getAdditionalActivityDetails(): ?string
    {
        return $this->AdditionalActivityDetails;
    }
    /**
     * Set AdditionalActivityDetails value
     * @param string $additionalActivityDetails
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function setAdditionalActivityDetails(?string $additionalActivityDetails = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalActivityDetails) && !is_string($additionalActivityDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalActivityDetails, true), gettype($additionalActivityDetails)), __LINE__);
        }
        $this->AdditionalActivityDetails = $additionalActivityDetails;
        
        return $this;
    }
}
