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
     * @var \Ews\StructType\EwsKeywordStatisticsSearchResultType[]
     */
    public $KeywordStat;
    /**
     * Constructor method for ArrayOfKeywordStatisticsSearchResultsType
     * @uses EwsArrayOfKeywordStatisticsSearchResultsType::setKeywordStat()
     * @param \Ews\StructType\EwsKeywordStatisticsSearchResultType[] $keywordStat
     */
    public function __construct(array $keywordStat = array())
    {
        $this
            ->setKeywordStat($keywordStat);
    }
    /**
     * Get KeywordStat value
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType[]|null
     */
    public function getKeywordStat()
    {
        return $this->KeywordStat;
    }
    /**
     * Set KeywordStat value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsKeywordStatisticsSearchResultType[] $keywordStat
     * @return \Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType
     */
    public function setKeywordStat(array $keywordStat = array())
    {
        foreach ($keywordStat as $arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem instanceof \Ews\StructType\EwsKeywordStatisticsSearchResultType) {
                throw new \InvalidArgumentException(sprintf('The KeywordStat property can only contain items of \Ews\StructType\EwsKeywordStatisticsSearchResultType, "%s" given', is_object($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem) ? get_class($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem) : gettype($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem)), __LINE__);
            }
        }
        $this->KeywordStat = $keywordStat;
        return $this;
    }
    /**
     * Add item to KeywordStat value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsKeywordStatisticsSearchResultType $item
     * @return \Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType
     */
    public function addToKeywordStat(\Ews\StructType\EwsKeywordStatisticsSearchResultType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsKeywordStatisticsSearchResultType) {
            throw new \InvalidArgumentException(sprintf('The KeywordStat property can only contain items of \Ews\StructType\EwsKeywordStatisticsSearchResultType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->KeywordStat[] = $item;
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
