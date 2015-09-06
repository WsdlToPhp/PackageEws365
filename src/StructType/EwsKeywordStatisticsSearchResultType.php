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
     * @var long
     */
    public $Size;
    /**
     * Constructor method for KeywordStatisticsSearchResultType
     * @uses EwsKeywordStatisticsSearchResultType::setKeyword()
     * @uses EwsKeywordStatisticsSearchResultType::setItemHits()
     * @uses EwsKeywordStatisticsSearchResultType::setSize()
     * @param string $keyword
     * @param int $itemHits
     * @param long $size
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
        $this->ItemHits = $itemHits;
        return $this;
    }
    /**
     * Get Size value
     * @return long
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param long $size
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType
     */
    public function setSize($size = null)
    {
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
