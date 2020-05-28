<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $Blob;
    /**
     * The PhotoSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PhotoSize;
    /**
     * The Url
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Url;
    /**
     * The ImageType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImageType;
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
    public function __construct($blob = null, $photoSize = null, $url = null, $imageType = null)
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
    public function getBlob()
    {
        return $this->Blob;
    }
    /**
     * Set Blob value
     * @param string $blob
     * @return \Ews\StructType\EwsUserProfilePicture
     */
    public function setBlob($blob = null)
    {
        // validation for constraint: string
        if (!is_null($blob) && !is_string($blob)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($blob, true), gettype($blob)), __LINE__);
        }
        $this->Blob = $blob;
        return $this;
    }
    /**
     * Get PhotoSize value
     * @return string|null
     */
    public function getPhotoSize()
    {
        return $this->PhotoSize;
    }
    /**
     * Set PhotoSize value
     * @param string $photoSize
     * @return \Ews\StructType\EwsUserProfilePicture
     */
    public function setPhotoSize($photoSize = null)
    {
        // validation for constraint: string
        if (!is_null($photoSize) && !is_string($photoSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($photoSize, true), gettype($photoSize)), __LINE__);
        }
        $this->PhotoSize = $photoSize;
        return $this;
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $url
     * @return \Ews\StructType\EwsUserProfilePicture
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->Url = $url;
        return $this;
    }
    /**
     * Get ImageType value
     * @return string|null
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    /**
     * Set ImageType value
     * @param string $imageType
     * @return \Ews\StructType\EwsUserProfilePicture
     */
    public function setImageType($imageType = null)
    {
        // validation for constraint: string
        if (!is_null($imageType) && !is_string($imageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageType, true), gettype($imageType)), __LINE__);
        }
        $this->ImageType = $imageType;
        return $this;
    }
}
