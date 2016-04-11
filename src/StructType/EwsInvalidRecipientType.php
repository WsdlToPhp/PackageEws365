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
     * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
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
        // validation for constraint: minLength
        if ((is_scalar($smtpAddress) && strlen($smtpAddress) < 1) || (is_array($smtpAddress) && count($smtpAddress) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smtpAddress)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $responseCode, implode(', ', \Ews\EnumType\EwsInvalidRecipientResponseCodeType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageText)), __LINE__);
        }
        $this->MessageText = $messageText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsInvalidRecipientType
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
