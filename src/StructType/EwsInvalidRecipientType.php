<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $SmtpAddress;
    /**
     * The ResponseCode
     * @var string
     */
    public $ResponseCode;
    /**
     * The MessageText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MessageText;
    /**
     * Constructor method for InvalidRecipientType
     * @uses EwsInvalidRecipientType::setSmtpAddress()
     * @uses EwsInvalidRecipientType::setResponseCode()
     * @uses EwsInvalidRecipientType::setMessageText()
     * @param string $smtpAddress
     * @param string $responseCode
     * @param string $messageText
     */
    public function __construct($smtpAddress = null, $responseCode = null, $messageText = null)
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
    public function getSmtpAddress()
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \Ews\StructType\EwsInvalidRecipientType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($smtpAddress) && mb_strlen($smtpAddress) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
    /**
     * Get ResponseCode value
     * @return string|null
     */
    public function getResponseCode()
    {
        return $this->ResponseCode;
    }
    /**
     * Set ResponseCode value
     * @uses \Ews\EnumType\EwsInvalidRecipientResponseCodeType::valueIsValid()
     * @uses \Ews\EnumType\EwsInvalidRecipientResponseCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $responseCode
     * @return \Ews\StructType\EwsInvalidRecipientType
     */
    public function setResponseCode($responseCode = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsInvalidRecipientResponseCodeType::valueIsValid($responseCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsInvalidRecipientResponseCodeType', is_array($responseCode) ? implode(', ', $responseCode) : var_export($responseCode, true), implode(', ', \Ews\EnumType\EwsInvalidRecipientResponseCodeType::getValidValues())), __LINE__);
        }
        $this->ResponseCode = $responseCode;
        return $this;
    }
    /**
     * Get MessageText value
     * @return string|null
     */
    public function getMessageText()
    {
        return $this->MessageText;
    }
    /**
     * Set MessageText value
     * @param string $messageText
     * @return \Ews\StructType\EwsInvalidRecipientType
     */
    public function setMessageText($messageText = null)
    {
        // validation for constraint: string
        if (!is_null($messageText) && !is_string($messageText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageText, true), gettype($messageText)), __LINE__);
        }
        $this->MessageText = $messageText;
        return $this;
    }
}
