<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BodyType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBodyType extends AbstractStructBase
{
    /**
     * The BodyType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $BodyType;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The IsTruncated
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsTruncated = null;
    /**
     * Constructor method for BodyType
     * @uses EwsBodyType::setBodyType()
     * @uses EwsBodyType::set_()
     * @uses EwsBodyType::setIsTruncated()
     * @param string $bodyType
     * @param string $_
     * @param bool $isTruncated
     */
    public function __construct(string $bodyType, ?string $_ = null, ?bool $isTruncated = null)
    {
        $this
            ->setBodyType($bodyType)
            ->set_($_)
            ->setIsTruncated($isTruncated);
    }
    /**
     * Get BodyType value
     * @return string
     */
    public function getBodyType(): string
    {
        return $this->BodyType;
    }
    /**
     * Set BodyType value
     * @uses \EnumType\EwsBodyTypeType::valueIsValid()
     * @uses \EnumType\EwsBodyTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bodyType
     * @return \StructType\EwsBodyType
     */
    public function setBodyType(string $bodyType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsBodyTypeType::valueIsValid($bodyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsBodyTypeType', is_array($bodyType) ? implode(', ', $bodyType) : var_export($bodyType, true), implode(', ', \EnumType\EwsBodyTypeType::getValidValues())), __LINE__);
        }
        $this->BodyType = $bodyType;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\EwsBodyType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get IsTruncated value
     * @return bool|null
     */
    public function getIsTruncated(): ?bool
    {
        return $this->IsTruncated;
    }
    /**
     * Set IsTruncated value
     * @param bool $isTruncated
     * @return \StructType\EwsBodyType
     */
    public function setIsTruncated(?bool $isTruncated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTruncated) && !is_bool($isTruncated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTruncated, true), gettype($isTruncated)), __LINE__);
        }
        $this->IsTruncated = $isTruncated;
        
        return $this;
    }
}
