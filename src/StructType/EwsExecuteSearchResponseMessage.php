<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsSearchResultsType|null
     */
    protected ?\StructType\EwsSearchResultsType $SearchResults = null;
    /**
     * Constructor method for ExecuteSearchResponseMessage
     * @uses EwsExecuteSearchResponseMessage::setSearchResults()
     * @param \StructType\EwsSearchResultsType $searchResults
     */
    public function __construct(?\StructType\EwsSearchResultsType $searchResults = null)
    {
        $this
            ->setSearchResults($searchResults);
    }
    /**
     * Get SearchResults value
     * @return \StructType\EwsSearchResultsType|null
     */
    public function getSearchResults(): ?\StructType\EwsSearchResultsType
    {
        return $this->SearchResults;
    }
    /**
     * Set SearchResults value
     * @param \StructType\EwsSearchResultsType $searchResults
     * @return \StructType\EwsExecuteSearchResponseMessage
     */
    public function setSearchResults(?\StructType\EwsSearchResultsType $searchResults = null): self
    {
        $this->SearchResults = $searchResults;
        
        return $this;
    }
}
