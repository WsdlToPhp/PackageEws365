<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelDeliveryEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsParcelDeliveryEntityType extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Carrier = null;
    /**
     * The TrackingNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TrackingNumber = null;
    /**
     * The TrackingUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TrackingUrl = null;
    /**
     * The ExpectedArrivalFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpectedArrivalFrom = null;
    /**
     * The ExpectedArrivalUntil
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpectedArrivalUntil = null;
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Product = null;
    /**
     * The ProductUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductUrl = null;
    /**
     * The ProductImage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductImage = null;
    /**
     * The ProductSku
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductSku = null;
    /**
     * The ProductDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductDescription = null;
    /**
     * The ProductBrand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductBrand = null;
    /**
     * The ProductColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductColor = null;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderNumber = null;
    /**
     * The Seller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Seller = null;
    /**
     * The OrderStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderStatus = null;
    /**
     * The AddressName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressName = null;
    /**
     * The StreetAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StreetAddress = null;
    /**
     * The AddressLocality
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressLocality = null;
    /**
     * The AddressRegion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressRegion = null;
    /**
     * The AddressCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressCountry = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * Constructor method for ParcelDeliveryEntityType
     * @uses EwsParcelDeliveryEntityType::setCarrier()
     * @uses EwsParcelDeliveryEntityType::setTrackingNumber()
     * @uses EwsParcelDeliveryEntityType::setTrackingUrl()
     * @uses EwsParcelDeliveryEntityType::setExpectedArrivalFrom()
     * @uses EwsParcelDeliveryEntityType::setExpectedArrivalUntil()
     * @uses EwsParcelDeliveryEntityType::setProduct()
     * @uses EwsParcelDeliveryEntityType::setProductUrl()
     * @uses EwsParcelDeliveryEntityType::setProductImage()
     * @uses EwsParcelDeliveryEntityType::setProductSku()
     * @uses EwsParcelDeliveryEntityType::setProductDescription()
     * @uses EwsParcelDeliveryEntityType::setProductBrand()
     * @uses EwsParcelDeliveryEntityType::setProductColor()
     * @uses EwsParcelDeliveryEntityType::setOrderNumber()
     * @uses EwsParcelDeliveryEntityType::setSeller()
     * @uses EwsParcelDeliveryEntityType::setOrderStatus()
     * @uses EwsParcelDeliveryEntityType::setAddressName()
     * @uses EwsParcelDeliveryEntityType::setStreetAddress()
     * @uses EwsParcelDeliveryEntityType::setAddressLocality()
     * @uses EwsParcelDeliveryEntityType::setAddressRegion()
     * @uses EwsParcelDeliveryEntityType::setAddressCountry()
     * @uses EwsParcelDeliveryEntityType::setPostalCode()
     * @param string $carrier
     * @param string $trackingNumber
     * @param string $trackingUrl
     * @param string $expectedArrivalFrom
     * @param string $expectedArrivalUntil
     * @param string $product
     * @param string $productUrl
     * @param string $productImage
     * @param string $productSku
     * @param string $productDescription
     * @param string $productBrand
     * @param string $productColor
     * @param string $orderNumber
     * @param string $seller
     * @param string $orderStatus
     * @param string $addressName
     * @param string $streetAddress
     * @param string $addressLocality
     * @param string $addressRegion
     * @param string $addressCountry
     * @param string $postalCode
     */
    public function __construct(?string $carrier = null, ?string $trackingNumber = null, ?string $trackingUrl = null, ?string $expectedArrivalFrom = null, ?string $expectedArrivalUntil = null, ?string $product = null, ?string $productUrl = null, ?string $productImage = null, ?string $productSku = null, ?string $productDescription = null, ?string $productBrand = null, ?string $productColor = null, ?string $orderNumber = null, ?string $seller = null, ?string $orderStatus = null, ?string $addressName = null, ?string $streetAddress = null, ?string $addressLocality = null, ?string $addressRegion = null, ?string $addressCountry = null, ?string $postalCode = null)
    {
        $this
            ->setCarrier($carrier)
            ->setTrackingNumber($trackingNumber)
            ->setTrackingUrl($trackingUrl)
            ->setExpectedArrivalFrom($expectedArrivalFrom)
            ->setExpectedArrivalUntil($expectedArrivalUntil)
            ->setProduct($product)
            ->setProductUrl($productUrl)
            ->setProductImage($productImage)
            ->setProductSku($productSku)
            ->setProductDescription($productDescription)
            ->setProductBrand($productBrand)
            ->setProductColor($productColor)
            ->setOrderNumber($orderNumber)
            ->setSeller($seller)
            ->setOrderStatus($orderStatus)
            ->setAddressName($addressName)
            ->setStreetAddress($streetAddress)
            ->setAddressLocality($addressLocality)
            ->setAddressRegion($addressRegion)
            ->setAddressCountry($addressCountry)
            ->setPostalCode($postalCode);
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber(): ?string
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setTrackingNumber(?string $trackingNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingNumber, true), gettype($trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        
        return $this;
    }
    /**
     * Get TrackingUrl value
     * @return string|null
     */
    public function getTrackingUrl(): ?string
    {
        return $this->TrackingUrl;
    }
    /**
     * Set TrackingUrl value
     * @param string $trackingUrl
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setTrackingUrl(?string $trackingUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($trackingUrl) && !is_string($trackingUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingUrl, true), gettype($trackingUrl)), __LINE__);
        }
        $this->TrackingUrl = $trackingUrl;
        
        return $this;
    }
    /**
     * Get ExpectedArrivalFrom value
     * @return string|null
     */
    public function getExpectedArrivalFrom(): ?string
    {
        return $this->ExpectedArrivalFrom;
    }
    /**
     * Set ExpectedArrivalFrom value
     * @param string $expectedArrivalFrom
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setExpectedArrivalFrom(?string $expectedArrivalFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($expectedArrivalFrom) && !is_string($expectedArrivalFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expectedArrivalFrom, true), gettype($expectedArrivalFrom)), __LINE__);
        }
        $this->ExpectedArrivalFrom = $expectedArrivalFrom;
        
        return $this;
    }
    /**
     * Get ExpectedArrivalUntil value
     * @return string|null
     */
    public function getExpectedArrivalUntil(): ?string
    {
        return $this->ExpectedArrivalUntil;
    }
    /**
     * Set ExpectedArrivalUntil value
     * @param string $expectedArrivalUntil
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setExpectedArrivalUntil(?string $expectedArrivalUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($expectedArrivalUntil) && !is_string($expectedArrivalUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expectedArrivalUntil, true), gettype($expectedArrivalUntil)), __LINE__);
        }
        $this->ExpectedArrivalUntil = $expectedArrivalUntil;
        
        return $this;
    }
    /**
     * Get Product value
     * @return string|null
     */
    public function getProduct(): ?string
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param string $product
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setProduct(?string $product = null): self
    {
        // validation for constraint: string
        if (!is_null($product) && !is_string($product)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($product, true), gettype($product)), __LINE__);
        }
        $this->Product = $product;
        
        return $this;
    }
    /**
     * Get ProductUrl value
     * @return string|null
     */
    public function getProductUrl(): ?string
    {
        return $this->ProductUrl;
    }
    /**
     * Set ProductUrl value
     * @param string $productUrl
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setProductUrl(?string $productUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($productUrl) && !is_string($productUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productUrl, true), gettype($productUrl)), __LINE__);
        }
        $this->ProductUrl = $productUrl;
        
        return $this;
    }
    /**
     * Get ProductImage value
     * @return string|null
     */
    public function getProductImage(): ?string
    {
        return $this->ProductImage;
    }
    /**
     * Set ProductImage value
     * @param string $productImage
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setProductImage(?string $productImage = null): self
    {
        // validation for constraint: string
        if (!is_null($productImage) && !is_string($productImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productImage, true), gettype($productImage)), __LINE__);
        }
        $this->ProductImage = $productImage;
        
        return $this;
    }
    /**
     * Get ProductSku value
     * @return string|null
     */
    public function getProductSku(): ?string
    {
        return $this->ProductSku;
    }
    /**
     * Set ProductSku value
     * @param string $productSku
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setProductSku(?string $productSku = null): self
    {
        // validation for constraint: string
        if (!is_null($productSku) && !is_string($productSku)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productSku, true), gettype($productSku)), __LINE__);
        }
        $this->ProductSku = $productSku;
        
        return $this;
    }
    /**
     * Get ProductDescription value
     * @return string|null
     */
    public function getProductDescription(): ?string
    {
        return $this->ProductDescription;
    }
    /**
     * Set ProductDescription value
     * @param string $productDescription
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setProductDescription(?string $productDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($productDescription) && !is_string($productDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productDescription, true), gettype($productDescription)), __LINE__);
        }
        $this->ProductDescription = $productDescription;
        
        return $this;
    }
    /**
     * Get ProductBrand value
     * @return string|null
     */
    public function getProductBrand(): ?string
    {
        return $this->ProductBrand;
    }
    /**
     * Set ProductBrand value
     * @param string $productBrand
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setProductBrand(?string $productBrand = null): self
    {
        // validation for constraint: string
        if (!is_null($productBrand) && !is_string($productBrand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productBrand, true), gettype($productBrand)), __LINE__);
        }
        $this->ProductBrand = $productBrand;
        
        return $this;
    }
    /**
     * Get ProductColor value
     * @return string|null
     */
    public function getProductColor(): ?string
    {
        return $this->ProductColor;
    }
    /**
     * Set ProductColor value
     * @param string $productColor
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setProductColor(?string $productColor = null): self
    {
        // validation for constraint: string
        if (!is_null($productColor) && !is_string($productColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productColor, true), gettype($productColor)), __LINE__);
        }
        $this->ProductColor = $productColor;
        
        return $this;
    }
    /**
     * Get OrderNumber value
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->OrderNumber;
    }
    /**
     * Set OrderNumber value
     * @param string $orderNumber
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setOrderNumber(?string $orderNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        $this->OrderNumber = $orderNumber;
        
        return $this;
    }
    /**
     * Get Seller value
     * @return string|null
     */
    public function getSeller(): ?string
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param string $seller
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setSeller(?string $seller = null): self
    {
        // validation for constraint: string
        if (!is_null($seller) && !is_string($seller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seller, true), gettype($seller)), __LINE__);
        }
        $this->Seller = $seller;
        
        return $this;
    }
    /**
     * Get OrderStatus value
     * @return string|null
     */
    public function getOrderStatus(): ?string
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @param string $orderStatus
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setOrderStatus(?string $orderStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($orderStatus) && !is_string($orderStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderStatus, true), gettype($orderStatus)), __LINE__);
        }
        $this->OrderStatus = $orderStatus;
        
        return $this;
    }
    /**
     * Get AddressName value
     * @return string|null
     */
    public function getAddressName(): ?string
    {
        return $this->AddressName;
    }
    /**
     * Set AddressName value
     * @param string $addressName
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setAddressName(?string $addressName = null): self
    {
        // validation for constraint: string
        if (!is_null($addressName) && !is_string($addressName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressName, true), gettype($addressName)), __LINE__);
        }
        $this->AddressName = $addressName;
        
        return $this;
    }
    /**
     * Get StreetAddress value
     * @return string|null
     */
    public function getStreetAddress(): ?string
    {
        return $this->StreetAddress;
    }
    /**
     * Set StreetAddress value
     * @param string $streetAddress
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setStreetAddress(?string $streetAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($streetAddress) && !is_string($streetAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetAddress, true), gettype($streetAddress)), __LINE__);
        }
        $this->StreetAddress = $streetAddress;
        
        return $this;
    }
    /**
     * Get AddressLocality value
     * @return string|null
     */
    public function getAddressLocality(): ?string
    {
        return $this->AddressLocality;
    }
    /**
     * Set AddressLocality value
     * @param string $addressLocality
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setAddressLocality(?string $addressLocality = null): self
    {
        // validation for constraint: string
        if (!is_null($addressLocality) && !is_string($addressLocality)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLocality, true), gettype($addressLocality)), __LINE__);
        }
        $this->AddressLocality = $addressLocality;
        
        return $this;
    }
    /**
     * Get AddressRegion value
     * @return string|null
     */
    public function getAddressRegion(): ?string
    {
        return $this->AddressRegion;
    }
    /**
     * Set AddressRegion value
     * @param string $addressRegion
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setAddressRegion(?string $addressRegion = null): self
    {
        // validation for constraint: string
        if (!is_null($addressRegion) && !is_string($addressRegion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressRegion, true), gettype($addressRegion)), __LINE__);
        }
        $this->AddressRegion = $addressRegion;
        
        return $this;
    }
    /**
     * Get AddressCountry value
     * @return string|null
     */
    public function getAddressCountry(): ?string
    {
        return $this->AddressCountry;
    }
    /**
     * Set AddressCountry value
     * @param string $addressCountry
     * @return \StructType\EwsParcelDeliveryEntityType
     */
    public function setAddressCountry(?string $addressCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($addressCountry) && !is_string($addressCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressCountry, true), gettype($addressCountry)), __LINE__);
        }
        $this->AddressCountry = $addressCountry;
        
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
     * @return \StructType\EwsParcelDeliveryEntityType
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
