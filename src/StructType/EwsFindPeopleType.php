<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPeopleType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindPeopleType extends EwsBaseRequestType
{
    /**
     * The IndexedPageItemView
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsIndexedPageViewType
     */
    public $IndexedPageItemView;
    /**
     * The PersonaShape
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPersonaResponseShapeType
     */
    public $PersonaShape;
    /**
     * The Restriction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: t:SearchExpression
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $Restriction;
    /**
     * The AggregationRestriction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: t:SearchExpression
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $AggregationRestriction;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
     */
    public $SortOrder;
    /**
     * The ParentFolderId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ParentFolderId;
    /**
     * The QueryString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $QueryString;
    /**
     * The SearchPeopleSuggestionIndex
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $SearchPeopleSuggestionIndex;
    /**
     * The TopicQueryString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TopicQueryString;
    /**
     * The Context
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfContextProperty
     */
    public $Context;
    /**
     * The QuerySources
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPeopleQuerySource
     */
    public $QuerySources;
    /**
     * Constructor method for FindPeopleType
     * @uses EwsFindPeopleType::setIndexedPageItemView()
     * @uses EwsFindPeopleType::setPersonaShape()
     * @uses EwsFindPeopleType::setRestriction()
     * @uses EwsFindPeopleType::setAggregationRestriction()
     * @uses EwsFindPeopleType::setSortOrder()
     * @uses EwsFindPeopleType::setParentFolderId()
     * @uses EwsFindPeopleType::setQueryString()
     * @uses EwsFindPeopleType::setSearchPeopleSuggestionIndex()
     * @uses EwsFindPeopleType::setTopicQueryString()
     * @uses EwsFindPeopleType::setContext()
     * @uses EwsFindPeopleType::setQuerySources()
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageItemView
     * @param \Ews\StructType\EwsPersonaResponseShapeType $personaShape
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @param \Ews\StructType\EwsRestrictionType $aggregationRestriction
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @param \Ews\StructType\EwsTargetFolderIdType $parentFolderId
     * @param string $queryString
     * @param boolean $searchPeopleSuggestionIndex
     * @param string $topicQueryString
     * @param \Ews\ArrayType\EwsArrayOfContextProperty $context
     * @param \Ews\ArrayType\EwsArrayOfPeopleQuerySource $querySources
     */
    public function __construct(\Ews\StructType\EwsIndexedPageViewType $indexedPageItemView = null, \Ews\StructType\EwsPersonaResponseShapeType $personaShape = null, \Ews\StructType\EwsRestrictionType $restriction = null, \Ews\StructType\EwsRestrictionType $aggregationRestriction = null, \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null, \Ews\StructType\EwsTargetFolderIdType $parentFolderId = null, $queryString = null, $searchPeopleSuggestionIndex = null, $topicQueryString = null, \Ews\ArrayType\EwsArrayOfContextProperty $context = null, \Ews\ArrayType\EwsArrayOfPeopleQuerySource $querySources = null)
    {
        $this
            ->setIndexedPageItemView($indexedPageItemView)
            ->setPersonaShape($personaShape)
            ->setRestriction($restriction)
            ->setAggregationRestriction($aggregationRestriction)
            ->setSortOrder($sortOrder)
            ->setParentFolderId($parentFolderId)
            ->setQueryString($queryString)
            ->setSearchPeopleSuggestionIndex($searchPeopleSuggestionIndex)
            ->setTopicQueryString($topicQueryString)
            ->setContext($context)
            ->setQuerySources($querySources);
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
     * @return \Ews\StructType\EwsFindPeopleType
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
     * @return \Ews\StructType\EwsFindPeopleType
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
     * @return \Ews\StructType\EwsFindPeopleType
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
     * @return \Ews\StructType\EwsFindPeopleType
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
     * @return \Ews\StructType\EwsFindPeopleType
     */
    public function setSortOrder(\Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null)
    {
        $this->SortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get ParentFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getParentFolderId()
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $parentFolderId
     * @return \Ews\StructType\EwsFindPeopleType
     */
    public function setParentFolderId(\Ews\StructType\EwsTargetFolderIdType $parentFolderId = null)
    {
        $this->ParentFolderId = $parentFolderId;
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
     * @return \Ews\StructType\EwsFindPeopleType
     */
    public function setQueryString($queryString = null)
    {
        $this->QueryString = $queryString;
        return $this;
    }
    /**
     * Get SearchPeopleSuggestionIndex value
     * @return boolean|null
     */
    public function getSearchPeopleSuggestionIndex()
    {
        return $this->SearchPeopleSuggestionIndex;
    }
    /**
     * Set SearchPeopleSuggestionIndex value
     * @param boolean $searchPeopleSuggestionIndex
     * @return \Ews\StructType\EwsFindPeopleType
     */
    public function setSearchPeopleSuggestionIndex($searchPeopleSuggestionIndex = null)
    {
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
     * @return \Ews\StructType\EwsFindPeopleType
     */
    public function setTopicQueryString($topicQueryString = null)
    {
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
     * @return \Ews\StructType\EwsFindPeopleType
     */
    public function setContext(\Ews\ArrayType\EwsArrayOfContextProperty $context = null)
    {
        $this->Context = $context;
        return $this;
    }
    /**
     * Get QuerySources value
     * @return \Ews\ArrayType\EwsArrayOfPeopleQuerySource|null
     */
    public function getQuerySources()
    {
        return $this->QuerySources;
    }
    /**
     * Set QuerySources value
     * @param \Ews\ArrayType\EwsArrayOfPeopleQuerySource $querySources
     * @return \Ews\StructType\EwsFindPeopleType
     */
    public function setQuerySources(\Ews\ArrayType\EwsArrayOfPeopleQuerySource $querySources = null)
    {
        $this->QuerySources = $querySources;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindPeopleType
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
