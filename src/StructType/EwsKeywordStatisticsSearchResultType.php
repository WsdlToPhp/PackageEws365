<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeywordStatisticsSearchResultType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Keyword statistics search result.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsKeywordStatisticsSearchResultType extends AbstractStructBase
{
    /**
     * The Keyword
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Keyword;
    /**
     * The ItemHits
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ItemHits;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Size;
    /**
     * Constructor method for KeywordStatisticsSearchResultType
     * @uses EwsKeywordStatisticsSearchResultType::setKeyword()
     * @uses EwsKeywordStatisticsSearchResultType::setItemHits()
     * @uses EwsKeywordStatisticsSearchResultType::setSize()
     * @param string $keyword
     * @param int $itemHits
     * @param int $size
     */
    public function __construct($keyword = null, $itemHits = null, $size = null)
    {
        $this
            ->setKeyword($keyword)
            ->setItemHits($itemHits)
            ->setSize($size);
    }
    /**
     * Get Keyword value
     * @return string
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }
    /**
     * Set Keyword value
     * @param string $keyword
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType
     */
    public function setKeyword($keyword = null)
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keyword)), __LINE__);
        }
        $this->Keyword = $keyword;
        return $this;
    }
    /**
     * Get ItemHits value
     * @return int
     */
    public function getItemHits()
    {
        return $this->ItemHits;
    }
    /**
     * Set ItemHits value
     * @param int $itemHits
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType
     */
    public function setItemHits($itemHits = null)
    {
        // validation for constraint: int
        if (!is_null($itemHits) && !is_int($itemHits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($itemHits)), __LINE__);
        }
        $this->ItemHits = $itemHits;
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
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_int($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType
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
