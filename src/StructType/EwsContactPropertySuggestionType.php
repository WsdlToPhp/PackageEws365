<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactPropertySuggestionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactPropertySuggestionType extends EwsBaseRequestType
{
    /**
     * The QueryString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $QueryString;
    /**
     * The MaxResultsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxResultsCount;
    /**
     * Constructor method for ContactPropertySuggestionType
     * @uses EwsContactPropertySuggestionType::setQueryString()
     * @uses EwsContactPropertySuggestionType::setMaxResultsCount()
     * @param string $queryString
     * @param int $maxResultsCount
     */
    public function __construct($queryString = null, $maxResultsCount = null)
    {
        $this
            ->setQueryString($queryString)
            ->setMaxResultsCount($maxResultsCount);
    }
    /**
     * Get QueryString value
     * @return string
     */
    public function getQueryString()
    {
        return $this->QueryString;
    }
    /**
     * Set QueryString value
     * @param string $queryString
     * @return \Ews\StructType\EwsContactPropertySuggestionType
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
     * Get MaxResultsCount value
     * @return int|null
     */
    public function getMaxResultsCount()
    {
        return $this->MaxResultsCount;
    }
    /**
     * Set MaxResultsCount value
     * @param int $maxResultsCount
     * @return \Ews\StructType\EwsContactPropertySuggestionType
     */
    public function setMaxResultsCount($maxResultsCount = null)
    {
        // validation for constraint: int
        if (!is_null($maxResultsCount) && !(is_int($maxResultsCount) || ctype_digit($maxResultsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResultsCount, true), gettype($maxResultsCount)), __LINE__);
        }
        $this->MaxResultsCount = $maxResultsCount;
        return $this;
    }
}
