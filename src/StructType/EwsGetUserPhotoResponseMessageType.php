<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserPhotoResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserPhotoResponseMessageType extends EwsResponseMessageType
{
    /**
     * The HasChanged
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $HasChanged;
    /**
     * The PictureData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var base64Binary
     */
    public $PictureData;
    /**
     * Constructor method for GetUserPhotoResponseMessageType
     * @uses EwsGetUserPhotoResponseMessageType::setHasChanged()
     * @uses EwsGetUserPhotoResponseMessageType::setPictureData()
     * @param bool $hasChanged
     * @param base64Binary $pictureData
     */
    public function __construct($hasChanged = null, base64Binary $pictureData = null)
    {
        $this
            ->setHasChanged($hasChanged)
            ->setPictureData($pictureData);
    }
    /**
     * Get HasChanged value
     * @return bool
     */
    public function getHasChanged()
    {
        return $this->HasChanged;
    }
    /**
     * Set HasChanged value
     * @param bool $hasChanged
     * @return \Ews\StructType\EwsGetUserPhotoResponseMessageType
     */
    public function setHasChanged($hasChanged = null)
    {
        $this->HasChanged = $hasChanged;
        return $this;
    }
    /**
     * Get PictureData value
     * @return base64Binary|null
     */
    public function getPictureData()
    {
        return $this->PictureData;
    }
    /**
     * Set PictureData value
     * @param base64Binary $pictureData
     * @return \Ews\StructType\EwsGetUserPhotoResponseMessageType
     */
    public function setPictureData(base64Binary $pictureData = null)
    {
        $this->PictureData = $pictureData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUserPhotoResponseMessageType
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
