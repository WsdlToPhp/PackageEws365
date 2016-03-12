<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JobInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsJobInsightValue extends EwsInsightValue
{
    /**
     * The Company
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Company;
    /**
     * The CompanyDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CompanyDescription;
    /**
     * The CompanyTicker
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CompanyTicker;
    /**
     * The CompanyLogoUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CompanyLogoUrl;
    /**
     * The CompanyWebsiteUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CompanyWebsiteUrl;
    /**
     * The CompanyLinkedInUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CompanyLinkedInUrl;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The StartUtcTicks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $StartUtcTicks;
    /**
     * The EndUtcTicks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $EndUtcTicks;
    /**
     * Constructor method for JobInsightValue
     * @uses EwsJobInsightValue::setCompany()
     * @uses EwsJobInsightValue::setCompanyDescription()
     * @uses EwsJobInsightValue::setCompanyTicker()
     * @uses EwsJobInsightValue::setCompanyLogoUrl()
     * @uses EwsJobInsightValue::setCompanyWebsiteUrl()
     * @uses EwsJobInsightValue::setCompanyLinkedInUrl()
     * @uses EwsJobInsightValue::setTitle()
     * @uses EwsJobInsightValue::setStartUtcTicks()
     * @uses EwsJobInsightValue::setEndUtcTicks()
     * @param string $company
     * @param string $companyDescription
     * @param string $companyTicker
     * @param string $companyLogoUrl
     * @param string $companyWebsiteUrl
     * @param string $companyLinkedInUrl
     * @param string $title
     * @param int $startUtcTicks
     * @param int $endUtcTicks
     */
    public function __construct($company = null, $companyDescription = null, $companyTicker = null, $companyLogoUrl = null, $companyWebsiteUrl = null, $companyLinkedInUrl = null, $title = null, $startUtcTicks = null, $endUtcTicks = null)
    {
        $this
            ->setCompany($company)
            ->setCompanyDescription($companyDescription)
            ->setCompanyTicker($companyTicker)
            ->setCompanyLogoUrl($companyLogoUrl)
            ->setCompanyWebsiteUrl($companyWebsiteUrl)
            ->setCompanyLinkedInUrl($companyLinkedInUrl)
            ->setTitle($title)
            ->setStartUtcTicks($startUtcTicks)
            ->setEndUtcTicks($endUtcTicks);
    }
    /**
     * Get Company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \Ews\StructType\EwsJobInsightValue
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company)), __LINE__);
        }
        $this->Company = $company;
        return $this;
    }
    /**
     * Get CompanyDescription value
     * @return string|null
     */
    public function getCompanyDescription()
    {
        return $this->CompanyDescription;
    }
    /**
     * Set CompanyDescription value
     * @param string $companyDescription
     * @return \Ews\StructType\EwsJobInsightValue
     */
    public function setCompanyDescription($companyDescription = null)
    {
        // validation for constraint: string
        if (!is_null($companyDescription) && !is_string($companyDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyDescription)), __LINE__);
        }
        $this->CompanyDescription = $companyDescription;
        return $this;
    }
    /**
     * Get CompanyTicker value
     * @return string|null
     */
    public function getCompanyTicker()
    {
        return $this->CompanyTicker;
    }
    /**
     * Set CompanyTicker value
     * @param string $companyTicker
     * @return \Ews\StructType\EwsJobInsightValue
     */
    public function setCompanyTicker($companyTicker = null)
    {
        // validation for constraint: string
        if (!is_null($companyTicker) && !is_string($companyTicker)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyTicker)), __LINE__);
        }
        $this->CompanyTicker = $companyTicker;
        return $this;
    }
    /**
     * Get CompanyLogoUrl value
     * @return string|null
     */
    public function getCompanyLogoUrl()
    {
        return $this->CompanyLogoUrl;
    }
    /**
     * Set CompanyLogoUrl value
     * @param string $companyLogoUrl
     * @return \Ews\StructType\EwsJobInsightValue
     */
    public function setCompanyLogoUrl($companyLogoUrl = null)
    {
        // validation for constraint: string
        if (!is_null($companyLogoUrl) && !is_string($companyLogoUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyLogoUrl)), __LINE__);
        }
        $this->CompanyLogoUrl = $companyLogoUrl;
        return $this;
    }
    /**
     * Get CompanyWebsiteUrl value
     * @return string|null
     */
    public function getCompanyWebsiteUrl()
    {
        return $this->CompanyWebsiteUrl;
    }
    /**
     * Set CompanyWebsiteUrl value
     * @param string $companyWebsiteUrl
     * @return \Ews\StructType\EwsJobInsightValue
     */
    public function setCompanyWebsiteUrl($companyWebsiteUrl = null)
    {
        // validation for constraint: string
        if (!is_null($companyWebsiteUrl) && !is_string($companyWebsiteUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyWebsiteUrl)), __LINE__);
        }
        $this->CompanyWebsiteUrl = $companyWebsiteUrl;
        return $this;
    }
    /**
     * Get CompanyLinkedInUrl value
     * @return string|null
     */
    public function getCompanyLinkedInUrl()
    {
        return $this->CompanyLinkedInUrl;
    }
    /**
     * Set CompanyLinkedInUrl value
     * @param string $companyLinkedInUrl
     * @return \Ews\StructType\EwsJobInsightValue
     */
    public function setCompanyLinkedInUrl($companyLinkedInUrl = null)
    {
        // validation for constraint: string
        if (!is_null($companyLinkedInUrl) && !is_string($companyLinkedInUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyLinkedInUrl)), __LINE__);
        }
        $this->CompanyLinkedInUrl = $companyLinkedInUrl;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Ews\StructType\EwsJobInsightValue
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get StartUtcTicks value
     * @return int|null
     */
    public function getStartUtcTicks()
    {
        return $this->StartUtcTicks;
    }
    /**
     * Set StartUtcTicks value
     * @param int $startUtcTicks
     * @return \Ews\StructType\EwsJobInsightValue
     */
    public function setStartUtcTicks($startUtcTicks = null)
    {
        // validation for constraint: int
        if (!is_null($startUtcTicks) && !is_int($startUtcTicks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($startUtcTicks)), __LINE__);
        }
        $this->StartUtcTicks = $startUtcTicks;
        return $this;
    }
    /**
     * Get EndUtcTicks value
     * @return int|null
     */
    public function getEndUtcTicks()
    {
        return $this->EndUtcTicks;
    }
    /**
     * Set EndUtcTicks value
     * @param int $endUtcTicks
     * @return \Ews\StructType\EwsJobInsightValue
     */
    public function setEndUtcTicks($endUtcTicks = null)
    {
        // validation for constraint: int
        if (!is_null($endUtcTicks) && !is_int($endUtcTicks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($endUtcTicks)), __LINE__);
        }
        $this->EndUtcTicks = $endUtcTicks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsJobInsightValue
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
