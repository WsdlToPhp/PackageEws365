<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAttachmentType extends AbstractStructBase
{
    /**
     * The AttachmentId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsAttachmentIdType|null
     */
    protected ?\StructType\EwsAttachmentIdType $AttachmentId = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ContentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContentType = null;
    /**
     * The ContentId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContentId = null;
    /**
     * The ContentLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContentLocation = null;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Size = null;
    /**
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastModifiedTime = null;
    /**
     * The IsInline
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsInline = null;
    /**
     * Constructor method for AttachmentType
     * @uses EwsAttachmentType::setAttachmentId()
     * @uses EwsAttachmentType::setName()
     * @uses EwsAttachmentType::setContentType()
     * @uses EwsAttachmentType::setContentId()
     * @uses EwsAttachmentType::setContentLocation()
     * @uses EwsAttachmentType::setSize()
     * @uses EwsAttachmentType::setLastModifiedTime()
     * @uses EwsAttachmentType::setIsInline()
     * @param \StructType\EwsAttachmentIdType $attachmentId
     * @param string $name
     * @param string $contentType
     * @param string $contentId
     * @param string $contentLocation
     * @param int $size
     * @param string $lastModifiedTime
     * @param bool $isInline
     */
    public function __construct(?\StructType\EwsAttachmentIdType $attachmentId = null, ?string $name = null, ?string $contentType = null, ?string $contentId = null, ?string $contentLocation = null, ?int $size = null, ?string $lastModifiedTime = null, ?bool $isInline = null)
    {
        $this
            ->setAttachmentId($attachmentId)
            ->setName($name)
            ->setContentType($contentType)
            ->setContentId($contentId)
            ->setContentLocation($contentLocation)
            ->setSize($size)
            ->setLastModifiedTime($lastModifiedTime)
            ->setIsInline($isInline);
    }
    /**
     * Get AttachmentId value
     * @return \StructType\EwsAttachmentIdType|null
     */
    public function getAttachmentId(): ?\StructType\EwsAttachmentIdType
    {
        return $this->AttachmentId;
    }
    /**
     * Set AttachmentId value
     * @param \StructType\EwsAttachmentIdType $attachmentId
     * @return \StructType\EwsAttachmentType
     */
    public function setAttachmentId(?\StructType\EwsAttachmentIdType $attachmentId = null): self
    {
        $this->AttachmentId = $attachmentId;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsAttachmentType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get ContentType value
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->ContentType;
    }
    /**
     * Set ContentType value
     * @param string $contentType
     * @return \StructType\EwsAttachmentType
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->ContentType = $contentType;
        
        return $this;
    }
    /**
     * Get ContentId value
     * @return string|null
     */
    public function getContentId(): ?string
    {
        return $this->ContentId;
    }
    /**
     * Set ContentId value
     * @param string $contentId
     * @return \StructType\EwsAttachmentType
     */
    public function setContentId(?string $contentId = null): self
    {
        // validation for constraint: string
        if (!is_null($contentId) && !is_string($contentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentId, true), gettype($contentId)), __LINE__);
        }
        $this->ContentId = $contentId;
        
        return $this;
    }
    /**
     * Get ContentLocation value
     * @return string|null
     */
    public function getContentLocation(): ?string
    {
        return $this->ContentLocation;
    }
    /**
     * Set ContentLocation value
     * @param string $contentLocation
     * @return \StructType\EwsAttachmentType
     */
    public function setContentLocation(?string $contentLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($contentLocation) && !is_string($contentLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentLocation, true), gettype($contentLocation)), __LINE__);
        }
        $this->ContentLocation = $contentLocation;
        
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \StructType\EwsAttachmentType
     */
    public function setSize(?int $size = null): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;
        
        return $this;
    }
    /**
     * Get LastModifiedTime value
     * @return string|null
     */
    public function getLastModifiedTime(): ?string
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param string $lastModifiedTime
     * @return \StructType\EwsAttachmentType
     */
    public function setLastModifiedTime(?string $lastModifiedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedTime) && !is_string($lastModifiedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedTime, true), gettype($lastModifiedTime)), __LINE__);
        }
        $this->LastModifiedTime = $lastModifiedTime;
        
        return $this;
    }
    /**
     * Get IsInline value
     * @return bool|null
     */
    public function getIsInline(): ?bool
    {
        return $this->IsInline;
    }
    /**
     * Set IsInline value
     * @param bool $isInline
     * @return \StructType\EwsAttachmentType
     */
    public function setIsInline(?bool $isInline = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInline) && !is_bool($isInline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInline, true), gettype($isInline)), __LINE__);
        }
        $this->IsInline = $isInline;
        
        return $this;
    }
}
