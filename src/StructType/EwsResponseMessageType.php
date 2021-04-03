<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResponseMessageType extends AbstractStructBase
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
     * The DescriptiveLinkKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DescriptiveLinkKey = null;
    /**
     * The MessageXml
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsMessageXml|null
     */
    protected ?\StructType\EwsMessageXml $MessageXml = null;
    /**
     * Constructor method for ResponseMessageType
     * @uses EwsResponseMessageType::setResponseClass()
     * @uses EwsResponseMessageType::setMessageText()
     * @uses EwsResponseMessageType::setResponseCode()
     * @uses EwsResponseMessageType::setDescriptiveLinkKey()
     * @uses EwsResponseMessageType::setMessageXml()
     * @param string $responseClass
     * @param string $messageText
     * @param string $responseCode
     * @param int $descriptiveLinkKey
     * @param \StructType\EwsMessageXml $messageXml
     */
    public function __construct(string $responseClass, ?string $messageText = null, ?string $responseCode = null, ?int $descriptiveLinkKey = null, ?\StructType\EwsMessageXml $messageXml = null)
    {
        $this
            ->setResponseClass($responseClass)
            ->setMessageText($messageText)
            ->setResponseCode($responseCode)
            ->setDescriptiveLinkKey($descriptiveLinkKey)
            ->setMessageXml($messageXml);
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
     * @return \StructType\EwsResponseMessageType
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
     * @return \StructType\EwsResponseMessageType
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
     * @uses \EnumType\EwsResponseCodeType::valueIsValid()
     * @uses \EnumType\EwsResponseCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $responseCode
     * @return \StructType\EwsResponseMessageType
     */
    public function setResponseCode(?string $responseCode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsResponseCodeType::valueIsValid($responseCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsResponseCodeType', is_array($responseCode) ? implode(', ', $responseCode) : var_export($responseCode, true), implode(', ', \EnumType\EwsResponseCodeType::getValidValues())), __LINE__);
        }
        $this->ResponseCode = $responseCode;
        
        return $this;
    }
    /**
     * Get DescriptiveLinkKey value
     * @return int|null
     */
    public function getDescriptiveLinkKey(): ?int
    {
        return $this->DescriptiveLinkKey;
    }
    /**
     * Set DescriptiveLinkKey value
     * @param int $descriptiveLinkKey
     * @return \StructType\EwsResponseMessageType
     */
    public function setDescriptiveLinkKey(?int $descriptiveLinkKey = null): self
    {
        // validation for constraint: int
        if (!is_null($descriptiveLinkKey) && !(is_int($descriptiveLinkKey) || ctype_digit($descriptiveLinkKey))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($descriptiveLinkKey, true), gettype($descriptiveLinkKey)), __LINE__);
        }
        $this->DescriptiveLinkKey = $descriptiveLinkKey;
        
        return $this;
    }
    /**
     * Get MessageXml value
     * @return \StructType\EwsMessageXml|null
     */
    public function getMessageXml(): ?\StructType\EwsMessageXml
    {
        return $this->MessageXml;
    }
    /**
     * Set MessageXml value
     * @param \StructType\EwsMessageXml $messageXml
     * @return \StructType\EwsResponseMessageType
     */
    public function setMessageXml(?\StructType\EwsMessageXml $messageXml = null): self
    {
        $this->MessageXml = $messageXml;
        
        return $this;
    }
}
