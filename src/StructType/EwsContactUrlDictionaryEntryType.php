<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactUrlDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactUrlDictionaryEntryType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $Type;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Address = null;
    /**
     * Constructor method for ContactUrlDictionaryEntryType
     * @uses EwsContactUrlDictionaryEntryType::setType()
     * @uses EwsContactUrlDictionaryEntryType::setName()
     * @uses EwsContactUrlDictionaryEntryType::setAddress()
     * @param string $type
     * @param string $name
     * @param string $address
     */
    public function __construct(string $type, ?string $name = null, ?string $address = null)
    {
        $this
            ->setType($type)
            ->setName($name)
            ->setAddress($address);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\EwsContactUrlKeyType::valueIsValid()
     * @uses \EnumType\EwsContactUrlKeyType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\EwsContactUrlDictionaryEntryType
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsContactUrlKeyType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsContactUrlKeyType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EwsContactUrlKeyType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsContactUrlDictionaryEntryType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \StructType\EwsContactUrlDictionaryEntryType
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->Address = $address;
        
        return $this;
    }
}
