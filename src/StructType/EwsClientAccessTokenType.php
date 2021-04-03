<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The TokenType
     * @var string|null
     */
    protected ?string $TokenType = null;
    /**
     * The TokenValue
     * @var string|null
     */
    protected ?string $TokenValue = null;
    /**
     * The TTL
     * @var int|null
     */
    protected ?int $TTL = null;
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
    public function __construct(?string $id = null, ?string $tokenType = null, ?string $tokenValue = null, ?int $tTL = null)
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
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsClientAccessTokenType
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
     * @return \StructType\EwsClientAccessTokenType
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
     * Get TokenValue value
     * @return string|null
     */
    public function getTokenValue(): ?string
    {
        return $this->TokenValue;
    }
    /**
     * Set TokenValue value
     * @param string $tokenValue
     * @return \StructType\EwsClientAccessTokenType
     */
    public function setTokenValue(?string $tokenValue = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenValue) && !is_string($tokenValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenValue, true), gettype($tokenValue)), __LINE__);
        }
        $this->TokenValue = $tokenValue;
        
        return $this;
    }
    /**
     * Get TTL value
     * @return int|null
     */
    public function getTTL(): ?int
    {
        return $this->TTL;
    }
    /**
     * Set TTL value
     * @param int $tTL
     * @return \StructType\EwsClientAccessTokenType
     */
    public function setTTL(?int $tTL = null): self
    {
        // validation for constraint: int
        if (!is_null($tTL) && !(is_int($tTL) || ctype_digit($tTL))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tTL, true), gettype($tTL)), __LINE__);
        }
        $this->TTL = $tTL;
        
        return $this;
    }
}
