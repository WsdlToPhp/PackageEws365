<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniqueBodyType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUniqueBodyType extends AbstractStructBase
{
    /**
     * The UniqueBodyType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $UniqueBodyType;
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
     * Constructor method for UniqueBodyType
     * @uses EwsUniqueBodyType::setUniqueBodyType()
     * @uses EwsUniqueBodyType::set_()
     * @uses EwsUniqueBodyType::setIsTruncated()
     * @param string $uniqueBodyType
     * @param string $_
     * @param bool $isTruncated
     */
    public function __construct(string $uniqueBodyType, ?string $_ = null, ?bool $isTruncated = null)
    {
        $this
            ->setUniqueBodyType($uniqueBodyType)
            ->set_($_)
            ->setIsTruncated($isTruncated);
    }
    /**
     * Get UniqueBodyType value
     * @return string
     */
    public function getUniqueBodyType(): string
    {
        return $this->UniqueBodyType;
    }
    /**
     * Set UniqueBodyType value
     * @uses \EnumType\EwsBodyTypeType::valueIsValid()
     * @uses \EnumType\EwsBodyTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $uniqueBodyType
     * @return \StructType\EwsUniqueBodyType
     */
    public function setUniqueBodyType(string $uniqueBodyType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsBodyTypeType::valueIsValid($uniqueBodyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsBodyTypeType', is_array($uniqueBodyType) ? implode(', ', $uniqueBodyType) : var_export($uniqueBodyType, true), implode(', ', \EnumType\EwsBodyTypeType::getValidValues())), __LINE__);
        }
        $this->UniqueBodyType = $uniqueBodyType;
        
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
     * @return \StructType\EwsUniqueBodyType
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
     * @return \StructType\EwsUniqueBodyType
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
