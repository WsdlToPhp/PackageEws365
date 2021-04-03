<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPeopleInsightsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPeopleInsightsType extends EwsBaseRequestType
{
    /**
     * The PersonShape
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsPersonResponseShapeType|null
     */
    protected ?\StructType\EwsPersonResponseShapeType $PersonShape = null;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $EmailAddresses = null;
    /**
     * The InsightFilters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsInsightFiltersType|null
     */
    protected ?\StructType\EwsInsightFiltersType $InsightFilters = null;
    /**
     * The AppId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AppId = null;
    /**
     * The PeopleTokens
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfPeopleTokenType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $PeopleTokens = null;
    /**
     * Constructor method for GetPeopleInsightsType
     * @uses EwsGetPeopleInsightsType::setPersonShape()
     * @uses EwsGetPeopleInsightsType::setEmailAddresses()
     * @uses EwsGetPeopleInsightsType::setInsightFilters()
     * @uses EwsGetPeopleInsightsType::setAppId()
     * @uses EwsGetPeopleInsightsType::setPeopleTokens()
     * @param \StructType\EwsPersonResponseShapeType $personShape
     * @param \ArrayType\EwsArrayOfStringsType $emailAddresses
     * @param \StructType\EwsInsightFiltersType $insightFilters
     * @param string $appId
     * @param \ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens
     */
    public function __construct(?\StructType\EwsPersonResponseShapeType $personShape = null, ?\ArrayType\EwsArrayOfStringsType $emailAddresses = null, ?\StructType\EwsInsightFiltersType $insightFilters = null, ?string $appId = null, ?\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens = null)
    {
        $this
            ->setPersonShape($personShape)
            ->setEmailAddresses($emailAddresses)
            ->setInsightFilters($insightFilters)
            ->setAppId($appId)
            ->setPeopleTokens($peopleTokens);
    }
    /**
     * Get PersonShape value
     * @return \StructType\EwsPersonResponseShapeType|null
     */
    public function getPersonShape(): ?\StructType\EwsPersonResponseShapeType
    {
        return $this->PersonShape;
    }
    /**
     * Set PersonShape value
     * @param \StructType\EwsPersonResponseShapeType $personShape
     * @return \StructType\EwsGetPeopleInsightsType
     */
    public function setPersonShape(?\StructType\EwsPersonResponseShapeType $personShape = null): self
    {
        $this->PersonShape = $personShape;
        
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getEmailAddresses(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \ArrayType\EwsArrayOfStringsType $emailAddresses
     * @return \StructType\EwsGetPeopleInsightsType
     */
    public function setEmailAddresses(?\ArrayType\EwsArrayOfStringsType $emailAddresses = null): self
    {
        $this->EmailAddresses = $emailAddresses;
        
        return $this;
    }
    /**
     * Get InsightFilters value
     * @return \StructType\EwsInsightFiltersType|null
     */
    public function getInsightFilters(): ?\StructType\EwsInsightFiltersType
    {
        return $this->InsightFilters;
    }
    /**
     * Set InsightFilters value
     * @param \StructType\EwsInsightFiltersType $insightFilters
     * @return \StructType\EwsGetPeopleInsightsType
     */
    public function setInsightFilters(?\StructType\EwsInsightFiltersType $insightFilters = null): self
    {
        $this->InsightFilters = $insightFilters;
        
        return $this;
    }
    /**
     * Get AppId value
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->AppId;
    }
    /**
     * Set AppId value
     * @param string $appId
     * @return \StructType\EwsGetPeopleInsightsType
     */
    public function setAppId(?string $appId = null): self
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appId, true), gettype($appId)), __LINE__);
        }
        $this->AppId = $appId;
        
        return $this;
    }
    /**
     * Get PeopleTokens value
     * @return \ArrayType\EwsNonEmptyArrayOfPeopleTokenType|null
     */
    public function getPeopleTokens(): ?\ArrayType\EwsNonEmptyArrayOfPeopleTokenType
    {
        return $this->PeopleTokens;
    }
    /**
     * Set PeopleTokens value
     * @param \ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens
     * @return \StructType\EwsGetPeopleInsightsType
     */
    public function setPeopleTokens(?\ArrayType\EwsNonEmptyArrayOfPeopleTokenType $peopleTokens = null): self
    {
        $this->PeopleTokens = $peopleTokens;
        
        return $this;
    }
}
