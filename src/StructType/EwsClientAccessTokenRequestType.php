<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientAccessTokenRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientAccessTokenRequestType extends AbstractStructBase
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
     * The Scope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Scope;
    /**
     * Constructor method for ClientAccessTokenRequestType
     * @uses EwsClientAccessTokenRequestType::setId()
     * @uses EwsClientAccessTokenRequestType::setTokenType()
     * @uses EwsClientAccessTokenRequestType::setScope()
     * @param string $id
     * @param string $tokenType
     * @param string $scope
     */
    public function __construct($id = null, $tokenType = null, $scope = null)
    {
        $this
            ->setId($id)
            ->setTokenType($tokenType)
            ->setScope($scope);
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
     * @return \Ews\StructType\EwsClientAccessTokenRequestType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
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
     * @return \Ews\StructType\EwsClientAccessTokenRequestType
     */
    public function setTokenType($tokenType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsClientAccessTokenTypeType::valueIsValid($tokenType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tokenType, implode(', ', \Ews\EnumType\EwsClientAccessTokenTypeType::getValidValues())), __LINE__);
        }
        $this->TokenType = $tokenType;
        return $this;
    }
    /**
     * Get Scope value
     * @return string|null
     */
    public function getScope()
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @param string $scope
     * @return \Ews\StructType\EwsClientAccessTokenRequestType
     */
    public function setScope($scope = null)
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scope)), __LINE__);
        }
        $this->Scope = $scope;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsClientAccessTokenRequestType
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
