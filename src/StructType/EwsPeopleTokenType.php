<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeopleTokenType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPeopleTokenType extends AbstractStructBase
{
    /**
     * The TokenSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TokenSource;
    /**
     * The ExpirationDateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDateTime;
    /**
     * The TokenValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenValue;
    /**
     * Constructor method for PeopleTokenType
     * @uses EwsPeopleTokenType::setTokenSource()
     * @uses EwsPeopleTokenType::setExpirationDateTime()
     * @uses EwsPeopleTokenType::setTokenValue()
     * @param string $tokenSource
     * @param string $expirationDateTime
     * @param string $tokenValue
     */
    public function __construct($tokenSource = null, $expirationDateTime = null, $tokenValue = null)
    {
        $this
            ->setTokenSource($tokenSource)
            ->setExpirationDateTime($expirationDateTime)
            ->setTokenValue($tokenValue);
    }
    /**
     * Get TokenSource value
     * @return string
     */
    public function getTokenSource()
    {
        return $this->TokenSource;
    }
    /**
     * Set TokenSource value
     * @uses \Ews\EnumType\EwsTokenSourceType::valueIsValid()
     * @uses \Ews\EnumType\EwsTokenSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tokenSource
     * @return \Ews\StructType\EwsPeopleTokenType
     */
    public function setTokenSource($tokenSource = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsTokenSourceType::valueIsValid($tokenSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tokenSource, implode(', ', \Ews\EnumType\EwsTokenSourceType::getValidValues())), __LINE__);
        }
        $this->TokenSource = $tokenSource;
        return $this;
    }
    /**
     * Get ExpirationDateTime value
     * @return string|null
     */
    public function getExpirationDateTime()
    {
        return $this->ExpirationDateTime;
    }
    /**
     * Set ExpirationDateTime value
     * @param string $expirationDateTime
     * @return \Ews\StructType\EwsPeopleTokenType
     */
    public function setExpirationDateTime($expirationDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDateTime) && !is_string($expirationDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDateTime)), __LINE__);
        }
        $this->ExpirationDateTime = $expirationDateTime;
        return $this;
    }
    /**
     * Get TokenValue value
     * @return string|null
     */
    public function getTokenValue()
    {
        return $this->TokenValue;
    }
    /**
     * Set TokenValue value
     * @param string $tokenValue
     * @return \Ews\StructType\EwsPeopleTokenType
     */
    public function setTokenValue($tokenValue = null)
    {
        // validation for constraint: string
        if (!is_null($tokenValue) && !is_string($tokenValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenValue)), __LINE__);
        }
        $this->TokenValue = $tokenValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPeopleTokenType
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
