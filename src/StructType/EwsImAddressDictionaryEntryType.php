<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImAddressDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsImAddressDictionaryEntryType extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * Constructor method for ImAddressDictionaryEntryType
     * @uses EwsImAddressDictionaryEntryType::setKey()
     * @uses EwsImAddressDictionaryEntryType::set_()
     * @param string $key
     * @param string $_
     */
    public function __construct(string $key, ?string $_ = null)
    {
        $this
            ->setKey($key)
            ->set_($_);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @uses \EnumType\EwsImAddressKeyType::valueIsValid()
     * @uses \EnumType\EwsImAddressKeyType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $key
     * @return \StructType\EwsImAddressDictionaryEntryType
     */
    public function setKey(string $key): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsImAddressKeyType::valueIsValid($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsImAddressKeyType', is_array($key) ? implode(', ', $key) : var_export($key, true), implode(', ', \EnumType\EwsImAddressKeyType::getValidValues())), __LINE__);
        }
        $this->Key = $key;
        
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
     * @return \StructType\EwsImAddressDictionaryEntryType
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
}
