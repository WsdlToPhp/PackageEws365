<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCompanyInsightValue extends EwsInsightValue
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Name;
    /**
     * The SatoriId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SatoriId = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The DescriptionAttribution
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DescriptionAttribution = null;
    /**
     * The ImageUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImageUrl = null;
    /**
     * The ImageUrlAttribution
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImageUrlAttribution = null;
    /**
     * The YearFound
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $YearFound = null;
    /**
     * The FinanceSymbol
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FinanceSymbol = null;
    /**
     * The WebsiteUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WebsiteUrl = null;
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
    public function __construct(string $name, ?string $satoriId = null, ?string $description = null, ?string $descriptionAttribution = null, ?string $imageUrl = null, ?string $imageUrlAttribution = null, ?string $yearFound = null, ?string $financeSymbol = null, ?string $websiteUrl = null)
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
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsCompanyInsightValue
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get SatoriId value
     * @return string|null
     */
    public function getSatoriId(): ?string
    {
        return $this->SatoriId;
    }
    /**
     * Set SatoriId value
     * @param string $satoriId
     * @return \StructType\EwsCompanyInsightValue
     */
    public function setSatoriId(?string $satoriId = null): self
    {
        // validation for constraint: string
        if (!is_null($satoriId) && !is_string($satoriId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($satoriId, true), gettype($satoriId)), __LINE__);
        }
        $this->SatoriId = $satoriId;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\EwsCompanyInsightValue
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get DescriptionAttribution value
     * @return string|null
     */
    public function getDescriptionAttribution(): ?string
    {
        return $this->DescriptionAttribution;
    }
    /**
     * Set DescriptionAttribution value
     * @param string $descriptionAttribution
     * @return \StructType\EwsCompanyInsightValue
     */
    public function setDescriptionAttribution(?string $descriptionAttribution = null): self
    {
        // validation for constraint: string
        if (!is_null($descriptionAttribution) && !is_string($descriptionAttribution)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionAttribution, true), gettype($descriptionAttribution)), __LINE__);
        }
        $this->DescriptionAttribution = $descriptionAttribution;
        
        return $this;
    }
    /**
     * Get ImageUrl value
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->ImageUrl;
    }
    /**
     * Set ImageUrl value
     * @param string $imageUrl
     * @return \StructType\EwsCompanyInsightValue
     */
    public function setImageUrl(?string $imageUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($imageUrl) && !is_string($imageUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageUrl, true), gettype($imageUrl)), __LINE__);
        }
        $this->ImageUrl = $imageUrl;
        
        return $this;
    }
    /**
     * Get ImageUrlAttribution value
     * @return string|null
     */
    public function getImageUrlAttribution(): ?string
    {
        return $this->ImageUrlAttribution;
    }
    /**
     * Set ImageUrlAttribution value
     * @param string $imageUrlAttribution
     * @return \StructType\EwsCompanyInsightValue
     */
    public function setImageUrlAttribution(?string $imageUrlAttribution = null): self
    {
        // validation for constraint: string
        if (!is_null($imageUrlAttribution) && !is_string($imageUrlAttribution)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageUrlAttribution, true), gettype($imageUrlAttribution)), __LINE__);
        }
        $this->ImageUrlAttribution = $imageUrlAttribution;
        
        return $this;
    }
    /**
     * Get YearFound value
     * @return string|null
     */
    public function getYearFound(): ?string
    {
        return $this->YearFound;
    }
    /**
     * Set YearFound value
     * @param string $yearFound
     * @return \StructType\EwsCompanyInsightValue
     */
    public function setYearFound(?string $yearFound = null): self
    {
        // validation for constraint: string
        if (!is_null($yearFound) && !is_string($yearFound)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($yearFound, true), gettype($yearFound)), __LINE__);
        }
        $this->YearFound = $yearFound;
        
        return $this;
    }
    /**
     * Get FinanceSymbol value
     * @return string|null
     */
    public function getFinanceSymbol(): ?string
    {
        return $this->FinanceSymbol;
    }
    /**
     * Set FinanceSymbol value
     * @param string $financeSymbol
     * @return \StructType\EwsCompanyInsightValue
     */
    public function setFinanceSymbol(?string $financeSymbol = null): self
    {
        // validation for constraint: string
        if (!is_null($financeSymbol) && !is_string($financeSymbol)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($financeSymbol, true), gettype($financeSymbol)), __LINE__);
        }
        $this->FinanceSymbol = $financeSymbol;
        
        return $this;
    }
    /**
     * Get WebsiteUrl value
     * @return string|null
     */
    public function getWebsiteUrl(): ?string
    {
        return $this->WebsiteUrl;
    }
    /**
     * Set WebsiteUrl value
     * @param string $websiteUrl
     * @return \StructType\EwsCompanyInsightValue
     */
    public function setWebsiteUrl(?string $websiteUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($websiteUrl) && !is_string($websiteUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($websiteUrl, true), gettype($websiteUrl)), __LINE__);
        }
        $this->WebsiteUrl = $websiteUrl;
        
        return $this;
    }
}
