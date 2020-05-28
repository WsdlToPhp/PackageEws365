<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientAccessTokenType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientAccessTokenType extends AbstractStructBase
{
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * The TokenType
     * @var string
     */
    public $TokenType;
    /**
     * The TokenValue
     * @var string
     */
    public $TokenValue;
    /**
     * The TTL
     * @var int
     */
    public $TTL;
    /**
     * Constructor method for ClientAccessTokenType
     * @uses EwsClientAccessTokenType::setId()
     * @uses EwsClientAccessTokenType::setTokenType()
     * @uses EwsClientAccessTokenType::setTokenValue()
     * @uses EwsClientAccessTokenType::setTTL()
     * @param string $id
     * @param string $tokenType
     * @param string $tokenValue
     * @param int $tTL
     */
    public function __construct($id = null, $tokenType = null, $tokenValue = null, $tTL = null)
    {
        $this
            ->setId($id)
            ->setTokenType($tokenType)
            ->setTokenValue($tokenValue)
            ->setTTL($tTL);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsClientAccessTokenType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get TokenType value
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->TokenType;
    }
    /**
     * Set TokenType value
     * @uses \Ews\EnumType\EwsClientAccessTokenTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsClientAccessTokenTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tokenType
     * @return \Ews\StructType\EwsClientAccessTokenType
     */
    public function setTokenType($tokenType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsClientAccessTokenTypeType::valueIsValid($tokenType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsClientAccessTokenTypeType', is_array($tokenType) ? implode(', ', $tokenType) : var_export($tokenType, true), implode(', ', \Ews\EnumType\EwsClientAccessTokenTypeType::getValidValues())), __LINE__);
        }
        $this->TokenType = $tokenType;
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
     * @return \Ews\StructType\EwsClientAccessTokenType
     */
    public function setTokenValue($tokenValue = null)
    {
        // validation for constraint: string
        if (!is_null($tokenValue) && !is_string($tokenValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenValue, true), gettype($tokenValue)), __LINE__);
        }
        $this->TokenValue = $tokenValue;
        return $this;
    }
    /**
     * Get TTL value
     * @return int|null
     */
    public function getTTL()
    {
        return $this->TTL;
    }
    /**
     * Set TTL value
     * @param int $tTL
     * @return \Ews\StructType\EwsClientAccessTokenType
     */
    public function setTTL($tTL = null)
    {
        // validation for constraint: int
        if (!is_null($tTL) && !(is_int($tTL) || ctype_digit($tTL))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tTL, true), gettype($tTL)), __LINE__);
        }
        $this->TTL = $tTL;
        return $this;
    }
}
