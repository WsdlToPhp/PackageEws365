<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseMessageInfoType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResponseMessageInfoType extends AbstractStructBase
{
    /**
     * The ResponseClass
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ResponseClass;
    /**
     * The MessageText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageText = null;
    /**
     * The ResponseCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResponseCode = null;
    /**
     * Constructor method for ResponseMessageInfoType
     * @uses EwsResponseMessageInfoType::setResponseClass()
     * @uses EwsResponseMessageInfoType::setMessageText()
     * @uses EwsResponseMessageInfoType::setResponseCode()
     * @param string $responseClass
     * @param string $messageText
     * @param string $responseCode
     */
    public function __construct(string $responseClass, ?string $messageText = null, ?string $responseCode = null)
    {
        $this
            ->setResponseClass($responseClass)
            ->setMessageText($messageText)
            ->setResponseCode($responseCode);
    }
    /**
     * Get ResponseClass value
     * @return string
     */
    public function getResponseClass(): string
    {
        return $this->ResponseClass;
    }
    /**
     * Set ResponseClass value
     * @uses \EnumType\EwsResponseClassType::valueIsValid()
     * @uses \EnumType\EwsResponseClassType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $responseClass
     * @return \StructType\EwsResponseMessageInfoType
     */
    public function setResponseClass(string $responseClass): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsResponseClassType::valueIsValid($responseClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsResponseClassType', is_array($responseClass) ? implode(', ', $responseClass) : var_export($responseClass, true), implode(', ', \EnumType\EwsResponseClassType::getValidValues())), __LINE__);
        }
        $this->ResponseClass = $responseClass;
        
        return $this;
    }
    /**
     * Get MessageText value
     * @return string|null
     */
    public function getMessageText(): ?string
    {
        return $this->MessageText;
    }
    /**
     * Set MessageText value
     * @param string $messageText
     * @return \StructType\EwsResponseMessageInfoType
     */
    public function setMessageText(?string $messageText = null): self
    {
        // validation for constraint: string
        if (!is_null($messageText) && !is_string($messageText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageText, true), gettype($messageText)), __LINE__);
        }
        $this->MessageText = $messageText;
        
        return $this;
    }
    /**
     * Get ResponseCode value
     * @return string|null
     */
    public function getResponseCode(): ?string
    {
        return $this->ResponseCode;
    }
    /**
     * Set ResponseCode value
     * @param string $responseCode
     * @return \StructType\EwsResponseMessageInfoType
     */
    public function setResponseCode(?string $responseCode = null): self
    {
        // validation for constraint: string
        if (!is_null($responseCode) && !is_string($responseCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseCode, true), gettype($responseCode)), __LINE__);
        }
        $this->ResponseCode = $responseCode;
        
        return $this;
    }
}
