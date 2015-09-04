<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteSearchResponseMessage StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExecuteSearchResponseMessage
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
