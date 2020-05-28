<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceAttachmentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReferenceAttachmentType extends EwsAttachmentType
{
    /**
     * The AttachLongPathName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachLongPathName;
    /**
     * The ProviderType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProviderType;
    /**
     * The ProviderEndpointUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProviderEndpointUrl;
    /**
     * The AttachmentThumbnailUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentThumbnailUrl;
    /**
     * The AttachmentPreviewUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentPreviewUrl;
    /**
     * The PermissionType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $PermissionType;
    /**
     * The AttachmentIsFolder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $AttachmentIsFolder;
    /**
     * Constructor method for ReferenceAttachmentType
     * @uses EwsReferenceAttachmentType::setAttachLongPathName()
     * @uses EwsReferenceAttachmentType::setProviderType()
     * @uses EwsReferenceAttachmentType::setProviderEndpointUrl()
     * @uses EwsReferenceAttachmentType::setAttachmentThumbnailUrl()
     * @uses EwsReferenceAttachmentType::setAttachmentPreviewUrl()
     * @uses EwsReferenceAttachmentType::setPermissionType()
     * @uses EwsReferenceAttachmentType::setAttachmentIsFolder()
     * @param string $attachLongPathName
     * @param string $providerType
     * @param string $providerEndpointUrl
     * @param string $attachmentThumbnailUrl
     * @param string $attachmentPreviewUrl
     * @param int $permissionType
     * @param bool $attachmentIsFolder
     */
    public function __construct($attachLongPathName = null, $providerType = null, $providerEndpointUrl = null, $attachmentThumbnailUrl = null, $attachmentPreviewUrl = null, $permissionType = null, $attachmentIsFolder = null)
    {
        $this
            ->setAttachLongPathName($attachLongPathName)
            ->setProviderType($providerType)
            ->setProviderEndpointUrl($providerEndpointUrl)
            ->setAttachmentThumbnailUrl($attachmentThumbnailUrl)
            ->setAttachmentPreviewUrl($attachmentPreviewUrl)
            ->setPermissionType($permissionType)
            ->setAttachmentIsFolder($attachmentIsFolder);
    }
    /**
     * Get AttachLongPathName value
     * @return string|null
     */
    public function getAttachLongPathName()
    {
        return $this->AttachLongPathName;
    }
    /**
     * Set AttachLongPathName value
     * @param string $attachLongPathName
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setAttachLongPathName($attachLongPathName = null)
    {
        // validation for constraint: string
        if (!is_null($attachLongPathName) && !is_string($attachLongPathName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attachLongPathName, true), gettype($attachLongPathName)), __LINE__);
        }
        $this->AttachLongPathName = $attachLongPathName;
        return $this;
    }
    /**
     * Get ProviderType value
     * @return string|null
     */
    public function getProviderType()
    {
        return $this->ProviderType;
    }
    /**
     * Set ProviderType value
     * @param string $providerType
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setProviderType($providerType = null)
    {
        // validation for constraint: string
        if (!is_null($providerType) && !is_string($providerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerType, true), gettype($providerType)), __LINE__);
        }
        $this->ProviderType = $providerType;
        return $this;
    }
    /**
     * Get ProviderEndpointUrl value
     * @return string|null
     */
    public function getProviderEndpointUrl()
    {
        return $this->ProviderEndpointUrl;
    }
    /**
     * Set ProviderEndpointUrl value
     * @param string $providerEndpointUrl
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setProviderEndpointUrl($providerEndpointUrl = null)
    {
        // validation for constraint: string
        if (!is_null($providerEndpointUrl) && !is_string($providerEndpointUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerEndpointUrl, true), gettype($providerEndpointUrl)), __LINE__);
        }
        $this->ProviderEndpointUrl = $providerEndpointUrl;
        return $this;
    }
    /**
     * Get AttachmentThumbnailUrl value
     * @return string|null
     */
    public function getAttachmentThumbnailUrl()
    {
        return $this->AttachmentThumbnailUrl;
    }
    /**
     * Set AttachmentThumbnailUrl value
     * @param string $attachmentThumbnailUrl
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setAttachmentThumbnailUrl($attachmentThumbnailUrl = null)
    {
        // validation for constraint: string
        if (!is_null($attachmentThumbnailUrl) && !is_string($attachmentThumbnailUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attachmentThumbnailUrl, true), gettype($attachmentThumbnailUrl)), __LINE__);
        }
        $this->AttachmentThumbnailUrl = $attachmentThumbnailUrl;
        return $this;
    }
    /**
     * Get AttachmentPreviewUrl value
     * @return string|null
     */
    public function getAttachmentPreviewUrl()
    {
        return $this->AttachmentPreviewUrl;
    }
    /**
     * Set AttachmentPreviewUrl value
     * @param string $attachmentPreviewUrl
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setAttachmentPreviewUrl($attachmentPreviewUrl = null)
    {
        // validation for constraint: string
        if (!is_null($attachmentPreviewUrl) && !is_string($attachmentPreviewUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attachmentPreviewUrl, true), gettype($attachmentPreviewUrl)), __LINE__);
        }
        $this->AttachmentPreviewUrl = $attachmentPreviewUrl;
        return $this;
    }
    /**
     * Get PermissionType value
     * @return int|null
     */
    public function getPermissionType()
    {
        return $this->PermissionType;
    }
    /**
     * Set PermissionType value
     * @param int $permissionType
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setPermissionType($permissionType = null)
    {
        // validation for constraint: int
        if (!is_null($permissionType) && !(is_int($permissionType) || ctype_digit($permissionType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($permissionType, true), gettype($permissionType)), __LINE__);
        }
        $this->PermissionType = $permissionType;
        return $this;
    }
    /**
     * Get AttachmentIsFolder value
     * @return bool|null
     */
    public function getAttachmentIsFolder()
    {
        return $this->AttachmentIsFolder;
    }
    /**
     * Set AttachmentIsFolder value
     * @param bool $attachmentIsFolder
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setAttachmentIsFolder($attachmentIsFolder = null)
    {
        // validation for constraint: boolean
        if (!is_null($attachmentIsFolder) && !is_bool($attachmentIsFolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($attachmentIsFolder, true), gettype($attachmentIsFolder)), __LINE__);
        }
        $this->AttachmentIsFolder = $attachmentIsFolder;
        return $this;
    }
}
