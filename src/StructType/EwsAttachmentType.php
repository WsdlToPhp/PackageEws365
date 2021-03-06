<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsAttachmentIdType
     */
    public $AttachmentId;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ContentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContentType;
    /**
     * The ContentId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContentId;
    /**
     * The ContentLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContentLocation;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Size;
    /**
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedTime;
    /**
     * The IsInline
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsInline;
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
     * @param \Ews\StructType\EwsAttachmentIdType $attachmentId
     * @param string $name
     * @param string $contentType
     * @param string $contentId
     * @param string $contentLocation
     * @param int $size
     * @param string $lastModifiedTime
     * @param bool $isInline
     */
    public function __construct(\Ews\StructType\EwsAttachmentIdType $attachmentId = null, $name = null, $contentType = null, $contentId = null, $contentLocation = null, $size = null, $lastModifiedTime = null, $isInline = null)
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
     * @return \Ews\StructType\EwsAttachmentIdType|null
     */
    public function getAttachmentId()
    {
        return $this->AttachmentId;
    }
    /**
     * Set AttachmentId value
     * @param \Ews\StructType\EwsAttachmentIdType $attachmentId
     * @return \Ews\StructType\EwsAttachmentType
     */
    public function setAttachmentId(\Ews\StructType\EwsAttachmentIdType $attachmentId = null)
    {
        $this->AttachmentId = $attachmentId;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsAttachmentType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ContentType value
     * @return string|null
     */
    public function getContentType()
    {
        return $this->ContentType;
    }
    /**
     * Set ContentType value
     * @param string $contentType
     * @return \Ews\StructType\EwsAttachmentType
     */
    public function setContentType($contentType = null)
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->ContentType = $contentType;
        return $this;
    }
    /**
     * Get ContentId value
     * @return string|null
     */
    public function getContentId()
    {
        return $this->ContentId;
    }
    /**
     * Set ContentId value
     * @param string $contentId
     * @return \Ews\StructType\EwsAttachmentType
     */
    public function setContentId($contentId = null)
    {
        // validation for constraint: string
        if (!is_null($contentId) && !is_string($contentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentId, true), gettype($contentId)), __LINE__);
        }
        $this->ContentId = $contentId;
        return $this;
    }
    /**
     * Get ContentLocation value
     * @return string|null
     */
    public function getContentLocation()
    {
        return $this->ContentLocation;
    }
    /**
     * Set ContentLocation value
     * @param string $contentLocation
     * @return \Ews\StructType\EwsAttachmentType
     */
    public function setContentLocation($contentLocation = null)
    {
        // validation for constraint: string
        if (!is_null($contentLocation) && !is_string($contentLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentLocation, true), gettype($contentLocation)), __LINE__);
        }
        $this->ContentLocation = $contentLocation;
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \Ews\StructType\EwsAttachmentType
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Get LastModifiedTime value
     * @return string|null
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param string $lastModifiedTime
     * @return \Ews\StructType\EwsAttachmentType
     */
    public function setLastModifiedTime($lastModifiedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedTime) && !is_string($lastModifiedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedTime, true), gettype($lastModifiedTime)), __LINE__);
        }
        $this->LastModifiedTime = $lastModifiedTime;
        return $this;
    }
    /**
     * Get IsInline value
     * @return bool|null
     */
    public function getIsInline()
    {
        return $this->IsInline;
    }
    /**
     * Set IsInline value
     * @param bool $isInline
     * @return \Ews\StructType\EwsAttachmentType
     */
    public function setIsInline($isInline = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInline) && !is_bool($isInline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInline, true), gettype($isInline)), __LINE__);
        }
        $this->IsInline = $isInline;
        return $this;
    }
}
