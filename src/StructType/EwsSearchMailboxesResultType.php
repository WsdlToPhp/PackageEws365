<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMailboxesResultType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Mailboxes search result.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchMailboxesResultType extends AbstractStructBase
{
    /**
     * The SearchQueries
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public $SearchQueries;
    /**
     * The ResultType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ResultType;
    /**
     * The ItemCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $ItemCount;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $Size;
    /**
     * The PageItemCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $PageItemCount;
    /**
     * The PageItemSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $PageItemSize;
    /**
     * The KeywordStats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType
     */
    public $KeywordStats;
    /**
     * The Items
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSearchPreviewItemsType
     */
    public $Items;
    /**
     * The FailedMailboxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType
     */
    public $FailedMailboxes;
    /**
     * The Refiners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSearchRefinerItemsType
     */
    public $Refiners;
    /**
     * The MailboxStats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType
     */
    public $MailboxStats;
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
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries
     * @param string $resultType
     * @param int $itemCount
     * @param int $size
     * @param int $pageItemCount
     * @param int $pageItemSize
     * @param \Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType $keywordStats
     * @param \Ews\ArrayType\EwsArrayOfSearchPreviewItemsType $items
     * @param \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     * @param \Ews\ArrayType\EwsArrayOfSearchRefinerItemsType $refiners
     * @param \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType $mailboxStats
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries = null, $resultType = null, $itemCount = null, $size = null, $pageItemCount = null, $pageItemSize = null, \Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType $keywordStats = null, \Ews\ArrayType\EwsArrayOfSearchPreviewItemsType $items = null, \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null, \Ews\ArrayType\EwsArrayOfSearchRefinerItemsType $refiners = null, \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType $mailboxStats = null)
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
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public function getSearchQueries()
    {
        return $this->SearchQueries;
    }
    /**
     * Set SearchQueries value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setSearchQueries(\Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType $searchQueries = null)
    {
        $this->SearchQueries = $searchQueries;
        return $this;
    }
    /**
     * Get ResultType value
     * @return string
     */
    public function getResultType()
    {
        return $this->ResultType;
    }
    /**
     * Set ResultType value
     * @uses \Ews\EnumType\EwsSearchResultType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchResultType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $resultType
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setResultType($resultType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSearchResultType::valueIsValid($resultType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $resultType, implode(', ', \Ews\EnumType\EwsSearchResultType::getValidValues())), __LINE__);
        }
        $this->ResultType = $resultType;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setItemCount($itemCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !is_numeric($itemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        return $this;
    }
    /**
     * Get Size value
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Get PageItemCount value
     * @return int
     */
    public function getPageItemCount()
    {
        return $this->PageItemCount;
    }
    /**
     * Set PageItemCount value
     * @param int $pageItemCount
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setPageItemCount($pageItemCount = null)
    {
        // validation for constraint: int
        if (!is_null($pageItemCount) && !is_numeric($pageItemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageItemCount)), __LINE__);
        }
        $this->PageItemCount = $pageItemCount;
        return $this;
    }
    /**
     * Get PageItemSize value
     * @return int
     */
    public function getPageItemSize()
    {
        return $this->PageItemSize;
    }
    /**
     * Set PageItemSize value
     * @param int $pageItemSize
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setPageItemSize($pageItemSize = null)
    {
        // validation for constraint: int
        if (!is_null($pageItemSize) && !is_numeric($pageItemSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageItemSize)), __LINE__);
        }
        $this->PageItemSize = $pageItemSize;
        return $this;
    }
    /**
     * Get KeywordStats value
     * @return \Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType|null
     */
    public function getKeywordStats()
    {
        return $this->KeywordStats;
    }
    /**
     * Set KeywordStats value
     * @param \Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType $keywordStats
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setKeywordStats(\Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType $keywordStats = null)
    {
        $this->KeywordStats = $keywordStats;
        return $this;
    }
    /**
     * Get Items value
     * @return \Ews\ArrayType\EwsArrayOfSearchPreviewItemsType|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\ArrayType\EwsArrayOfSearchPreviewItemsType $items
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setItems(\Ews\ArrayType\EwsArrayOfSearchPreviewItemsType $items = null)
    {
        $this->Items = $items;
        return $this;
    }
    /**
     * Get FailedMailboxes value
     * @return \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType|null
     */
    public function getFailedMailboxes()
    {
        return $this->FailedMailboxes;
    }
    /**
     * Set FailedMailboxes value
     * @param \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setFailedMailboxes(\Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType $failedMailboxes = null)
    {
        $this->FailedMailboxes = $failedMailboxes;
        return $this;
    }
    /**
     * Get Refiners value
     * @return \Ews\ArrayType\EwsArrayOfSearchRefinerItemsType|null
     */
    public function getRefiners()
    {
        return $this->Refiners;
    }
    /**
     * Set Refiners value
     * @param \Ews\ArrayType\EwsArrayOfSearchRefinerItemsType $refiners
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setRefiners(\Ews\ArrayType\EwsArrayOfSearchRefinerItemsType $refiners = null)
    {
        $this->Refiners = $refiners;
        return $this;
    }
    /**
     * Get MailboxStats value
     * @return \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType|null
     */
    public function getMailboxStats()
    {
        return $this->MailboxStats;
    }
    /**
     * Set MailboxStats value
     * @param \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType $mailboxStats
     * @return \Ews\StructType\EwsSearchMailboxesResultType
     */
    public function setMailboxStats(\Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType $mailboxStats = null)
    {
        $this->MailboxStats = $mailboxStats;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchMailboxesResultType
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
