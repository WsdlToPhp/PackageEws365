<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsAttachmentType extends AbstractStructBase
{
    /**
     * The AttachmentId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAttachmentIdType
     */
    public $AttachmentId;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ContentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContentType;
    /**
     * The ContentId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContentId;
    /**
     * The ContentLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContentLocation;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Size;
    /**
     * The LastModifiedTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $LastModifiedTime;
    /**
     * The IsInline
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
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
     * @param dateTime $lastModifiedTime
     * @param boolean $isInline
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
        $this->Size = $size;
        return $this;
    }
    /**
     * Get LastModifiedTime value
     * @return dateTime|null
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param dateTime $lastModifiedTime
     * @return \Ews\StructType\EwsAttachmentType
     */
    public function setLastModifiedTime($lastModifiedTime = null)
    {
        $this->LastModifiedTime = $lastModifiedTime;
        return $this;
    }
    /**
     * Get IsInline value
     * @return boolean|null
     */
    public function getIsInline()
    {
        return $this->IsInline;
    }
    /**
     * Set IsInline value
     * @param boolean $isInline
     * @return \Ews\StructType\EwsAttachmentType
     */
    public function setIsInline($isInline = null)
    {
        $this->IsInline = $isInline;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAttachmentType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
