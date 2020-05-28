<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $Id;
    /**
     * The ClientSessionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClientSessionId;
    /**
     * The EventTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EventTime;
    /**
     * The SourceUser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SourceUser;
    /**
     * The ActionVerb
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ActionVerb;
    /**
     * The Subtype
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subtype;
    /**
     * The TargetEntities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $TargetEntities;
    /**
     * The OtherRelatedEntities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $OtherRelatedEntities;
    /**
     * The Flags
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Flags;
    /**
     * The ModifiedProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModifiedProperties;
    /**
     * The AdditionalActivityDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalActivityDetails;
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
     * @param \Ews\ArrayType\EwsArrayOfStringsType $targetEntities
     * @param \Ews\ArrayType\EwsArrayOfStringsType $otherRelatedEntities
     * @param string $flags
     * @param string $modifiedProperties
     * @param string $additionalActivityDetails
     */
    public function __construct($id = null, $clientSessionId = null, $eventTime = null, $sourceUser = null, $actionVerb = null, $subtype = null, \Ews\ArrayType\EwsArrayOfStringsType $targetEntities = null, \Ews\ArrayType\EwsArrayOfStringsType $otherRelatedEntities = null, $flags = null, $modifiedProperties = null, $additionalActivityDetails = null)
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
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get ClientSessionId value
     * @return string|null
     */
    public function getClientSessionId()
    {
        return $this->ClientSessionId;
    }
    /**
     * Set ClientSessionId value
     * @param string $clientSessionId
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setClientSessionId($clientSessionId = null)
    {
        // validation for constraint: string
        if (!is_null($clientSessionId) && !is_string($clientSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientSessionId, true), gettype($clientSessionId)), __LINE__);
        }
        $this->ClientSessionId = $clientSessionId;
        return $this;
    }
    /**
     * Get EventTime value
     * @return string|null
     */
    public function getEventTime()
    {
        return $this->EventTime;
    }
    /**
     * Set EventTime value
     * @param string $eventTime
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setEventTime($eventTime = null)
    {
        // validation for constraint: string
        if (!is_null($eventTime) && !is_string($eventTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventTime, true), gettype($eventTime)), __LINE__);
        }
        $this->EventTime = $eventTime;
        return $this;
    }
    /**
     * Get SourceUser value
     * @return string|null
     */
    public function getSourceUser()
    {
        return $this->SourceUser;
    }
    /**
     * Set SourceUser value
     * @param string $sourceUser
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setSourceUser($sourceUser = null)
    {
        // validation for constraint: string
        if (!is_null($sourceUser) && !is_string($sourceUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceUser, true), gettype($sourceUser)), __LINE__);
        }
        $this->SourceUser = $sourceUser;
        return $this;
    }
    /**
     * Get ActionVerb value
     * @return string|null
     */
    public function getActionVerb()
    {
        return $this->ActionVerb;
    }
    /**
     * Set ActionVerb value
     * @param string $actionVerb
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setActionVerb($actionVerb = null)
    {
        // validation for constraint: string
        if (!is_null($actionVerb) && !is_string($actionVerb)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionVerb, true), gettype($actionVerb)), __LINE__);
        }
        $this->ActionVerb = $actionVerb;
        return $this;
    }
    /**
     * Get Subtype value
     * @return string|null
     */
    public function getSubtype()
    {
        return $this->Subtype;
    }
    /**
     * Set Subtype value
     * @param string $subtype
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setSubtype($subtype = null)
    {
        // validation for constraint: string
        if (!is_null($subtype) && !is_string($subtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subtype, true), gettype($subtype)), __LINE__);
        }
        $this->Subtype = $subtype;
        return $this;
    }
    /**
     * Get TargetEntities value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getTargetEntities()
    {
        return $this->TargetEntities;
    }
    /**
     * Set TargetEntities value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $targetEntities
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setTargetEntities(\Ews\ArrayType\EwsArrayOfStringsType $targetEntities = null)
    {
        $this->TargetEntities = $targetEntities;
        return $this;
    }
    /**
     * Get OtherRelatedEntities value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getOtherRelatedEntities()
    {
        return $this->OtherRelatedEntities;
    }
    /**
     * Set OtherRelatedEntities value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $otherRelatedEntities
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setOtherRelatedEntities(\Ews\ArrayType\EwsArrayOfStringsType $otherRelatedEntities = null)
    {
        $this->OtherRelatedEntities = $otherRelatedEntities;
        return $this;
    }
    /**
     * Get Flags value
     * @return string|null
     */
    public function getFlags()
    {
        return $this->Flags;
    }
    /**
     * Set Flags value
     * @uses \Ews\EnumType\EwsXrmActivityStreamFlagsType::valueIsValid()
     * @uses \Ews\EnumType\EwsXrmActivityStreamFlagsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flags
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setFlags($flags = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsXrmActivityStreamFlagsType::valueIsValid($flags)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsXrmActivityStreamFlagsType', is_array($flags) ? implode(', ', $flags) : var_export($flags, true), implode(', ', \Ews\EnumType\EwsXrmActivityStreamFlagsType::getValidValues())), __LINE__);
        }
        $this->Flags = $flags;
        return $this;
    }
    /**
     * Get ModifiedProperties value
     * @return string|null
     */
    public function getModifiedProperties()
    {
        return $this->ModifiedProperties;
    }
    /**
     * Set ModifiedProperties value
     * @param string $modifiedProperties
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setModifiedProperties($modifiedProperties = null)
    {
        // validation for constraint: string
        if (!is_null($modifiedProperties) && !is_string($modifiedProperties)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedProperties, true), gettype($modifiedProperties)), __LINE__);
        }
        $this->ModifiedProperties = $modifiedProperties;
        return $this;
    }
    /**
     * Get AdditionalActivityDetails value
     * @return string|null
     */
    public function getAdditionalActivityDetails()
    {
        return $this->AdditionalActivityDetails;
    }
    /**
     * Set AdditionalActivityDetails value
     * @param string $additionalActivityDetails
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function setAdditionalActivityDetails($additionalActivityDetails = null)
    {
        // validation for constraint: string
        if (!is_null($additionalActivityDetails) && !is_string($additionalActivityDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalActivityDetails, true), gettype($additionalActivityDetails)), __LINE__);
        }
        $this->AdditionalActivityDetails = $additionalActivityDetails;
        return $this;
    }
}
