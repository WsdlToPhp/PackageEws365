<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeywordStatisticsSearchResultsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of keyword statistics result.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfKeywordStatisticsSearchResultsType extends AbstractStructArrayBase
{
    /**
     * The KeywordStat
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Keyword statistics search result.
     * @var array
     */
    public $KeywordStat;
    /**
     * Constructor method for ArrayOfKeywordStatisticsSearchResultsType
     * @uses EwsArrayOfKeywordStatisticsSearchResultsType::setKeywordStat()
     * @param array $keywordStat
     */
    public function __construct(array $keywordStat = array())
    {
        $this
            ->setKeywordStat($keywordStat);
    }
    /**
     * Get KeywordStat value
     * @return array
     */
    public function getKeywordStat()
    {
        return $this->KeywordStat;
    }
    /**
     * Set KeywordStat value
     * @param array $keywordStat
     * @return \Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType
     */
    public function setKeywordStat(array $keywordStat = array())
    {
        $this->KeywordStat = $keywordStat;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeywordStat
     */
    public function getAttributeName()
    {
        return 'KeywordStat';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType
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
