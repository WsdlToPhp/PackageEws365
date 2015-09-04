<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientAccessTokenType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
     * @var integer
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
     * @param integer $tTL
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
     * @param string $tokenType
     * @return \Ews\StructType\EwsClientAccessTokenType
     */
    public function setTokenType($tokenType = null)
    {
        if (!\Ews\EnumType\EwsClientAccessTokenTypeType::valueIsValid($tokenType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tokenType, implode(', ', \Ews\EnumType\EwsClientAccessTokenTypeType::getValidValues())), __LINE__);
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
        $this->TokenValue = $tokenValue;
        return $this;
    }
    /**
     * Get TTL value
     * @return integer|null
     */
    public function getTTL()
    {
        return $this->TTL;
    }
    /**
     * Set TTL value
     * @param integer $tTL
     * @return \Ews\StructType\EwsClientAccessTokenType
     */
    public function setTTL($tTL = null)
    {
        $this->TTL = $tTL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsClientAccessTokenType
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
