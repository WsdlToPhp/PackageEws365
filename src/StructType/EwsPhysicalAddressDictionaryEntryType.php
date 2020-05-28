<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $Key;
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Street;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The CountryOrRegion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountryOrRegion;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
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
    public function __construct($key = null, $street = null, $city = null, $state = null, $countryOrRegion = null, $postalCode = null)
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
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @uses \Ews\EnumType\EwsPhysicalAddressKeyType::valueIsValid()
     * @uses \Ews\EnumType\EwsPhysicalAddressKeyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $key
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setKey($key = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsPhysicalAddressKeyType::valueIsValid($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsPhysicalAddressKeyType', is_array($key) ? implode(', ', $key) : var_export($key, true), implode(', ', \Ews\EnumType\EwsPhysicalAddressKeyType::getValidValues())), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->Street = $street;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $state
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Get CountryOrRegion value
     * @return string|null
     */
    public function getCountryOrRegion()
    {
        return $this->CountryOrRegion;
    }
    /**
     * Set CountryOrRegion value
     * @param string $countryOrRegion
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setCountryOrRegion($countryOrRegion = null)
    {
        // validation for constraint: string
        if (!is_null($countryOrRegion) && !is_string($countryOrRegion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryOrRegion, true), gettype($countryOrRegion)), __LINE__);
        }
        $this->CountryOrRegion = $countryOrRegion;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
}
