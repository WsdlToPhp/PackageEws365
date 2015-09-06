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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Blob;
    /**
     * The PhotoSize
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PhotoSize;
    /**
     * The Url
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Url;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
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
        $this->ImageType = $imageType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUserProfilePicture
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
