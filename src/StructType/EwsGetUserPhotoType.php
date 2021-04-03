<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $Email;
    /**
     * The SizeRequested
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SizeRequested;
    /**
     * Constructor method for GetUserPhotoType
     * @uses EwsGetUserPhotoType::setEmail()
     * @uses EwsGetUserPhotoType::setSizeRequested()
     * @param string $email
     * @param string $sizeRequested
     */
    public function __construct(string $email, string $sizeRequested)
    {
        $this
            ->setEmail($email)
            ->setSizeRequested($sizeRequested);
    }
    /**
     * Get Email value
     * @return string
     */
    public function getEmail(): string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\EwsGetUserPhotoType
     */
    public function setEmail(string $email): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get SizeRequested value
     * @return string
     */
    public function getSizeRequested(): string
    {
        return $this->SizeRequested;
    }
    /**
     * Set SizeRequested value
     * @uses \EnumType\EwsUserPhotoSizeType::valueIsValid()
     * @uses \EnumType\EwsUserPhotoSizeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sizeRequested
     * @return \StructType\EwsGetUserPhotoType
     */
    public function setSizeRequested(string $sizeRequested): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUserPhotoSizeType::valueIsValid($sizeRequested)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUserPhotoSizeType', is_array($sizeRequested) ? implode(', ', $sizeRequested) : var_export($sizeRequested, true), implode(', ', \EnumType\EwsUserPhotoSizeType::getValidValues())), __LINE__);
        }
        $this->SizeRequested = $sizeRequested;
        
        return $this;
    }
}
