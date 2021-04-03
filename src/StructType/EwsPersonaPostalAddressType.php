<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonaPostalAddressType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPersonaPostalAddressType extends AbstractStructBase
{
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Street = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * The PostOfficeBox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostOfficeBox = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Latitude
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Latitude = null;
    /**
     * The Longitude
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Longitude = null;
    /**
     * The Accuracy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Accuracy = null;
    /**
     * The Altitude
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Altitude = null;
    /**
     * The AltitudeAccuracy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $AltitudeAccuracy = null;
    /**
     * The FormattedAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FormattedAddress = null;
    /**
     * The LocationUri
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocationUri = null;
    /**
     * The LocationSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocationSource = null;
    /**
     * Constructor method for PersonaPostalAddressType
     * @uses EwsPersonaPostalAddressType::setStreet()
     * @uses EwsPersonaPostalAddressType::setCity()
     * @uses EwsPersonaPostalAddressType::setState()
     * @uses EwsPersonaPostalAddressType::setCountry()
     * @uses EwsPersonaPostalAddressType::setPostalCode()
     * @uses EwsPersonaPostalAddressType::setPostOfficeBox()
     * @uses EwsPersonaPostalAddressType::setType()
     * @uses EwsPersonaPostalAddressType::setLatitude()
     * @uses EwsPersonaPostalAddressType::setLongitude()
     * @uses EwsPersonaPostalAddressType::setAccuracy()
     * @uses EwsPersonaPostalAddressType::setAltitude()
     * @uses EwsPersonaPostalAddressType::setAltitudeAccuracy()
     * @uses EwsPersonaPostalAddressType::setFormattedAddress()
     * @uses EwsPersonaPostalAddressType::setLocationUri()
     * @uses EwsPersonaPostalAddressType::setLocationSource()
     * @param string $street
     * @param string $city
     * @param string $state
     * @param string $country
     * @param string $postalCode
     * @param string $postOfficeBox
     * @param string $type
     * @param float $latitude
     * @param float $longitude
     * @param float $accuracy
     * @param float $altitude
     * @param float $altitudeAccuracy
     * @param string $formattedAddress
     * @param string $locationUri
     * @param string $locationSource
     */
    public function __construct(?string $street = null, ?string $city = null, ?string $state = null, ?string $country = null, ?string $postalCode = null, ?string $postOfficeBox = null, ?string $type = null, ?float $latitude = null, ?float $longitude = null, ?float $accuracy = null, ?float $altitude = null, ?float $altitudeAccuracy = null, ?string $formattedAddress = null, ?string $locationUri = null, ?string $locationSource = null)
    {
        $this
            ->setStreet($street)
            ->setCity($city)
            ->setState($state)
            ->setCountry($country)
            ->setPostalCode($postalCode)
            ->setPostOfficeBox($postOfficeBox)
            ->setType($type)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setAccuracy($accuracy)
            ->setAltitude($altitude)
            ->setAltitudeAccuracy($altitudeAccuracy)
            ->setFormattedAddress($formattedAddress)
            ->setLocationUri($locationUri)
            ->setLocationSource($locationSource);
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
     * @return \StructType\EwsPersonaPostalAddressType
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
     * @return \StructType\EwsPersonaPostalAddressType
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
     * @return \StructType\EwsPersonaPostalAddressType
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
     * Get Country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->Country = $country;
        
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
     * @return \StructType\EwsPersonaPostalAddressType
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
    /**
     * Get PostOfficeBox value
     * @return string|null
     */
    public function getPostOfficeBox(): ?string
    {
        return $this->PostOfficeBox;
    }
    /**
     * Set PostOfficeBox value
     * @param string $postOfficeBox
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setPostOfficeBox(?string $postOfficeBox = null): self
    {
        // validation for constraint: string
        if (!is_null($postOfficeBox) && !is_string($postOfficeBox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postOfficeBox, true), gettype($postOfficeBox)), __LINE__);
        }
        $this->PostOfficeBox = $postOfficeBox;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Latitude value
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param float $latitude
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setLatitude(?float $latitude = null): self
    {
        // validation for constraint: float
        if (!is_null($latitude) && !(is_float($latitude) || is_numeric($latitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->Latitude = $latitude;
        
        return $this;
    }
    /**
     * Get Longitude value
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param float $longitude
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setLongitude(?float $longitude = null): self
    {
        // validation for constraint: float
        if (!is_null($longitude) && !(is_float($longitude) || is_numeric($longitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->Longitude = $longitude;
        
        return $this;
    }
    /**
     * Get Accuracy value
     * @return float|null
     */
    public function getAccuracy(): ?float
    {
        return $this->Accuracy;
    }
    /**
     * Set Accuracy value
     * @param float $accuracy
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setAccuracy(?float $accuracy = null): self
    {
        // validation for constraint: float
        if (!is_null($accuracy) && !(is_float($accuracy) || is_numeric($accuracy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($accuracy, true), gettype($accuracy)), __LINE__);
        }
        $this->Accuracy = $accuracy;
        
        return $this;
    }
    /**
     * Get Altitude value
     * @return float|null
     */
    public function getAltitude(): ?float
    {
        return $this->Altitude;
    }
    /**
     * Set Altitude value
     * @param float $altitude
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setAltitude(?float $altitude = null): self
    {
        // validation for constraint: float
        if (!is_null($altitude) && !(is_float($altitude) || is_numeric($altitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($altitude, true), gettype($altitude)), __LINE__);
        }
        $this->Altitude = $altitude;
        
        return $this;
    }
    /**
     * Get AltitudeAccuracy value
     * @return float|null
     */
    public function getAltitudeAccuracy(): ?float
    {
        return $this->AltitudeAccuracy;
    }
    /**
     * Set AltitudeAccuracy value
     * @param float $altitudeAccuracy
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setAltitudeAccuracy(?float $altitudeAccuracy = null): self
    {
        // validation for constraint: float
        if (!is_null($altitudeAccuracy) && !(is_float($altitudeAccuracy) || is_numeric($altitudeAccuracy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($altitudeAccuracy, true), gettype($altitudeAccuracy)), __LINE__);
        }
        $this->AltitudeAccuracy = $altitudeAccuracy;
        
        return $this;
    }
    /**
     * Get FormattedAddress value
     * @return string|null
     */
    public function getFormattedAddress(): ?string
    {
        return $this->FormattedAddress;
    }
    /**
     * Set FormattedAddress value
     * @param string $formattedAddress
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setFormattedAddress(?string $formattedAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($formattedAddress) && !is_string($formattedAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formattedAddress, true), gettype($formattedAddress)), __LINE__);
        }
        $this->FormattedAddress = $formattedAddress;
        
        return $this;
    }
    /**
     * Get LocationUri value
     * @return string|null
     */
    public function getLocationUri(): ?string
    {
        return $this->LocationUri;
    }
    /**
     * Set LocationUri value
     * @param string $locationUri
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setLocationUri(?string $locationUri = null): self
    {
        // validation for constraint: string
        if (!is_null($locationUri) && !is_string($locationUri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationUri, true), gettype($locationUri)), __LINE__);
        }
        $this->LocationUri = $locationUri;
        
        return $this;
    }
    /**
     * Get LocationSource value
     * @return string|null
     */
    public function getLocationSource(): ?string
    {
        return $this->LocationSource;
    }
    /**
     * Set LocationSource value
     * @uses \EnumType\EwsLocationSourceType::valueIsValid()
     * @uses \EnumType\EwsLocationSourceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $locationSource
     * @return \StructType\EwsPersonaPostalAddressType
     */
    public function setLocationSource(?string $locationSource = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsLocationSourceType::valueIsValid($locationSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsLocationSourceType', is_array($locationSource) ? implode(', ', $locationSource) : var_export($locationSource, true), implode(', ', \EnumType\EwsLocationSourceType::getValidValues())), __LINE__);
        }
        $this->LocationSource = $locationSource;
        
        return $this;
    }
}
