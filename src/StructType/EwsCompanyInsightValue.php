<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsCompanyInsightValue extends EwsInsightValue
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The SatoriId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SatoriId;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DescriptionAttribution
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DescriptionAttribution;
    /**
     * The ImageUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImageUrl;
    /**
     * The ImageUrlAttribution
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImageUrlAttribution;
    /**
     * The YearFound
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $YearFound;
    /**
     * The FinanceSymbol
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FinanceSymbol;
    /**
     * The WebsiteUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WebsiteUrl;
    /**
     * Constructor method for CompanyInsightValue
     * @uses EwsCompanyInsightValue::setName()
     * @uses EwsCompanyInsightValue::setSatoriId()
     * @uses EwsCompanyInsightValue::setDescription()
     * @uses EwsCompanyInsightValue::setDescriptionAttribution()
     * @uses EwsCompanyInsightValue::setImageUrl()
     * @uses EwsCompanyInsightValue::setImageUrlAttribution()
     * @uses EwsCompanyInsightValue::setYearFound()
     * @uses EwsCompanyInsightValue::setFinanceSymbol()
     * @uses EwsCompanyInsightValue::setWebsiteUrl()
     * @param string $name
     * @param string $satoriId
     * @param string $description
     * @param string $descriptionAttribution
     * @param string $imageUrl
     * @param string $imageUrlAttribution
     * @param string $yearFound
     * @param string $financeSymbol
     * @param string $websiteUrl
     */
    public function __construct($name = null, $satoriId = null, $description = null, $descriptionAttribution = null, $imageUrl = null, $imageUrlAttribution = null, $yearFound = null, $financeSymbol = null, $websiteUrl = null)
    {
        $this
            ->setName($name)
            ->setSatoriId($satoriId)
            ->setDescription($description)
            ->setDescriptionAttribution($descriptionAttribution)
            ->setImageUrl($imageUrl)
            ->setImageUrlAttribution($imageUrlAttribution)
            ->setYearFound($yearFound)
            ->setFinanceSymbol($financeSymbol)
            ->setWebsiteUrl($websiteUrl);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsCompanyInsightValue
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get SatoriId value
     * @return string|null
     */
    public function getSatoriId()
    {
        return $this->SatoriId;
    }
    /**
     * Set SatoriId value
     * @param string $satoriId
     * @return \Ews\StructType\EwsCompanyInsightValue
     */
    public function setSatoriId($satoriId = null)
    {
        $this->SatoriId = $satoriId;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Ews\StructType\EwsCompanyInsightValue
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DescriptionAttribution value
     * @return string|null
     */
    public function getDescriptionAttribution()
    {
        return $this->DescriptionAttribution;
    }
    /**
     * Set DescriptionAttribution value
     * @param string $descriptionAttribution
     * @return \Ews\StructType\EwsCompanyInsightValue
     */
    public function setDescriptionAttribution($descriptionAttribution = null)
    {
        $this->DescriptionAttribution = $descriptionAttribution;
        return $this;
    }
    /**
     * Get ImageUrl value
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }
    /**
     * Set ImageUrl value
     * @param string $imageUrl
     * @return \Ews\StructType\EwsCompanyInsightValue
     */
    public function setImageUrl($imageUrl = null)
    {
        $this->ImageUrl = $imageUrl;
        return $this;
    }
    /**
     * Get ImageUrlAttribution value
     * @return string|null
     */
    public function getImageUrlAttribution()
    {
        return $this->ImageUrlAttribution;
    }
    /**
     * Set ImageUrlAttribution value
     * @param string $imageUrlAttribution
     * @return \Ews\StructType\EwsCompanyInsightValue
     */
    public function setImageUrlAttribution($imageUrlAttribution = null)
    {
        $this->ImageUrlAttribution = $imageUrlAttribution;
        return $this;
    }
    /**
     * Get YearFound value
     * @return string|null
     */
    public function getYearFound()
    {
        return $this->YearFound;
    }
    /**
     * Set YearFound value
     * @param string $yearFound
     * @return \Ews\StructType\EwsCompanyInsightValue
     */
    public function setYearFound($yearFound = null)
    {
        $this->YearFound = $yearFound;
        return $this;
    }
    /**
     * Get FinanceSymbol value
     * @return string|null
     */
    public function getFinanceSymbol()
    {
        return $this->FinanceSymbol;
    }
    /**
     * Set FinanceSymbol value
     * @param string $financeSymbol
     * @return \Ews\StructType\EwsCompanyInsightValue
     */
    public function setFinanceSymbol($financeSymbol = null)
    {
        $this->FinanceSymbol = $financeSymbol;
        return $this;
    }
    /**
     * Get WebsiteUrl value
     * @return string|null
     */
    public function getWebsiteUrl()
    {
        return $this->WebsiteUrl;
    }
    /**
     * Set WebsiteUrl value
     * @param string $websiteUrl
     * @return \Ews\StructType\EwsCompanyInsightValue
     */
    public function setWebsiteUrl($websiteUrl = null)
    {
        $this->WebsiteUrl = $websiteUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCompanyInsightValue
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
