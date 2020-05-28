<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteSearchResponseMessage StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExecuteSearchResponseMessage extends EwsResponseMessageType
{
    /**
     * The SearchResults
     * @var \Ews\StructType\EwsSearchResultsType
     */
    public $SearchResults;
    /**
     * Constructor method for ExecuteSearchResponseMessage
     * @uses EwsExecuteSearchResponseMessage::setSearchResults()
     * @param \Ews\StructType\EwsSearchResultsType $searchResults
     */
    public function __construct(\Ews\StructType\EwsSearchResultsType $searchResults = null)
    {
        $this
            ->setSearchResults($searchResults);
    }
    /**
     * Get SearchResults value
     * @return \Ews\StructType\EwsSearchResultsType|null
     */
    public function getSearchResults()
    {
        return $this->SearchResults;
    }
    /**
     * Set SearchResults value
     * @param \Ews\StructType\EwsSearchResultsType $searchResults
     * @return \Ews\StructType\EwsExecuteSearchResponseMessage
     */
    public function setSearchResults(\Ews\StructType\EwsSearchResultsType $searchResults = null)
    {
        $this->SearchResults = $searchResults;
        return $this;
    }
}
