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
     * Meta information extracted from the WSDL
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
     * @return \Ews\StructType\EwsClientAccessTokenRequestType
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->Scope = $scope;
        return $this;
    }
}
