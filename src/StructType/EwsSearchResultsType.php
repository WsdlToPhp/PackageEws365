<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchResultsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchResultsType extends AbstractStructBase
{
    /**
     * The MoreResultsAvailable
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $MoreResultsAvailable;
    /**
     * The RefinerTelemetryBatchId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RefinerTelemetryBatchId;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItems
     */
    public $Items;
    /**
     * The Conversations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsConversations
     */
    public $Conversations;
    /**
     * The People
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPeople
     */
    public $People;
    /**
     * The SearchRefiners
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSearchRefiners
     */
    public $SearchRefiners;
    /**
     * The DiagnosticsData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSearchDiagnosticsType
     */
    public $DiagnosticsData;
    /**
     * The SearchResultsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $SearchResultsCount;
    /**
     * The TotalResultsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TotalResultsCount;
    /**
     * The SearchTerms
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $SearchTerms;
    /**
     * Constructor method for SearchResultsType
     * @uses EwsSearchResultsType::setMoreResultsAvailable()
     * @uses EwsSearchResultsType::setRefinerTelemetryBatchId()
     * @uses EwsSearchResultsType::setItems()
     * @uses EwsSearchResultsType::setConversations()
     * @uses EwsSearchResultsType::setPeople()
     * @uses EwsSearchResultsType::setSearchRefiners()
     * @uses EwsSearchResultsType::setDiagnosticsData()
     * @uses EwsSearchResultsType::setSearchResultsCount()
     * @uses EwsSearchResultsType::setTotalResultsCount()
     * @uses EwsSearchResultsType::setSearchTerms()
     * @param bool $moreResultsAvailable
     * @param int $refinerTelemetryBatchId
     * @param \Ews\StructType\EwsItems $items
     * @param \Ews\StructType\EwsConversations $conversations
     * @param \Ews\StructType\EwsPeople $people
     * @param \Ews\StructType\EwsSearchRefiners $searchRefiners
     * @param \Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData
     * @param int $searchResultsCount
     * @param int $totalResultsCount
     * @param \Ews\ArrayType\EwsArrayOfStringsType $searchTerms
     */
    public function __construct($moreResultsAvailable = null, $refinerTelemetryBatchId = null, \Ews\StructType\EwsItems $items = null, \Ews\StructType\EwsConversations $conversations = null, \Ews\StructType\EwsPeople $people = null, \Ews\StructType\EwsSearchRefiners $searchRefiners = null, \Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData = null, $searchResultsCount = null, $totalResultsCount = null, \Ews\ArrayType\EwsArrayOfStringsType $searchTerms = null)
    {
        $this
            ->setMoreResultsAvailable($moreResultsAvailable)
            ->setRefinerTelemetryBatchId($refinerTelemetryBatchId)
            ->setItems($items)
            ->setConversations($conversations)
            ->setPeople($people)
            ->setSearchRefiners($searchRefiners)
            ->setDiagnosticsData($diagnosticsData)
            ->setSearchResultsCount($searchResultsCount)
            ->setTotalResultsCount($totalResultsCount)
            ->setSearchTerms($searchTerms);
    }
    /**
     * Get MoreResultsAvailable value
     * @return bool
     */
    public function getMoreResultsAvailable()
    {
        return $this->MoreResultsAvailable;
    }
    /**
     * Set MoreResultsAvailable value
     * @param bool $moreResultsAvailable
     * @return \Ews\StructType\EwsSearchResultsType
     */
    public function setMoreResultsAvailable($moreResultsAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($moreResultsAvailable) && !is_bool($moreResultsAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreResultsAvailable, true), gettype($moreResultsAvailable)), __LINE__);
        }
        $this->MoreResultsAvailable = $moreResultsAvailable;
        return $this;
    }
    /**
     * Get RefinerTelemetryBatchId value
     * @return int
     */
    public function getRefinerTelemetryBatchId()
    {
        return $this->RefinerTelemetryBatchId;
    }
    /**
     * Set RefinerTelemetryBatchId value
     * @param int $refinerTelemetryBatchId
     * @return \Ews\StructType\EwsSearchResultsType
     */
    public function setRefinerTelemetryBatchId($refinerTelemetryBatchId = null)
    {
        // validation for constraint: int
        if (!is_null($refinerTelemetryBatchId) && !(is_int($refinerTelemetryBatchId) || ctype_digit($refinerTelemetryBatchId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refinerTelemetryBatchId, true), gettype($refinerTelemetryBatchId)), __LINE__);
        }
        $this->RefinerTelemetryBatchId = $refinerTelemetryBatchId;
        return $this;
    }
    /**
     * Get Items value
     * @return \Ews\StructType\EwsItems|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\StructType\EwsItems $items
     * @return \Ews\StructType\EwsSearchResultsType
     */
    public function setItems(\Ews\StructType\EwsItems $items = null)
    {
        $this->Items = $items;
        return $this;
    }
    /**
     * Get Conversations value
     * @return \Ews\StructType\EwsConversations|null
     */
    public function getConversations()
    {
        return $this->Conversations;
    }
    /**
     * Set Conversations value
     * @param \Ews\StructType\EwsConversations $conversations
     * @return \Ews\StructType\EwsSearchResultsType
     */
    public function setConversations(\Ews\StructType\EwsConversations $conversations = null)
    {
        $this->Conversations = $conversations;
        return $this;
    }
    /**
     * Get People value
     * @return \Ews\StructType\EwsPeople|null
     */
    public function getPeople()
    {
        return $this->People;
    }
    /**
     * Set People value
     * @param \Ews\StructType\EwsPeople $people
     * @return \Ews\StructType\EwsSearchResultsType
     */
    public function setPeople(\Ews\StructType\EwsPeople $people = null)
    {
        $this->People = $people;
        return $this;
    }
    /**
     * Get SearchRefiners value
     * @return \Ews\StructType\EwsSearchRefiners|null
     */
    public function getSearchRefiners()
    {
        return $this->SearchRefiners;
    }
    /**
     * Set SearchRefiners value
     * @param \Ews\StructType\EwsSearchRefiners $searchRefiners
     * @return \Ews\StructType\EwsSearchResultsType
     */
    public function setSearchRefiners(\Ews\StructType\EwsSearchRefiners $searchRefiners = null)
    {
        $this->SearchRefiners = $searchRefiners;
        return $this;
    }
    /**
     * Get DiagnosticsData value
     * @return \Ews\StructType\EwsSearchDiagnosticsType|null
     */
    public function getDiagnosticsData()
    {
        return $this->DiagnosticsData;
    }
    /**
     * Set DiagnosticsData value
     * @param \Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData
     * @return \Ews\StructType\EwsSearchResultsType
     */
    public function setDiagnosticsData(\Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData = null)
    {
        $this->DiagnosticsData = $diagnosticsData;
        return $this;
    }
    /**
     * Get SearchResultsCount value
     * @return int|null
     */
    public function getSearchResultsCount()
    {
        return $this->SearchResultsCount;
    }
    /**
     * Set SearchResultsCount value
     * @param int $searchResultsCount
     * @return \Ews\StructType\EwsSearchResultsType
     */
    public function setSearchResultsCount($searchResultsCount = null)
    {
        // validation for constraint: int
        if (!is_null($searchResultsCount) && !(is_int($searchResultsCount) || ctype_digit($searchResultsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searchResultsCount, true), gettype($searchResultsCount)), __LINE__);
        }
        $this->SearchResultsCount = $searchResultsCount;
        return $this;
    }
    /**
     * Get TotalResultsCount value
     * @return int|null
     */
    public function getTotalResultsCount()
    {
        return $this->TotalResultsCount;
    }
    /**
     * Set TotalResultsCount value
     * @param int $totalResultsCount
     * @return \Ews\StructType\EwsSearchResultsType
     */
    public function setTotalResultsCount($totalResultsCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalResultsCount) && !(is_int($totalResultsCount) || ctype_digit($totalResultsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalResultsCount, true), gettype($totalResultsCount)), __LINE__);
        }
        $this->TotalResultsCount = $totalResultsCount;
        return $this;
    }
    /**
     * Get SearchTerms value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getSearchTerms()
    {
        return $this->SearchTerms;
    }
    /**
     * Set SearchTerms value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $searchTerms
     * @return \Ews\StructType\EwsSearchResultsType
     */
    public function setSearchTerms(\Ews\ArrayType\EwsArrayOfStringsType $searchTerms = null)
    {
        $this->SearchTerms = $searchTerms;
        return $this;
    }
}
