<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Company = null;
    /**
     * The CompanyDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyDescription = null;
    /**
     * The CompanyTicker
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyTicker = null;
    /**
     * The CompanyLogoUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyLogoUrl = null;
    /**
     * The CompanyWebsiteUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyWebsiteUrl = null;
    /**
     * The CompanyLinkedInUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyLinkedInUrl = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The StartUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StartUtcTicks = null;
    /**
     * The EndUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $EndUtcTicks = null;
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
    public function __construct(?string $company = null, ?string $companyDescription = null, ?string $companyTicker = null, ?string $companyLogoUrl = null, ?string $companyWebsiteUrl = null, ?string $companyLinkedInUrl = null, ?string $title = null, ?int $startUtcTicks = null, ?int $endUtcTicks = null)
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
    public function getCompany(): ?string
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \StructType\EwsJobInsightValue
     */
    public function setCompany(?string $company = null): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->Company = $company;
        
        return $this;
    }
    /**
     * Get CompanyDescription value
     * @return string|null
     */
    public function getCompanyDescription(): ?string
    {
        return $this->CompanyDescription;
    }
    /**
     * Set CompanyDescription value
     * @param string $companyDescription
     * @return \StructType\EwsJobInsightValue
     */
    public function setCompanyDescription(?string $companyDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($companyDescription) && !is_string($companyDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyDescription, true), gettype($companyDescription)), __LINE__);
        }
        $this->CompanyDescription = $companyDescription;
        
        return $this;
    }
    /**
     * Get CompanyTicker value
     * @return string|null
     */
    public function getCompanyTicker(): ?string
    {
        return $this->CompanyTicker;
    }
    /**
     * Set CompanyTicker value
     * @param string $companyTicker
     * @return \StructType\EwsJobInsightValue
     */
    public function setCompanyTicker(?string $companyTicker = null): self
    {
        // validation for constraint: string
        if (!is_null($companyTicker) && !is_string($companyTicker)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyTicker, true), gettype($companyTicker)), __LINE__);
        }
        $this->CompanyTicker = $companyTicker;
        
        return $this;
    }
    /**
     * Get CompanyLogoUrl value
     * @return string|null
     */
    public function getCompanyLogoUrl(): ?string
    {
        return $this->CompanyLogoUrl;
    }
    /**
     * Set CompanyLogoUrl value
     * @param string $companyLogoUrl
     * @return \StructType\EwsJobInsightValue
     */
    public function setCompanyLogoUrl(?string $companyLogoUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($companyLogoUrl) && !is_string($companyLogoUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyLogoUrl, true), gettype($companyLogoUrl)), __LINE__);
        }
        $this->CompanyLogoUrl = $companyLogoUrl;
        
        return $this;
    }
    /**
     * Get CompanyWebsiteUrl value
     * @return string|null
     */
    public function getCompanyWebsiteUrl(): ?string
    {
        return $this->CompanyWebsiteUrl;
    }
    /**
     * Set CompanyWebsiteUrl value
     * @param string $companyWebsiteUrl
     * @return \StructType\EwsJobInsightValue
     */
    public function setCompanyWebsiteUrl(?string $companyWebsiteUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($companyWebsiteUrl) && !is_string($companyWebsiteUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyWebsiteUrl, true), gettype($companyWebsiteUrl)), __LINE__);
        }
        $this->CompanyWebsiteUrl = $companyWebsiteUrl;
        
        return $this;
    }
    /**
     * Get CompanyLinkedInUrl value
     * @return string|null
     */
    public function getCompanyLinkedInUrl(): ?string
    {
        return $this->CompanyLinkedInUrl;
    }
    /**
     * Set CompanyLinkedInUrl value
     * @param string $companyLinkedInUrl
     * @return \StructType\EwsJobInsightValue
     */
    public function setCompanyLinkedInUrl(?string $companyLinkedInUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($companyLinkedInUrl) && !is_string($companyLinkedInUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyLinkedInUrl, true), gettype($companyLinkedInUrl)), __LINE__);
        }
        $this->CompanyLinkedInUrl = $companyLinkedInUrl;
        
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\EwsJobInsightValue
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Get StartUtcTicks value
     * @return int|null
     */
    public function getStartUtcTicks(): ?int
    {
        return $this->StartUtcTicks;
    }
    /**
     * Set StartUtcTicks value
     * @param int $startUtcTicks
     * @return \StructType\EwsJobInsightValue
     */
    public function setStartUtcTicks(?int $startUtcTicks = null): self
    {
        // validation for constraint: int
        if (!is_null($startUtcTicks) && !(is_int($startUtcTicks) || ctype_digit($startUtcTicks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startUtcTicks, true), gettype($startUtcTicks)), __LINE__);
        }
        $this->StartUtcTicks = $startUtcTicks;
        
        return $this;
    }
    /**
     * Get EndUtcTicks value
     * @return int|null
     */
    public function getEndUtcTicks(): ?int
    {
        return $this->EndUtcTicks;
    }
    /**
     * Set EndUtcTicks value
     * @param int $endUtcTicks
     * @return \StructType\EwsJobInsightValue
     */
    public function setEndUtcTicks(?int $endUtcTicks = null): self
    {
        // validation for constraint: int
        if (!is_null($endUtcTicks) && !(is_int($endUtcTicks) || ctype_digit($endUtcTicks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endUtcTicks, true), gettype($endUtcTicks)), __LINE__);
        }
        $this->EndUtcTicks = $endUtcTicks;
        
        return $this;
    }
}
