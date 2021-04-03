<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected bool $MoreResultsAvailable;
    /**
     * The RefinerTelemetryBatchId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $RefinerTelemetryBatchId;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItems|null
     */
    protected ?\StructType\EwsItems $Items = null;
    /**
     * The Conversations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsConversations|null
     */
    protected ?\StructType\EwsConversations $Conversations = null;
    /**
     * The People
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsPeople|null
     */
    protected ?\StructType\EwsPeople $People = null;
    /**
     * The SearchRefiners
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSearchRefiners|null
     */
    protected ?\StructType\EwsSearchRefiners $SearchRefiners = null;
    /**
     * The DiagnosticsData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSearchDiagnosticsType|null
     */
    protected ?\StructType\EwsSearchDiagnosticsType $DiagnosticsData = null;
    /**
     * The SearchResultsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SearchResultsCount = null;
    /**
     * The TotalResultsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalResultsCount = null;
    /**
     * The SearchTerms
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $SearchTerms = null;
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
     * @param \StructType\EwsItems $items
     * @param \StructType\EwsConversations $conversations
     * @param \StructType\EwsPeople $people
     * @param \StructType\EwsSearchRefiners $searchRefiners
     * @param \StructType\EwsSearchDiagnosticsType $diagnosticsData
     * @param int $searchResultsCount
     * @param int $totalResultsCount
     * @param \ArrayType\EwsArrayOfStringsType $searchTerms
     */
    public function __construct(bool $moreResultsAvailable, int $refinerTelemetryBatchId, ?\StructType\EwsItems $items = null, ?\StructType\EwsConversations $conversations = null, ?\StructType\EwsPeople $people = null, ?\StructType\EwsSearchRefiners $searchRefiners = null, ?\StructType\EwsSearchDiagnosticsType $diagnosticsData = null, ?int $searchResultsCount = null, ?int $totalResultsCount = null, ?\ArrayType\EwsArrayOfStringsType $searchTerms = null)
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
    public function getMoreResultsAvailable(): bool
    {
        return $this->MoreResultsAvailable;
    }
    /**
     * Set MoreResultsAvailable value
     * @param bool $moreResultsAvailable
     * @return \StructType\EwsSearchResultsType
     */
    public function setMoreResultsAvailable(bool $moreResultsAvailable): self
    {
        // validation for constraint: boolean
        if (!is_null($moreResultsAvailable) && !is_bool($moreResultsAvailable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreResultsAvailable, true), gettype($moreResultsAvailable)), __LINE__);
        }
        $this->MoreResultsAvailable = $moreResultsAvailable;
        
        return $this;
    }
    /**
     * Get RefinerTelemetryBatchId value
     * @return int
     */
    public function getRefinerTelemetryBatchId(): int
    {
        return $this->RefinerTelemetryBatchId;
    }
    /**
     * Set RefinerTelemetryBatchId value
     * @param int $refinerTelemetryBatchId
     * @return \StructType\EwsSearchResultsType
     */
    public function setRefinerTelemetryBatchId(int $refinerTelemetryBatchId): self
    {
        // validation for constraint: int
        if (!is_null($refinerTelemetryBatchId) && !(is_int($refinerTelemetryBatchId) || ctype_digit($refinerTelemetryBatchId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refinerTelemetryBatchId, true), gettype($refinerTelemetryBatchId)), __LINE__);
        }
        $this->RefinerTelemetryBatchId = $refinerTelemetryBatchId;
        
        return $this;
    }
    /**
     * Get Items value
     * @return \StructType\EwsItems|null
     */
    public function getItems(): ?\StructType\EwsItems
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \StructType\EwsItems $items
     * @return \StructType\EwsSearchResultsType
     */
    public function setItems(?\StructType\EwsItems $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
    /**
     * Get Conversations value
     * @return \StructType\EwsConversations|null
     */
    public function getConversations(): ?\StructType\EwsConversations
    {
        return $this->Conversations;
    }
    /**
     * Set Conversations value
     * @param \StructType\EwsConversations $conversations
     * @return \StructType\EwsSearchResultsType
     */
    public function setConversations(?\StructType\EwsConversations $conversations = null): self
    {
        $this->Conversations = $conversations;
        
        return $this;
    }
    /**
     * Get People value
     * @return \StructType\EwsPeople|null
     */
    public function getPeople(): ?\StructType\EwsPeople
    {
        return $this->People;
    }
    /**
     * Set People value
     * @param \StructType\EwsPeople $people
     * @return \StructType\EwsSearchResultsType
     */
    public function setPeople(?\StructType\EwsPeople $people = null): self
    {
        $this->People = $people;
        
        return $this;
    }
    /**
     * Get SearchRefiners value
     * @return \StructType\EwsSearchRefiners|null
     */
    public function getSearchRefiners(): ?\StructType\EwsSearchRefiners
    {
        return $this->SearchRefiners;
    }
    /**
     * Set SearchRefiners value
     * @param \StructType\EwsSearchRefiners $searchRefiners
     * @return \StructType\EwsSearchResultsType
     */
    public function setSearchRefiners(?\StructType\EwsSearchRefiners $searchRefiners = null): self
    {
        $this->SearchRefiners = $searchRefiners;
        
        return $this;
    }
    /**
     * Get DiagnosticsData value
     * @return \StructType\EwsSearchDiagnosticsType|null
     */
    public function getDiagnosticsData(): ?\StructType\EwsSearchDiagnosticsType
    {
        return $this->DiagnosticsData;
    }
    /**
     * Set DiagnosticsData value
     * @param \StructType\EwsSearchDiagnosticsType $diagnosticsData
     * @return \StructType\EwsSearchResultsType
     */
    public function setDiagnosticsData(?\StructType\EwsSearchDiagnosticsType $diagnosticsData = null): self
    {
        $this->DiagnosticsData = $diagnosticsData;
        
        return $this;
    }
    /**
     * Get SearchResultsCount value
     * @return int|null
     */
    public function getSearchResultsCount(): ?int
    {
        return $this->SearchResultsCount;
    }
    /**
     * Set SearchResultsCount value
     * @param int $searchResultsCount
     * @return \StructType\EwsSearchResultsType
     */
    public function setSearchResultsCount(?int $searchResultsCount = null): self
    {
        // validation for constraint: int
        if (!is_null($searchResultsCount) && !(is_int($searchResultsCount) || ctype_digit($searchResultsCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searchResultsCount, true), gettype($searchResultsCount)), __LINE__);
        }
        $this->SearchResultsCount = $searchResultsCount;
        
        return $this;
    }
    /**
     * Get TotalResultsCount value
     * @return int|null
     */
    public function getTotalResultsCount(): ?int
    {
        return $this->TotalResultsCount;
    }
    /**
     * Set TotalResultsCount value
     * @param int $totalResultsCount
     * @return \StructType\EwsSearchResultsType
     */
    public function setTotalResultsCount(?int $totalResultsCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalResultsCount) && !(is_int($totalResultsCount) || ctype_digit($totalResultsCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalResultsCount, true), gettype($totalResultsCount)), __LINE__);
        }
        $this->TotalResultsCount = $totalResultsCount;
        
        return $this;
    }
    /**
     * Get SearchTerms value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getSearchTerms(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->SearchTerms;
    }
    /**
     * Set SearchTerms value
     * @param \ArrayType\EwsArrayOfStringsType $searchTerms
     * @return \StructType\EwsSearchResultsType
     */
    public function setSearchTerms(?\ArrayType\EwsArrayOfStringsType $searchTerms = null): self
    {
        $this->SearchTerms = $searchTerms;
        
        return $this;
    }
}
