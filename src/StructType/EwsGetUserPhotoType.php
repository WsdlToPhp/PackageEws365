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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Email;
    /**
     * The SizeRequested
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
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
     * @throws \InvalidArgumentException
     * @param string $sizeRequested
     * @return \Ews\StructType\EwsGetUserPhotoType
     */
    public function setSizeRequested($sizeRequested = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUserPhotoSizeType::valueIsValid($sizeRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUserPhotoSizeType', is_array($sizeRequested) ? implode(', ', $sizeRequested) : var_export($sizeRequested, true), implode(', ', \Ews\EnumType\EwsUserPhotoSizeType::getValidValues())), __LINE__);
        }
        $this->SizeRequested = $sizeRequested;
        return $this;
    }
}
