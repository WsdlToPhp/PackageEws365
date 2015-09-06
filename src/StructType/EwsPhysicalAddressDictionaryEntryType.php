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
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Key;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Street;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The CountryOrRegion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountryOrRegion;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
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
     * @param string $key
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public function setKey($key = null)
    {
        if (!\Ews\EnumType\EwsPhysicalAddressKeyType::valueIsValid($key)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $key, implode(', ', \Ews\EnumType\EwsPhysicalAddressKeyType::getValidValues())), __LINE__);
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
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
