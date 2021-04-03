<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbchEmailAddressDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbchEmailAddressDictionaryEntryType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $Type;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $Address;
    /**
     * The IsMessengerEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsMessengerEnabled = null;
    /**
     * The Capabilities
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Capabilities = null;
    /**
     * Constructor method for AbchEmailAddressDictionaryEntryType
     * @uses EwsAbchEmailAddressDictionaryEntryType::setType()
     * @uses EwsAbchEmailAddressDictionaryEntryType::setAddress()
     * @uses EwsAbchEmailAddressDictionaryEntryType::setIsMessengerEnabled()
     * @uses EwsAbchEmailAddressDictionaryEntryType::setCapabilities()
     * @param string $type
     * @param string $address
     * @param bool $isMessengerEnabled
     * @param int $capabilities
     */
    public function __construct(string $type, string $address, ?bool $isMessengerEnabled = null, ?int $capabilities = null)
    {
        $this
            ->setType($type)
            ->setAddress($address)
            ->setIsMessengerEnabled($isMessengerEnabled)
            ->setCapabilities($capabilities);
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
     * @uses \EnumType\EwsAbchEmailAddressTypeType::valueIsValid()
     * @uses \EnumType\EwsAbchEmailAddressTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\EwsAbchEmailAddressDictionaryEntryType
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsAbchEmailAddressTypeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsAbchEmailAddressTypeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EwsAbchEmailAddressTypeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Address value
     * @return string
     */
    public function getAddress(): string
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \StructType\EwsAbchEmailAddressDictionaryEntryType
     */
    public function setAddress(string $address): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get IsMessengerEnabled value
     * @return bool|null
     */
    public function getIsMessengerEnabled(): ?bool
    {
        return $this->IsMessengerEnabled;
    }
    /**
     * Set IsMessengerEnabled value
     * @param bool $isMessengerEnabled
     * @return \StructType\EwsAbchEmailAddressDictionaryEntryType
     */
    public function setIsMessengerEnabled(?bool $isMessengerEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMessengerEnabled) && !is_bool($isMessengerEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMessengerEnabled, true), gettype($isMessengerEnabled)), __LINE__);
        }
        $this->IsMessengerEnabled = $isMessengerEnabled;
        
        return $this;
    }
    /**
     * Get Capabilities value
     * @return int|null
     */
    public function getCapabilities(): ?int
    {
        return $this->Capabilities;
    }
    /**
     * Set Capabilities value
     * @param int $capabilities
     * @return \StructType\EwsAbchEmailAddressDictionaryEntryType
     */
    public function setCapabilities(?int $capabilities = null): self
    {
        // validation for constraint: int
        if (!is_null($capabilities) && !(is_int($capabilities) || ctype_digit($capabilities))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($capabilities, true), gettype($capabilities)), __LINE__);
        }
        $this->Capabilities = $capabilities;
        
        return $this;
    }
}
