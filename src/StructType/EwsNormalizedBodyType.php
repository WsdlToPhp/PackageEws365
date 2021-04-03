<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NormalizedBodyType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNormalizedBodyType extends AbstractStructBase
{
    /**
     * The NormalizedBodyType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $NormalizedBodyType;
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
     * Constructor method for NormalizedBodyType
     * @uses EwsNormalizedBodyType::setNormalizedBodyType()
     * @uses EwsNormalizedBodyType::set_()
     * @uses EwsNormalizedBodyType::setIsTruncated()
     * @param string $normalizedBodyType
     * @param string $_
     * @param bool $isTruncated
     */
    public function __construct(string $normalizedBodyType, ?string $_ = null, ?bool $isTruncated = null)
    {
        $this
            ->setNormalizedBodyType($normalizedBodyType)
            ->set_($_)
            ->setIsTruncated($isTruncated);
    }
    /**
     * Get NormalizedBodyType value
     * @return string
     */
    public function getNormalizedBodyType(): string
    {
        return $this->NormalizedBodyType;
    }
    /**
     * Set NormalizedBodyType value
     * @uses \EnumType\EwsBodyTypeType::valueIsValid()
     * @uses \EnumType\EwsBodyTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $normalizedBodyType
     * @return \StructType\EwsNormalizedBodyType
     */
    public function setNormalizedBodyType(string $normalizedBodyType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsBodyTypeType::valueIsValid($normalizedBodyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsBodyTypeType', is_array($normalizedBodyType) ? implode(', ', $normalizedBodyType) : var_export($normalizedBodyType, true), implode(', ', \EnumType\EwsBodyTypeType::getValidValues())), __LINE__);
        }
        $this->NormalizedBodyType = $normalizedBodyType;
        
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
     * @return \StructType\EwsNormalizedBodyType
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
     * @return \StructType\EwsNormalizedBodyType
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
