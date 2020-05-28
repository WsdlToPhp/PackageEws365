<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsIndexedPageViewType
     */
    public $IndexedPageItemView;
    /**
     * The PersonaShape
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPersonaResponseShapeType
     */
    public $PersonaShape;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $Restriction;
    /**
     * The AggregationRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $AggregationRestriction;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
     */
    public $SortOrder;
    /**
     * The QueryString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $QueryString;
    /**
     * The SearchPeopleSuggestionIndex
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $SearchPeopleSuggestionIndex;
    /**
     * The TopicQueryString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TopicQueryString;
    /**
     * The Context
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfContextProperty
     */
    public $Context;
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
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageItemView
     * @param \Ews\StructType\EwsPersonaResponseShapeType $personaShape
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @param \Ews\StructType\EwsRestrictionType $aggregationRestriction
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @param string $queryString
     * @param bool $searchPeopleSuggestionIndex
     * @param string $topicQueryString
     * @param \Ews\ArrayType\EwsArrayOfContextProperty $context
     */
    public function __construct(\Ews\StructType\EwsIndexedPageViewType $indexedPageItemView = null, \Ews\StructType\EwsPersonaResponseShapeType $personaShape = null, \Ews\StructType\EwsRestrictionType $restriction = null, \Ews\StructType\EwsRestrictionType $aggregationRestriction = null, \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null, $queryString = null, $searchPeopleSuggestionIndex = null, $topicQueryString = null, \Ews\ArrayType\EwsArrayOfContextProperty $context = null)
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
     * @return \Ews\StructType\EwsIndexedPageViewType
     */
    public function getIndexedPageItemView()
    {
        return $this->IndexedPageItemView;
    }
    /**
     * Set IndexedPageItemView value
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageItemView
     * @return \Ews\StructType\EwsFindBookingCustomersType
     */
    public function setIndexedPageItemView(\Ews\StructType\EwsIndexedPageViewType $indexedPageItemView = null)
    {
        $this->IndexedPageItemView = $indexedPageItemView;
        return $this;
    }
    /**
     * Get PersonaShape value
     * @return \Ews\StructType\EwsPersonaResponseShapeType|null
     */
    public function getPersonaShape()
    {
        return $this->PersonaShape;
    }
    /**
     * Set PersonaShape value
     * @param \Ews\StructType\EwsPersonaResponseShapeType $personaShape
     * @return \Ews\StructType\EwsFindBookingCustomersType
     */
    public function setPersonaShape(\Ews\StructType\EwsPersonaResponseShapeType $personaShape = null)
    {
        $this->PersonaShape = $personaShape;
        return $this;
    }
    /**
     * Get Restriction value
     * @return \Ews\StructType\EwsRestrictionType|null
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @return \Ews\StructType\EwsFindBookingCustomersType
     */
    public function setRestriction(\Ews\StructType\EwsRestrictionType $restriction = null)
    {
        $this->Restriction = $restriction;
        return $this;
    }
    /**
     * Get AggregationRestriction value
     * @return \Ews\StructType\EwsRestrictionType|null
     */
    public function getAggregationRestriction()
    {
        return $this->AggregationRestriction;
    }
    /**
     * Set AggregationRestriction value
     * @param \Ews\StructType\EwsRestrictionType $aggregationRestriction
     * @return \Ews\StructType\EwsFindBookingCustomersType
     */
    public function setAggregationRestriction(\Ews\StructType\EwsRestrictionType $aggregationRestriction = null)
    {
        $this->AggregationRestriction = $aggregationRestriction;
        return $this;
    }
    /**
     * Get SortOrder value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType|null
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @return \Ews\StructType\EwsFindBookingCustomersType
     */
    public function setSortOrder(\Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null)
    {
        $this->SortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get QueryString value
     * @return string|null
     */
    public function getQueryString()
    {
        return $this->QueryString;
    }
    /**
     * Set QueryString value
     * @param string $queryString
     * @return \Ews\StructType\EwsFindBookingCustomersType
     */
    public function setQueryString($queryString = null)
    {
        // validation for constraint: string
        if (!is_null($queryString) && !is_string($queryString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryString, true), gettype($queryString)), __LINE__);
        }
        $this->QueryString = $queryString;
        return $this;
    }
    /**
     * Get SearchPeopleSuggestionIndex value
     * @return bool|null
     */
    public function getSearchPeopleSuggestionIndex()
    {
        return $this->SearchPeopleSuggestionIndex;
    }
    /**
     * Set SearchPeopleSuggestionIndex value
     * @param bool $searchPeopleSuggestionIndex
     * @return \Ews\StructType\EwsFindBookingCustomersType
     */
    public function setSearchPeopleSuggestionIndex($searchPeopleSuggestionIndex = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchPeopleSuggestionIndex) && !is_bool($searchPeopleSuggestionIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchPeopleSuggestionIndex, true), gettype($searchPeopleSuggestionIndex)), __LINE__);
        }
        $this->SearchPeopleSuggestionIndex = $searchPeopleSuggestionIndex;
        return $this;
    }
    /**
     * Get TopicQueryString value
     * @return string|null
     */
    public function getTopicQueryString()
    {
        return $this->TopicQueryString;
    }
    /**
     * Set TopicQueryString value
     * @param string $topicQueryString
     * @return \Ews\StructType\EwsFindBookingCustomersType
     */
    public function setTopicQueryString($topicQueryString = null)
    {
        // validation for constraint: string
        if (!is_null($topicQueryString) && !is_string($topicQueryString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($topicQueryString, true), gettype($topicQueryString)), __LINE__);
        }
        $this->TopicQueryString = $topicQueryString;
        return $this;
    }
    /**
     * Get Context value
     * @return \Ews\ArrayType\EwsArrayOfContextProperty|null
     */
    public function getContext()
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param \Ews\ArrayType\EwsArrayOfContextProperty $context
     * @return \Ews\StructType\EwsFindBookingCustomersType
     */
    public function setContext(\Ews\ArrayType\EwsArrayOfContextProperty $context = null)
    {
        $this->Context = $context;
        return $this;
    }
}
