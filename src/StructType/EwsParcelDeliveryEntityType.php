<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelDeliveryEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsParcelDeliveryEntityType extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Carrier;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The TrackingUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrackingUrl;
    /**
     * The ExpectedArrivalFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpectedArrivalFrom;
    /**
     * The ExpectedArrivalUntil
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpectedArrivalUntil;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Product;
    /**
     * The ProductUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductUrl;
    /**
     * The ProductImage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductImage;
    /**
     * The ProductSku
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductSku;
    /**
     * The ProductDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductDescription;
    /**
     * The ProductBrand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductBrand;
    /**
     * The ProductColor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductColor;
    /**
     * The OrderNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OrderNumber;
    /**
     * The Seller
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Seller;
    /**
     * The OrderStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OrderStatus;
    /**
     * The AddressName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddressName;
    /**
     * The StreetAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StreetAddress;
    /**
     * The AddressLocality
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddressLocality;
    /**
     * The AddressRegion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddressRegion;
    /**
     * The AddressCountry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddressCountry;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
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
    public function __construct($carrier = null, $trackingNumber = null, $trackingUrl = null, $expectedArrivalFrom = null, $expectedArrivalUntil = null, $product = null, $productUrl = null, $productImage = null, $productSku = null, $productDescription = null, $productBrand = null, $productColor = null, $orderNumber = null, $seller = null, $orderStatus = null, $addressName = null, $streetAddress = null, $addressLocality = null, $addressRegion = null, $addressCountry = null, $postalCode = null)
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
    public function getCarrier()
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setCarrier($carrier = null)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get TrackingUrl value
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->TrackingUrl;
    }
    /**
     * Set TrackingUrl value
     * @param string $trackingUrl
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setTrackingUrl($trackingUrl = null)
    {
        $this->TrackingUrl = $trackingUrl;
        return $this;
    }
    /**
     * Get ExpectedArrivalFrom value
     * @return string|null
     */
    public function getExpectedArrivalFrom()
    {
        return $this->ExpectedArrivalFrom;
    }
    /**
     * Set ExpectedArrivalFrom value
     * @param string $expectedArrivalFrom
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setExpectedArrivalFrom($expectedArrivalFrom = null)
    {
        $this->ExpectedArrivalFrom = $expectedArrivalFrom;
        return $this;
    }
    /**
     * Get ExpectedArrivalUntil value
     * @return string|null
     */
    public function getExpectedArrivalUntil()
    {
        return $this->ExpectedArrivalUntil;
    }
    /**
     * Set ExpectedArrivalUntil value
     * @param string $expectedArrivalUntil
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setExpectedArrivalUntil($expectedArrivalUntil = null)
    {
        $this->ExpectedArrivalUntil = $expectedArrivalUntil;
        return $this;
    }
    /**
     * Get Product value
     * @return string|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param string $product
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setProduct($product = null)
    {
        $this->Product = $product;
        return $this;
    }
    /**
     * Get ProductUrl value
     * @return string|null
     */
    public function getProductUrl()
    {
        return $this->ProductUrl;
    }
    /**
     * Set ProductUrl value
     * @param string $productUrl
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setProductUrl($productUrl = null)
    {
        $this->ProductUrl = $productUrl;
        return $this;
    }
    /**
     * Get ProductImage value
     * @return string|null
     */
    public function getProductImage()
    {
        return $this->ProductImage;
    }
    /**
     * Set ProductImage value
     * @param string $productImage
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setProductImage($productImage = null)
    {
        $this->ProductImage = $productImage;
        return $this;
    }
    /**
     * Get ProductSku value
     * @return string|null
     */
    public function getProductSku()
    {
        return $this->ProductSku;
    }
    /**
     * Set ProductSku value
     * @param string $productSku
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setProductSku($productSku = null)
    {
        $this->ProductSku = $productSku;
        return $this;
    }
    /**
     * Get ProductDescription value
     * @return string|null
     */
    public function getProductDescription()
    {
        return $this->ProductDescription;
    }
    /**
     * Set ProductDescription value
     * @param string $productDescription
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setProductDescription($productDescription = null)
    {
        $this->ProductDescription = $productDescription;
        return $this;
    }
    /**
     * Get ProductBrand value
     * @return string|null
     */
    public function getProductBrand()
    {
        return $this->ProductBrand;
    }
    /**
     * Set ProductBrand value
     * @param string $productBrand
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setProductBrand($productBrand = null)
    {
        $this->ProductBrand = $productBrand;
        return $this;
    }
    /**
     * Get ProductColor value
     * @return string|null
     */
    public function getProductColor()
    {
        return $this->ProductColor;
    }
    /**
     * Set ProductColor value
     * @param string $productColor
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setProductColor($productColor = null)
    {
        $this->ProductColor = $productColor;
        return $this;
    }
    /**
     * Get OrderNumber value
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }
    /**
     * Set OrderNumber value
     * @param string $orderNumber
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setOrderNumber($orderNumber = null)
    {
        $this->OrderNumber = $orderNumber;
        return $this;
    }
    /**
     * Get Seller value
     * @return string|null
     */
    public function getSeller()
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param string $seller
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setSeller($seller = null)
    {
        $this->Seller = $seller;
        return $this;
    }
    /**
     * Get OrderStatus value
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @param string $orderStatus
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setOrderStatus($orderStatus = null)
    {
        $this->OrderStatus = $orderStatus;
        return $this;
    }
    /**
     * Get AddressName value
     * @return string|null
     */
    public function getAddressName()
    {
        return $this->AddressName;
    }
    /**
     * Set AddressName value
     * @param string $addressName
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setAddressName($addressName = null)
    {
        $this->AddressName = $addressName;
        return $this;
    }
    /**
     * Get StreetAddress value
     * @return string|null
     */
    public function getStreetAddress()
    {
        return $this->StreetAddress;
    }
    /**
     * Set StreetAddress value
     * @param string $streetAddress
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setStreetAddress($streetAddress = null)
    {
        $this->StreetAddress = $streetAddress;
        return $this;
    }
    /**
     * Get AddressLocality value
     * @return string|null
     */
    public function getAddressLocality()
    {
        return $this->AddressLocality;
    }
    /**
     * Set AddressLocality value
     * @param string $addressLocality
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setAddressLocality($addressLocality = null)
    {
        $this->AddressLocality = $addressLocality;
        return $this;
    }
    /**
     * Get AddressRegion value
     * @return string|null
     */
    public function getAddressRegion()
    {
        return $this->AddressRegion;
    }
    /**
     * Set AddressRegion value
     * @param string $addressRegion
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setAddressRegion($addressRegion = null)
    {
        $this->AddressRegion = $addressRegion;
        return $this;
    }
    /**
     * Get AddressCountry value
     * @return string|null
     */
    public function getAddressCountry()
    {
        return $this->AddressCountry;
    }
    /**
     * Set AddressCountry value
     * @param string $addressCountry
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
     */
    public function setAddressCountry($addressCountry = null)
    {
        $this->AddressCountry = $addressCountry;
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
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
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
     * @return \Ews\StructType\EwsParcelDeliveryEntityType
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
