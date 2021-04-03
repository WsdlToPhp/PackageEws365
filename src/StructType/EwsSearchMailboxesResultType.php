<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMailboxesResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: Mailboxes search result.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchMailboxesResultType extends AbstractStructBase
{
    /**
     * The SearchQueries
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    protected \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $SearchQueries;
    /**
     * The ResultType
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $ResultType;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    protected int $ItemCount;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    protected int $Size;
    /**
     * The PageItemCount
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    protected int $PageItemCount;
    /**
     * The PageItemSize
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    protected int $PageItemSize;
    /**
     * The KeywordStats
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType|null
     */
    protected ?\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType $KeywordStats = null;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSearchPreviewItemsType|null
     */
    protected ?\ArrayType\EwsArrayOfSearchPreviewItemsType $Items = null;
    /**
     * The FailedMailboxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfFailedSearchMailboxesType|null
     */
    protected ?\ArrayType\EwsArrayOfFailedSearchMailboxesType $FailedMailboxes = null;
    /**
     * The Refiners
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSearchRefinerItemsType|null
     */
    protected ?\ArrayType\EwsArrayOfSearchRefinerItemsType $Refiners = null;
    /**
     * The MailboxStats
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfMailboxStatisticsItemsType|null
     */
    protected ?\ArrayType\EwsArrayOfMailboxStatisticsItemsType $MailboxStats = null;
    /**
     * Constructor method for SearchMailboxesResultType
     * @uses EwsSearchMailboxesResultType::setSearchQueries()
     * @uses EwsSearchMailboxesResultType::setResultType()
     * @uses EwsSearchMailboxesResultType::setItemCount()
     * @uses EwsSearchMailboxesResultType::setSize()
     * @uses EwsSearchMailboxesResultType::setPageItemCount()
     * @uses EwsSearchMailboxesResultType::setPageItemSize()
     * @uses EwsSearchMailboxesResultType::setKeywordStats()
     * @uses EwsSearchMailboxesResultType::setItems()
     * @uses EwsSearchMailboxesResultType::setFailedMailboxes()
     * @uses EwsSearchMailboxesResultType::setRefiners()
     * @uses EwsSearchMailboxesResultType::setMailboxStats()
     * @param \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries
     * @param string $resultType
     * @param int $itemCount
     * @param int $size
     * @param int $pageItemCount
     * @param int $pageItemSize
     * @param \ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType $keywordStats
     * @param \ArrayType\EwsArrayOfSearchPreviewItemsType $items
     * @param \ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     * @param \ArrayType\EwsArrayOfSearchRefinerItemsType $refiners
     * @param \ArrayType\EwsArrayOfMailboxStatisticsItemsType $mailboxStats
     */
    public function __construct(\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries, string $resultType, int $itemCount, int $size, int $pageItemCount, int $pageItemSize, ?\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType $keywordStats = null, ?\ArrayType\EwsArrayOfSearchPreviewItemsType $items = null, ?\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null, ?\ArrayType\EwsArrayOfSearchRefinerItemsType $refiners = null, ?\ArrayType\EwsArrayOfMailboxStatisticsItemsType $mailboxStats = null)
    {
        $this
            ->setSearchQueries($searchQueries)
            ->setResultType($resultType)
            ->setItemCount($itemCount)
            ->setSize($size)
            ->setPageItemCount($pageItemCount)
            ->setPageItemSize($pageItemSize)
            ->setKeywordStats($keywordStats)
            ->setItems($items)
            ->setFailedMailboxes($failedMailboxes)
            ->setRefiners($refiners)
            ->setMailboxStats($mailboxStats);
    }
    /**
     * Get SearchQueries value
     * @return \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public function getSearchQueries(): \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
    {
        return $this->SearchQueries;
    }
    /**
     * Set SearchQueries value
     * @param \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setSearchQueries(\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries): self
    {
        $this->SearchQueries = $searchQueries;
        
        return $this;
    }
    /**
     * Get ResultType value
     * @return string
     */
    public function getResultType(): string
    {
        return $this->ResultType;
    }
    /**
     * Set ResultType value
     * @uses \EnumType\EwsSearchResultType::valueIsValid()
     * @uses \EnumType\EwsSearchResultType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resultType
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setResultType(string $resultType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSearchResultType::valueIsValid($resultType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchResultType', is_array($resultType) ? implode(', ', $resultType) : var_export($resultType, true), implode(', ', \EnumType\EwsSearchResultType::getValidValues())), __LINE__);
        }
        $this->ResultType = $resultType;
        
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int
     */
    public function getItemCount(): int
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setItemCount(int $itemCount): self
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !(is_int($itemCount) || ctype_digit($itemCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemCount, true), gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        
        return $this;
    }
    /**
     * Get Size value
     * @return int
     */
    public function getSize(): int
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setSize(int $size): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;
        
        return $this;
    }
    /**
     * Get PageItemCount value
     * @return int
     */
    public function getPageItemCount(): int
    {
        return $this->PageItemCount;
    }
    /**
     * Set PageItemCount value
     * @param int $pageItemCount
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setPageItemCount(int $pageItemCount): self
    {
        // validation for constraint: int
        if (!is_null($pageItemCount) && !(is_int($pageItemCount) || ctype_digit($pageItemCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageItemCount, true), gettype($pageItemCount)), __LINE__);
        }
        $this->PageItemCount = $pageItemCount;
        
        return $this;
    }
    /**
     * Get PageItemSize value
     * @return int
     */
    public function getPageItemSize(): int
    {
        return $this->PageItemSize;
    }
    /**
     * Set PageItemSize value
     * @param int $pageItemSize
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setPageItemSize(int $pageItemSize): self
    {
        // validation for constraint: int
        if (!is_null($pageItemSize) && !(is_int($pageItemSize) || ctype_digit($pageItemSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageItemSize, true), gettype($pageItemSize)), __LINE__);
        }
        $this->PageItemSize = $pageItemSize;
        
        return $this;
    }
    /**
     * Get KeywordStats value
     * @return \ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType|null
     */
    public function getKeywordStats(): ?\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType
    {
        return $this->KeywordStats;
    }
    /**
     * Set KeywordStats value
     * @param \ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType $keywordStats
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setKeywordStats(?\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType $keywordStats = null): self
    {
        $this->KeywordStats = $keywordStats;
        
        return $this;
    }
    /**
     * Get Items value
     * @return \ArrayType\EwsArrayOfSearchPreviewItemsType|null
     */
    public function getItems(): ?\ArrayType\EwsArrayOfSearchPreviewItemsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \ArrayType\EwsArrayOfSearchPreviewItemsType $items
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setItems(?\ArrayType\EwsArrayOfSearchPreviewItemsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
    /**
     * Get FailedMailboxes value
     * @return \ArrayType\EwsArrayOfFailedSearchMailboxesType|null
     */
    public function getFailedMailboxes(): ?\ArrayType\EwsArrayOfFailedSearchMailboxesType
    {
        return $this->FailedMailboxes;
    }
    /**
     * Set FailedMailboxes value
     * @param \ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setFailedMailboxes(?\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null): self
    {
        $this->FailedMailboxes = $failedMailboxes;
        
        return $this;
    }
    /**
     * Get Refiners value
     * @return \ArrayType\EwsArrayOfSearchRefinerItemsType|null
     */
    public function getRefiners(): ?\ArrayType\EwsArrayOfSearchRefinerItemsType
    {
        return $this->Refiners;
    }
    /**
     * Set Refiners value
     * @param \ArrayType\EwsArrayOfSearchRefinerItemsType $refiners
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setRefiners(?\ArrayType\EwsArrayOfSearchRefinerItemsType $refiners = null): self
    {
        $this->Refiners = $refiners;
        
        return $this;
    }
    /**
     * Get MailboxStats value
     * @return \ArrayType\EwsArrayOfMailboxStatisticsItemsType|null
     */
    public function getMailboxStats(): ?\ArrayType\EwsArrayOfMailboxStatisticsItemsType
    {
        return $this->MailboxStats;
    }
    /**
     * Set MailboxStats value
     * @param \ArrayType\EwsArrayOfMailboxStatisticsItemsType $mailboxStats
     * @return \StructType\EwsSearchMailboxesResultType
     */
    public function setMailboxStats(?\ArrayType\EwsArrayOfMailboxStatisticsItemsType $mailboxStats = null): self
    {
        $this->MailboxStats = $mailboxStats;
        
        return $this;
    }
}
