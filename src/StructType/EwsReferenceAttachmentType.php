<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $AttachLongPathName = null;
    /**
     * The ProviderType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProviderType = null;
    /**
     * The ProviderEndpointUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProviderEndpointUrl = null;
    /**
     * The AttachmentThumbnailUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AttachmentThumbnailUrl = null;
    /**
     * The AttachmentPreviewUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AttachmentPreviewUrl = null;
    /**
     * The PermissionType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PermissionType = null;
    /**
     * The AttachmentIsFolder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AttachmentIsFolder = null;
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
    public function __construct(?string $attachLongPathName = null, ?string $providerType = null, ?string $providerEndpointUrl = null, ?string $attachmentThumbnailUrl = null, ?string $attachmentPreviewUrl = null, ?int $permissionType = null, ?bool $attachmentIsFolder = null)
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
    public function getAttachLongPathName(): ?string
    {
        return $this->AttachLongPathName;
    }
    /**
     * Set AttachLongPathName value
     * @param string $attachLongPathName
     * @return \StructType\EwsReferenceAttachmentType
     */
    public function setAttachLongPathName(?string $attachLongPathName = null): self
    {
        // validation for constraint: string
        if (!is_null($attachLongPathName) && !is_string($attachLongPathName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attachLongPathName, true), gettype($attachLongPathName)), __LINE__);
        }
        $this->AttachLongPathName = $attachLongPathName;
        
        return $this;
    }
    /**
     * Get ProviderType value
     * @return string|null
     */
    public function getProviderType(): ?string
    {
        return $this->ProviderType;
    }
    /**
     * Set ProviderType value
     * @param string $providerType
     * @return \StructType\EwsReferenceAttachmentType
     */
    public function setProviderType(?string $providerType = null): self
    {
        // validation for constraint: string
        if (!is_null($providerType) && !is_string($providerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerType, true), gettype($providerType)), __LINE__);
        }
        $this->ProviderType = $providerType;
        
        return $this;
    }
    /**
     * Get ProviderEndpointUrl value
     * @return string|null
     */
    public function getProviderEndpointUrl(): ?string
    {
        return $this->ProviderEndpointUrl;
    }
    /**
     * Set ProviderEndpointUrl value
     * @param string $providerEndpointUrl
     * @return \StructType\EwsReferenceAttachmentType
     */
    public function setProviderEndpointUrl(?string $providerEndpointUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($providerEndpointUrl) && !is_string($providerEndpointUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerEndpointUrl, true), gettype($providerEndpointUrl)), __LINE__);
        }
        $this->ProviderEndpointUrl = $providerEndpointUrl;
        
        return $this;
    }
    /**
     * Get AttachmentThumbnailUrl value
     * @return string|null
     */
    public function getAttachmentThumbnailUrl(): ?string
    {
        return $this->AttachmentThumbnailUrl;
    }
    /**
     * Set AttachmentThumbnailUrl value
     * @param string $attachmentThumbnailUrl
     * @return \StructType\EwsReferenceAttachmentType
     */
    public function setAttachmentThumbnailUrl(?string $attachmentThumbnailUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($attachmentThumbnailUrl) && !is_string($attachmentThumbnailUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attachmentThumbnailUrl, true), gettype($attachmentThumbnailUrl)), __LINE__);
        }
        $this->AttachmentThumbnailUrl = $attachmentThumbnailUrl;
        
        return $this;
    }
    /**
     * Get AttachmentPreviewUrl value
     * @return string|null
     */
    public function getAttachmentPreviewUrl(): ?string
    {
        return $this->AttachmentPreviewUrl;
    }
    /**
     * Set AttachmentPreviewUrl value
     * @param string $attachmentPreviewUrl
     * @return \StructType\EwsReferenceAttachmentType
     */
    public function setAttachmentPreviewUrl(?string $attachmentPreviewUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($attachmentPreviewUrl) && !is_string($attachmentPreviewUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attachmentPreviewUrl, true), gettype($attachmentPreviewUrl)), __LINE__);
        }
        $this->AttachmentPreviewUrl = $attachmentPreviewUrl;
        
        return $this;
    }
    /**
     * Get PermissionType value
     * @return int|null
     */
    public function getPermissionType(): ?int
    {
        return $this->PermissionType;
    }
    /**
     * Set PermissionType value
     * @param int $permissionType
     * @return \StructType\EwsReferenceAttachmentType
     */
    public function setPermissionType(?int $permissionType = null): self
    {
        // validation for constraint: int
        if (!is_null($permissionType) && !(is_int($permissionType) || ctype_digit($permissionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($permissionType, true), gettype($permissionType)), __LINE__);
        }
        $this->PermissionType = $permissionType;
        
        return $this;
    }
    /**
     * Get AttachmentIsFolder value
     * @return bool|null
     */
    public function getAttachmentIsFolder(): ?bool
    {
        return $this->AttachmentIsFolder;
    }
    /**
     * Set AttachmentIsFolder value
     * @param bool $attachmentIsFolder
     * @return \StructType\EwsReferenceAttachmentType
     */
    public function setAttachmentIsFolder(?bool $attachmentIsFolder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($attachmentIsFolder) && !is_bool($attachmentIsFolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($attachmentIsFolder, true), gettype($attachmentIsFolder)), __LINE__);
        }
        $this->AttachmentIsFolder = $attachmentIsFolder;
        
        return $this;
    }
}
