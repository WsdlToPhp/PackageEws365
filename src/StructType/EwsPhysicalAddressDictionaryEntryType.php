<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhysicalAddressDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhysicalAddressDictionaryEntryType extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Street = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * The CountryOrRegion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CountryOrRegion = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * Constructor method for PhysicalAddressDictionaryEntryType
     * @uses EwsPhysicalAddressDictionaryEntryType::setKey()
     * @uses EwsPhysicalAddressDictionaryEntryType::setStreet()
     * @uses EwsPhysicalAddressDictionaryEntryType::setCity()
     * @uses EwsPhysicalAddressDictionaryEntryType::setState()
     * @uses EwsPhysicalAddressDictionaryEntryType::setCountryOrRegion()
     * @uses EwsPhysicalAddressDictionaryEntryType::setPostalCode()
     * @param string $key
     * @param string $street
     * @param string $city
     * @param string $state
     * @param string $countryOrRegion
     * @param string $postalCode
     */
    public function __construct(string $key, ?string $street = null, ?string $city = null, ?string $state = null, ?string $countryOrRegion = null, ?string $postalCode = null)
    {
        $this
            ->setKey($key)
            ->setStreet($street)
            ->setCity($city)
            ->setState($state)
            ->setCountryOrRegion($countryOrRegion)
            ->setPostalCode($postalCode);
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
     * @uses \EnumType\EwsPhysicalAddressKeyType::valueIsValid()
     * @uses \EnumType\EwsPhysicalAddressKeyType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $key
     * @return \StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setKey(string $key): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsPhysicalAddressKeyType::valueIsValid($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsPhysicalAddressKeyType', is_array($key) ? implode(', ', $key) : var_export($key, true), implode(', ', \EnumType\EwsPhysicalAddressKeyType::getValidValues())), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->Street = $street;
        
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->City = $city;
        
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $state
     * @return \StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->State = $state;
        
        return $this;
    }
    /**
     * Get CountryOrRegion value
     * @return string|null
     */
    public function getCountryOrRegion(): ?string
    {
        return $this->CountryOrRegion;
    }
    /**
     * Set CountryOrRegion value
     * @param string $countryOrRegion
     * @return \StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setCountryOrRegion(?string $countryOrRegion = null): self
    {
        // validation for constraint: string
        if (!is_null($countryOrRegion) && !is_string($countryOrRegion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryOrRegion, true), gettype($countryOrRegion)), __LINE__);
        }
        $this->CountryOrRegion = $countryOrRegion;
        
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        
        return $this;
    }
}
