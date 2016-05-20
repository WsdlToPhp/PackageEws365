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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $QueryString;
    /**
     * The MaxResultsCount
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queryString)), __LINE__);
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
        if (!is_null($maxResultsCount) && !is_numeric($maxResultsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxResultsCount)), __LINE__);
        }
        $this->MaxResultsCount = $maxResultsCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsContactPropertySuggestionType
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
