<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserPhotoType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserPhotoType extends EwsBaseRequestType
{
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Email;
    /**
     * The SizeRequested
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SizeRequested;
    /**
     * Constructor method for GetUserPhotoType
     * @uses EwsGetUserPhotoType::setEmail()
     * @uses EwsGetUserPhotoType::setSizeRequested()
     * @param string $email
     * @param string $sizeRequested
     */
    public function __construct($email = null, $sizeRequested = null)
    {
        $this
            ->setEmail($email)
            ->setSizeRequested($sizeRequested);
    }
    /**
     * Get Email value
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \Ews\StructType\EwsGetUserPhotoType
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get SizeRequested value
     * @return string
     */
    public function getSizeRequested()
    {
        return $this->SizeRequested;
    }
    /**
     * Set SizeRequested value
     * @uses \Ews\EnumType\EwsUserPhotoSizeType::valueIsValid()
     * @uses \Ews\EnumType\EwsUserPhotoSizeType::getValidValues()
     * @param string $sizeRequested
     * @return \Ews\StructType\EwsGetUserPhotoType
     */
    public function setSizeRequested($sizeRequested = null)
    {
        if (!\Ews\EnumType\EwsUserPhotoSizeType::valueIsValid($sizeRequested)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sizeRequested, implode(', ', \Ews\EnumType\EwsUserPhotoSizeType::getValidValues())), __LINE__);
        }
        $this->SizeRequested = $sizeRequested;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUserPhotoType
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
