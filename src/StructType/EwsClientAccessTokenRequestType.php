<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The TokenType
     * @var string|null
     */
    protected ?string $TokenType = null;
    /**
     * The Scope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Scope = null;
    /**
     * Constructor method for ClientAccessTokenRequestType
     * @uses EwsClientAccessTokenRequestType::setId()
     * @uses EwsClientAccessTokenRequestType::setTokenType()
     * @uses EwsClientAccessTokenRequestType::setScope()
     * @param string $id
     * @param string $tokenType
     * @param string $scope
     */
    public function __construct(?string $id = null, ?string $tokenType = null, ?string $scope = null)
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
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsClientAccessTokenRequestType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get TokenType value
     * @return string|null
     */
    public function getTokenType(): ?string
    {
        return $this->TokenType;
    }
    /**
     * Set TokenType value
     * @uses \EnumType\EwsClientAccessTokenTypeType::valueIsValid()
     * @uses \EnumType\EwsClientAccessTokenTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tokenType
     * @return \StructType\EwsClientAccessTokenRequestType
     */
    public function setTokenType(?string $tokenType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsClientAccessTokenTypeType::valueIsValid($tokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsClientAccessTokenTypeType', is_array($tokenType) ? implode(', ', $tokenType) : var_export($tokenType, true), implode(', ', \EnumType\EwsClientAccessTokenTypeType::getValidValues())), __LINE__);
        }
        $this->TokenType = $tokenType;
        
        return $this;
    }
    /**
     * Get Scope value
     * @return string|null
     */
    public function getScope(): ?string
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @param string $scope
     * @return \StructType\EwsClientAccessTokenRequestType
     */
    public function setScope(?string $scope = null): self
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->Scope = $scope;
        
        return $this;
    }
}
