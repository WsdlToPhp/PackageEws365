<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserProfilePicture StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserProfilePicture extends EwsInsightValue
{
    /**
     * The Blob
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Blob = null;
    /**
     * The PhotoSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhotoSize = null;
    /**
     * The Url
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Url = null;
    /**
     * The ImageType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImageType = null;
    /**
     * Constructor method for UserProfilePicture
     * @uses EwsUserProfilePicture::setBlob()
     * @uses EwsUserProfilePicture::setPhotoSize()
     * @uses EwsUserProfilePicture::setUrl()
     * @uses EwsUserProfilePicture::setImageType()
     * @param string $blob
     * @param string $photoSize
     * @param string $url
     * @param string $imageType
     */
    public function __construct(?string $blob = null, ?string $photoSize = null, ?string $url = null, ?string $imageType = null)
    {
        $this
            ->setBlob($blob)
            ->setPhotoSize($photoSize)
            ->setUrl($url)
            ->setImageType($imageType);
    }
    /**
     * Get Blob value
     * @return string|null
     */
    public function getBlob(): ?string
    {
        return $this->Blob;
    }
    /**
     * Set Blob value
     * @param string $blob
     * @return \StructType\EwsUserProfilePicture
     */
    public function setBlob(?string $blob = null): self
    {
        // validation for constraint: string
        if (!is_null($blob) && !is_string($blob)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($blob, true), gettype($blob)), __LINE__);
        }
        $this->Blob = $blob;
        
        return $this;
    }
    /**
     * Get PhotoSize value
     * @return string|null
     */
    public function getPhotoSize(): ?string
    {
        return $this->PhotoSize;
    }
    /**
     * Set PhotoSize value
     * @param string $photoSize
     * @return \StructType\EwsUserProfilePicture
     */
    public function setPhotoSize(?string $photoSize = null): self
    {
        // validation for constraint: string
        if (!is_null($photoSize) && !is_string($photoSize)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($photoSize, true), gettype($photoSize)), __LINE__);
        }
        $this->PhotoSize = $photoSize;
        
        return $this;
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $url
     * @return \StructType\EwsUserProfilePicture
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->Url = $url;
        
        return $this;
    }
    /**
     * Get ImageType value
     * @return string|null
     */
    public function getImageType(): ?string
    {
        return $this->ImageType;
    }
    /**
     * Set ImageType value
     * @param string $imageType
     * @return \StructType\EwsUserProfilePicture
     */
    public function setImageType(?string $imageType = null): self
    {
        // validation for constraint: string
        if (!is_null($imageType) && !is_string($imageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageType, true), gettype($imageType)), __LINE__);
        }
        $this->ImageType = $imageType;
        
        return $this;
    }
}
