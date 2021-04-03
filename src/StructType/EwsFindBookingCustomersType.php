<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindBookingCustomersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindBookingCustomersType extends EwsBaseBookingRequestType
{
    /**
     * The IndexedPageItemView
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsIndexedPageViewType
     */
    protected \StructType\EwsIndexedPageViewType $IndexedPageItemView;
    /**
     * The PersonaShape
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsPersonaResponseShapeType|null
     */
    protected ?\StructType\EwsPersonaResponseShapeType $PersonaShape = null;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsRestrictionType|null
     */
    protected ?\StructType\EwsRestrictionType $Restriction = null;
    /**
     * The AggregationRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsRestrictionType|null
     */
    protected ?\StructType\EwsRestrictionType $AggregationRestriction = null;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfFieldOrdersType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $SortOrder = null;
    /**
     * The QueryString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $QueryString = null;
    /**
     * The SearchPeopleSuggestionIndex
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SearchPeopleSuggestionIndex = null;
    /**
     * The TopicQueryString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TopicQueryString = null;
    /**
     * The Context
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfContextProperty|null
     */
    protected ?\ArrayType\EwsArrayOfContextProperty $Context = null;
    /**
     * Constructor method for FindBookingCustomersType
     * @uses EwsFindBookingCustomersType::setIndexedPageItemView()
     * @uses EwsFindBookingCustomersType::setPersonaShape()
     * @uses EwsFindBookingCustomersType::setRestriction()
     * @uses EwsFindBookingCustomersType::setAggregationRestriction()
     * @uses EwsFindBookingCustomersType::setSortOrder()
     * @uses EwsFindBookingCustomersType::setQueryString()
     * @uses EwsFindBookingCustomersType::setSearchPeopleSuggestionIndex()
     * @uses EwsFindBookingCustomersType::setTopicQueryString()
     * @uses EwsFindBookingCustomersType::setContext()
     * @param \StructType\EwsIndexedPageViewType $indexedPageItemView
     * @param \StructType\EwsPersonaResponseShapeType $personaShape
     * @param \StructType\EwsRestrictionType $restriction
     * @param \StructType\EwsRestrictionType $aggregationRestriction
     * @param \ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @param string $queryString
     * @param bool $searchPeopleSuggestionIndex
     * @param string $topicQueryString
     * @param \ArrayType\EwsArrayOfContextProperty $context
     */
    public function __construct(\StructType\EwsIndexedPageViewType $indexedPageItemView, ?\StructType\EwsPersonaResponseShapeType $personaShape = null, ?\StructType\EwsRestrictionType $restriction = null, ?\StructType\EwsRestrictionType $aggregationRestriction = null, ?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null, ?string $queryString = null, ?bool $searchPeopleSuggestionIndex = null, ?string $topicQueryString = null, ?\ArrayType\EwsArrayOfContextProperty $context = null)
    {
        $this
            ->setIndexedPageItemView($indexedPageItemView)
            ->setPersonaShape($personaShape)
            ->setRestriction($restriction)
            ->setAggregationRestriction($aggregationRestriction)
            ->setSortOrder($sortOrder)
            ->setQueryString($queryString)
            ->setSearchPeopleSuggestionIndex($searchPeopleSuggestionIndex)
            ->setTopicQueryString($topicQueryString)
            ->setContext($context);
    }
    /**
     * Get IndexedPageItemView value
     * @return \StructType\EwsIndexedPageViewType
     */
    public function getIndexedPageItemView(): \StructType\EwsIndexedPageViewType
    {
        return $this->IndexedPageItemView;
    }
    /**
     * Set IndexedPageItemView value
     * @param \StructType\EwsIndexedPageViewType $indexedPageItemView
     * @return \StructType\EwsFindBookingCustomersType
     */
    public function setIndexedPageItemView(\StructType\EwsIndexedPageViewType $indexedPageItemView): self
    {
        $this->IndexedPageItemView = $indexedPageItemView;
        
        return $this;
    }
    /**
     * Get PersonaShape value
     * @return \StructType\EwsPersonaResponseShapeType|null
     */
    public function getPersonaShape(): ?\StructType\EwsPersonaResponseShapeType
    {
        return $this->PersonaShape;
    }
    /**
     * Set PersonaShape value
     * @param \StructType\EwsPersonaResponseShapeType $personaShape
     * @return \StructType\EwsFindBookingCustomersType
     */
    public function setPersonaShape(?\StructType\EwsPersonaResponseShapeType $personaShape = null): self
    {
        $this->PersonaShape = $personaShape;
        
        return $this;
    }
    /**
     * Get Restriction value
     * @return \StructType\EwsRestrictionType|null
     */
    public function getRestriction(): ?\StructType\EwsRestrictionType
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \StructType\EwsRestrictionType $restriction
     * @return \StructType\EwsFindBookingCustomersType
     */
    public function setRestriction(?\StructType\EwsRestrictionType $restriction = null): self
    {
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Get AggregationRestriction value
     * @return \StructType\EwsRestrictionType|null
     */
    public function getAggregationRestriction(): ?\StructType\EwsRestrictionType
    {
        return $this->AggregationRestriction;
    }
    /**
     * Set AggregationRestriction value
     * @param \StructType\EwsRestrictionType $aggregationRestriction
     * @return \StructType\EwsFindBookingCustomersType
     */
    public function setAggregationRestriction(?\StructType\EwsRestrictionType $aggregationRestriction = null): self
    {
        $this->AggregationRestriction = $aggregationRestriction;
        
        return $this;
    }
    /**
     * Get SortOrder value
     * @return \ArrayType\EwsNonEmptyArrayOfFieldOrdersType|null
     */
    public function getSortOrder(): ?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @param \ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @return \StructType\EwsFindBookingCustomersType
     */
    public function setSortOrder(?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null): self
    {
        $this->SortOrder = $sortOrder;
        
        return $this;
    }
    /**
     * Get QueryString value
     * @return string|null
     */
    public function getQueryString(): ?string
    {
        return $this->QueryString;
    }
    /**
     * Set QueryString value
     * @param string $queryString
     * @return \StructType\EwsFindBookingCustomersType
     */
    public function setQueryString(?string $queryString = null): self
    {
        // validation for constraint: string
        if (!is_null($queryString) && !is_string($queryString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryString, true), gettype($queryString)), __LINE__);
        }
        $this->QueryString = $queryString;
        
        return $this;
    }
    /**
     * Get SearchPeopleSuggestionIndex value
     * @return bool|null
     */
    public function getSearchPeopleSuggestionIndex(): ?bool
    {
        return $this->SearchPeopleSuggestionIndex;
    }
    /**
     * Set SearchPeopleSuggestionIndex value
     * @param bool $searchPeopleSuggestionIndex
     * @return \StructType\EwsFindBookingCustomersType
     */
    public function setSearchPeopleSuggestionIndex(?bool $searchPeopleSuggestionIndex = null): self
    {
        // validation for constraint: boolean
        if (!is_null($searchPeopleSuggestionIndex) && !is_bool($searchPeopleSuggestionIndex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchPeopleSuggestionIndex, true), gettype($searchPeopleSuggestionIndex)), __LINE__);
        }
        $this->SearchPeopleSuggestionIndex = $searchPeopleSuggestionIndex;
        
        return $this;
    }
    /**
     * Get TopicQueryString value
     * @return string|null
     */
    public function getTopicQueryString(): ?string
    {
        return $this->TopicQueryString;
    }
    /**
     * Set TopicQueryString value
     * @param string $topicQueryString
     * @return \StructType\EwsFindBookingCustomersType
     */
    public function setTopicQueryString(?string $topicQueryString = null): self
    {
        // validation for constraint: string
        if (!is_null($topicQueryString) && !is_string($topicQueryString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($topicQueryString, true), gettype($topicQueryString)), __LINE__);
        }
        $this->TopicQueryString = $topicQueryString;
        
        return $this;
    }
    /**
     * Get Context value
     * @return \ArrayType\EwsArrayOfContextProperty|null
     */
    public function getContext(): ?\ArrayType\EwsArrayOfContextProperty
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param \ArrayType\EwsArrayOfContextProperty $context
     * @return \StructType\EwsFindBookingCustomersType
     */
    public function setContext(?\ArrayType\EwsArrayOfContextProperty $context = null): self
    {
        $this->Context = $context;
        
        return $this;
    }
}
