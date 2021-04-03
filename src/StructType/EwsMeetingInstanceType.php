<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingInstanceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingInstanceType extends AbstractStructBase
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
     * The ChangeKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ChangeKey = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Version = null;
    /**
     * The JoinUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $JoinUrl = null;
    /**
     * The DateTimeCreated
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateTimeCreated = null;
    /**
     * The DateTimeModified
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateTimeModified = null;
    /**
     * The Meadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Meadata = null;
    /**
     * The Tag
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Tag = null;
    /**
     * The ParentGoid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ParentGoid = null;
    /**
     * The ParticipantActivities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfParticipantActivities|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfParticipantActivities $ParticipantActivities = null;
    /**
     * The ContentActivities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfContentActivities|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfContentActivities $ContentActivities = null;
    /**
     * Constructor method for MeetingInstanceType
     * @uses EwsMeetingInstanceType::setId()
     * @uses EwsMeetingInstanceType::setChangeKey()
     * @uses EwsMeetingInstanceType::setVersion()
     * @uses EwsMeetingInstanceType::setJoinUrl()
     * @uses EwsMeetingInstanceType::setDateTimeCreated()
     * @uses EwsMeetingInstanceType::setDateTimeModified()
     * @uses EwsMeetingInstanceType::setMeadata()
     * @uses EwsMeetingInstanceType::setTag()
     * @uses EwsMeetingInstanceType::setParentGoid()
     * @uses EwsMeetingInstanceType::setParticipantActivities()
     * @uses EwsMeetingInstanceType::setContentActivities()
     * @param string $id
     * @param string $changeKey
     * @param string $version
     * @param string $joinUrl
     * @param string $dateTimeCreated
     * @param string $dateTimeModified
     * @param string $meadata
     * @param string $tag
     * @param string $parentGoid
     * @param \ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivities
     * @param \ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivities
     */
    public function __construct(?string $id = null, ?string $changeKey = null, ?string $version = null, ?string $joinUrl = null, ?string $dateTimeCreated = null, ?string $dateTimeModified = null, ?string $meadata = null, ?string $tag = null, ?string $parentGoid = null, ?\ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivities = null, ?\ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivities = null)
    {
        $this
            ->setId($id)
            ->setChangeKey($changeKey)
            ->setVersion($version)
            ->setJoinUrl($joinUrl)
            ->setDateTimeCreated($dateTimeCreated)
            ->setDateTimeModified($dateTimeModified)
            ->setMeadata($meadata)
            ->setTag($tag)
            ->setParentGoid($parentGoid)
            ->setParticipantActivities($participantActivities)
            ->setContentActivities($contentActivities);
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
     * @return \StructType\EwsMeetingInstanceType
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
     * Get ChangeKey value
     * @return string|null
     */
    public function getChangeKey(): ?string
    {
        return $this->ChangeKey;
    }
    /**
     * Set ChangeKey value
     * @param string $changeKey
     * @return \StructType\EwsMeetingInstanceType
     */
    public function setChangeKey(?string $changeKey = null): self
    {
        // validation for constraint: string
        if (!is_null($changeKey) && !is_string($changeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeKey, true), gettype($changeKey)), __LINE__);
        }
        $this->ChangeKey = $changeKey;
        
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \StructType\EwsMeetingInstanceType
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get JoinUrl value
     * @return string|null
     */
    public function getJoinUrl(): ?string
    {
        return $this->JoinUrl;
    }
    /**
     * Set JoinUrl value
     * @param string $joinUrl
     * @return \StructType\EwsMeetingInstanceType
     */
    public function setJoinUrl(?string $joinUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($joinUrl) && !is_string($joinUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($joinUrl, true), gettype($joinUrl)), __LINE__);
        }
        $this->JoinUrl = $joinUrl;
        
        return $this;
    }
    /**
     * Get DateTimeCreated value
     * @return string|null
     */
    public function getDateTimeCreated(): ?string
    {
        return $this->DateTimeCreated;
    }
    /**
     * Set DateTimeCreated value
     * @param string $dateTimeCreated
     * @return \StructType\EwsMeetingInstanceType
     */
    public function setDateTimeCreated(?string $dateTimeCreated = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTimeCreated) && !is_string($dateTimeCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeCreated, true), gettype($dateTimeCreated)), __LINE__);
        }
        $this->DateTimeCreated = $dateTimeCreated;
        
        return $this;
    }
    /**
     * Get DateTimeModified value
     * @return string|null
     */
    public function getDateTimeModified(): ?string
    {
        return $this->DateTimeModified;
    }
    /**
     * Set DateTimeModified value
     * @param string $dateTimeModified
     * @return \StructType\EwsMeetingInstanceType
     */
    public function setDateTimeModified(?string $dateTimeModified = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTimeModified) && !is_string($dateTimeModified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeModified, true), gettype($dateTimeModified)), __LINE__);
        }
        $this->DateTimeModified = $dateTimeModified;
        
        return $this;
    }
    /**
     * Get Meadata value
     * @return string|null
     */
    public function getMeadata(): ?string
    {
        return $this->Meadata;
    }
    /**
     * Set Meadata value
     * @param string $meadata
     * @return \StructType\EwsMeetingInstanceType
     */
    public function setMeadata(?string $meadata = null): self
    {
        // validation for constraint: string
        if (!is_null($meadata) && !is_string($meadata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($meadata, true), gettype($meadata)), __LINE__);
        }
        $this->Meadata = $meadata;
        
        return $this;
    }
    /**
     * Get Tag value
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->Tag;
    }
    /**
     * Set Tag value
     * @param string $tag
     * @return \StructType\EwsMeetingInstanceType
     */
    public function setTag(?string $tag = null): self
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tag, true), gettype($tag)), __LINE__);
        }
        $this->Tag = $tag;
        
        return $this;
    }
    /**
     * Get ParentGoid value
     * @return string|null
     */
    public function getParentGoid(): ?string
    {
        return $this->ParentGoid;
    }
    /**
     * Set ParentGoid value
     * @param string $parentGoid
     * @return \StructType\EwsMeetingInstanceType
     */
    public function setParentGoid(?string $parentGoid = null): self
    {
        // validation for constraint: string
        if (!is_null($parentGoid) && !is_string($parentGoid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentGoid, true), gettype($parentGoid)), __LINE__);
        }
        $this->ParentGoid = $parentGoid;
        
        return $this;
    }
    /**
     * Get ParticipantActivities value
     * @return \ArrayType\EwsNonEmptyArrayOfParticipantActivities|null
     */
    public function getParticipantActivities(): ?\ArrayType\EwsNonEmptyArrayOfParticipantActivities
    {
        return $this->ParticipantActivities;
    }
    /**
     * Set ParticipantActivities value
     * @param \ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivities
     * @return \StructType\EwsMeetingInstanceType
     */
    public function setParticipantActivities(?\ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivities = null): self
    {
        $this->ParticipantActivities = $participantActivities;
        
        return $this;
    }
    /**
     * Get ContentActivities value
     * @return \ArrayType\EwsNonEmptyArrayOfContentActivities|null
     */
    public function getContentActivities(): ?\ArrayType\EwsNonEmptyArrayOfContentActivities
    {
        return $this->ContentActivities;
    }
    /**
     * Set ContentActivities value
     * @param \ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivities
     * @return \StructType\EwsMeetingInstanceType
     */
    public function setContentActivities(?\ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivities = null): self
    {
        $this->ContentActivities = $contentActivities;
        
        return $this;
    }
}
