<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvalidRecipientType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInvalidRecipientType extends AbstractStructBase
{
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SmtpAddress = null;
    /**
     * The ResponseCode
     * @var string|null
     */
    protected ?string $ResponseCode = null;
    /**
     * The MessageText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageText = null;
    /**
     * Constructor method for InvalidRecipientType
     * @uses EwsInvalidRecipientType::setSmtpAddress()
     * @uses EwsInvalidRecipientType::setResponseCode()
     * @uses EwsInvalidRecipientType::setMessageText()
     * @param string $smtpAddress
     * @param string $responseCode
     * @param string $messageText
     */
    public function __construct(?string $smtpAddress = null, ?string $responseCode = null, ?string $messageText = null)
    {
        $this
            ->setSmtpAddress($smtpAddress)
            ->setResponseCode($responseCode)
            ->setMessageText($messageText);
    }
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress(): ?string
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \StructType\EwsInvalidRecipientType
     */
    public function setSmtpAddress(?string $smtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($smtpAddress) && mb_strlen((string) $smtpAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        
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
     * @uses \EnumType\EwsInvalidRecipientResponseCodeType::valueIsValid()
     * @uses \EnumType\EwsInvalidRecipientResponseCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $responseCode
     * @return \StructType\EwsInvalidRecipientType
     */
    public function setResponseCode(?string $responseCode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsInvalidRecipientResponseCodeType::valueIsValid($responseCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsInvalidRecipientResponseCodeType', is_array($responseCode) ? implode(', ', $responseCode) : var_export($responseCode, true), implode(', ', \EnumType\EwsInvalidRecipientResponseCodeType::getValidValues())), __LINE__);
        }
        $this->ResponseCode = $responseCode;
        
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
     * @return \StructType\EwsInvalidRecipientType
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
}
