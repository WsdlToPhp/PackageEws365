<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsKeywordStatisticsSearchResultType[]
     */
    protected array $KeywordStat = [];
    /**
     * Constructor method for ArrayOfKeywordStatisticsSearchResultsType
     * @uses EwsArrayOfKeywordStatisticsSearchResultsType::setKeywordStat()
     * @param \StructType\EwsKeywordStatisticsSearchResultType[] $keywordStat
     */
    public function __construct(array $keywordStat = [])
    {
        $this
            ->setKeywordStat($keywordStat);
    }
    /**
     * Get KeywordStat value
     * @return \StructType\EwsKeywordStatisticsSearchResultType[]
     */
    public function getKeywordStat(): array
    {
        return $this->KeywordStat;
    }
    /**
     * This method is responsible for validating the values passed to the setKeywordStat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeywordStat method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeywordStatForArrayConstraintsFromSetKeywordStat(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem instanceof \StructType\EwsKeywordStatisticsSearchResultType) {
                $invalidValues[] = is_object($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem) ? get_class($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem) : sprintf('%s(%s)', gettype($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem), var_export($arrayOfKeywordStatisticsSearchResultsTypeKeywordStatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeywordStat property can only contain items of type \StructType\EwsKeywordStatisticsSearchResultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set KeywordStat value
     * @throws InvalidArgumentException
     * @param \StructType\EwsKeywordStatisticsSearchResultType[] $keywordStat
     * @return \ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType
     */
    public function setKeywordStat(array $keywordStat = []): self
    {
        // validation for constraint: array
        if ('' !== ($keywordStatArrayErrorMessage = self::validateKeywordStatForArrayConstraintsFromSetKeywordStat($keywordStat))) {
            throw new InvalidArgumentException($keywordStatArrayErrorMessage, __LINE__);
        }
        $this->KeywordStat = $keywordStat;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function current(): ?\StructType\EwsKeywordStatisticsSearchResultType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function item($index): ?\StructType\EwsKeywordStatisticsSearchResultType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function first(): ?\StructType\EwsKeywordStatisticsSearchResultType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function last(): ?\StructType\EwsKeywordStatisticsSearchResultType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function offsetGet($offset): ?\StructType\EwsKeywordStatisticsSearchResultType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsKeywordStatisticsSearchResultType $item
     * @return \ArrayType\EwsArrayOfKeywordStatisticsSearchResultsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsKeywordStatisticsSearchResultType) {
            throw new InvalidArgumentException(sprintf('The KeywordStat property can only contain items of type \StructType\EwsKeywordStatisticsSearchResultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeywordStat
     */
    public function getAttributeName(): string
    {
        return 'KeywordStat';
    }
}
