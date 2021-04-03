<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingSpaceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingSpaceType extends AbstractStructBase
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
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
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
     * The ExpiryTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpiryTime = null;
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
     * Constructor method for MeetingSpaceType
     * @uses EwsMeetingSpaceType::setId()
     * @uses EwsMeetingSpaceType::setChangeKey()
     * @uses EwsMeetingSpaceType::setType()
     * @uses EwsMeetingSpaceType::setVersion()
     * @uses EwsMeetingSpaceType::setJoinUrl()
     * @uses EwsMeetingSpaceType::setDateTimeCreated()
     * @uses EwsMeetingSpaceType::setDateTimeModified()
     * @uses EwsMeetingSpaceType::setExpiryTime()
     * @uses EwsMeetingSpaceType::setMeadata()
     * @uses EwsMeetingSpaceType::setTag()
     * @param string $id
     * @param string $changeKey
     * @param string $type
     * @param string $version
     * @param string $joinUrl
     * @param string $dateTimeCreated
     * @param string $dateTimeModified
     * @param string $expiryTime
     * @param string $meadata
     * @param string $tag
     */
    public function __construct(?string $id = null, ?string $changeKey = null, ?string $type = null, ?string $version = null, ?string $joinUrl = null, ?string $dateTimeCreated = null, ?string $dateTimeModified = null, ?string $expiryTime = null, ?string $meadata = null, ?string $tag = null)
    {
        $this
            ->setId($id)
            ->setChangeKey($changeKey)
            ->setType($type)
            ->setVersion($version)
            ->setJoinUrl($joinUrl)
            ->setDateTimeCreated($dateTimeCreated)
            ->setDateTimeModified($dateTimeModified)
            ->setExpiryTime($expiryTime)
            ->setMeadata($meadata)
            ->setTag($tag);
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
     * @return \StructType\EwsMeetingSpaceType
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
     * @return \StructType\EwsMeetingSpaceType
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
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\EwsMeetingSpaceTypeEnum::valueIsValid()
     * @uses \EnumType\EwsMeetingSpaceTypeEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\EwsMeetingSpaceType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMeetingSpaceTypeEnum::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMeetingSpaceTypeEnum', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EwsMeetingSpaceTypeEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
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
     * @return \StructType\EwsMeetingSpaceType
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
     * @return \StructType\EwsMeetingSpaceType
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
     * @return \StructType\EwsMeetingSpaceType
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
     * @return \StructType\EwsMeetingSpaceType
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
     * Get ExpiryTime value
     * @return string|null
     */
    public function getExpiryTime(): ?string
    {
        return $this->ExpiryTime;
    }
    /**
     * Set ExpiryTime value
     * @param string $expiryTime
     * @return \StructType\EwsMeetingSpaceType
     */
    public function setExpiryTime(?string $expiryTime = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryTime) && !is_string($expiryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryTime, true), gettype($expiryTime)), __LINE__);
        }
        $this->ExpiryTime = $expiryTime;
        
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
     * @return \StructType\EwsMeetingSpaceType
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
     * @return \StructType\EwsMeetingSpaceType
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
}
