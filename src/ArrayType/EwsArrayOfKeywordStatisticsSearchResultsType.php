<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeywordStatisticsSearchResultsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of keyword statistics result.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfKeywordStatisticsSearchResultsType extends AbstractStructArrayBase
{
    /**
     * The KeywordStat
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setKeywordStat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeywordStat method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeywordStatForArrayConstraintsFromSetKeywordStat(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem instanceof \Ews\StructType\EwsKeywordStatisticsSearchResultType) {
                $invalidValues[] = is_object($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem) ? get_class($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem) : sprintf('%s(%s)', gettype($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem), var_export($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeywordStat property can only contain items of type \Ews\StructType\EwsKeywordStatisticsSearchResultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set KeywordStat value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsKeywordStatisticsSearchResultType[] $keywordStat
     * @return \Ews\ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType
     */
    public function setKeywordStat(array $keywordStat = array())
    {
        // validation for constraint: array
        if ('' !== ($keywordStatArrayErrorMessage = self::validateKeywordStatForArrayConstraintsFromSetKeywordStat($keywordStat))) {
            throw new \InvalidArgumentException($keywordStatArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The KeywordStat property can only contain items of type \Ews\StructType\EwsKeywordStatisticsSearchResultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
