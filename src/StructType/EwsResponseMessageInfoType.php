<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ResponseClass;
    /**
     * The MessageText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MessageText;
    /**
     * The ResponseCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ResponseCode;
    /**
     * Constructor method for ResponseMessageInfoType
     * @uses EwsResponseMessageInfoType::setResponseClass()
     * @uses EwsResponseMessageInfoType::setMessageText()
     * @uses EwsResponseMessageInfoType::setResponseCode()
     * @param string $responseClass
     * @param string $messageText
     * @param string $responseCode
     */
    public function __construct($responseClass = null, $messageText = null, $responseCode = null)
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
    public function getResponseClass()
    {
        return $this->ResponseClass;
    }
    /**
     * Set ResponseClass value
     * @uses \Ews\EnumType\EwsResponseClassType::valueIsValid()
     * @uses \Ews\EnumType\EwsResponseClassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $responseClass
     * @return \Ews\StructType\EwsResponseMessageInfoType
     */
    public function setResponseClass($responseClass = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsResponseClassType::valueIsValid($responseClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $responseClass, implode(', ', \Ews\EnumType\EwsResponseClassType::getValidValues())), __LINE__);
        }
        $this->ResponseClass = $responseClass;
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
     * @return \Ews\StructType\EwsResponseMessageInfoType
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
     * Get ResponseCode value
     * @return string|null
     */
    public function getResponseCode()
    {
        return $this->ResponseCode;
    }
    /**
     * Set ResponseCode value
     * @param string $responseCode
     * @return \Ews\StructType\EwsResponseMessageInfoType
     */
    public function setResponseCode($responseCode = null)
    {
        // validation for constraint: string
        if (!is_null($responseCode) && !is_string($responseCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseCode)), __LINE__);
        }
        $this->ResponseCode = $responseCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsResponseMessageInfoType
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
