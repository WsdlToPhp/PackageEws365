<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSuggestionDayResult ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSuggestionDayResult extends AbstractStructArrayBase
{
    /**
     * The SuggestionDayResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSuggestionDayResult[]
     */
    public $SuggestionDayResult;
    /**
     * Constructor method for ArrayOfSuggestionDayResult
     * @uses EwsArrayOfSuggestionDayResult::setSuggestionDayResult()
     * @param \Ews\StructType\EwsSuggestionDayResult[] $suggestionDayResult
     */
    public function __construct(array $suggestionDayResult = array())
    {
        $this
            ->setSuggestionDayResult($suggestionDayResult);
    }
    /**
     * Get SuggestionDayResult value
     * @return \Ews\StructType\EwsSuggestionDayResult[]|null
     */
    public function getSuggestionDayResult()
    {
        return $this->SuggestionDayResult;
    }
    /**
     * This method is responsible for validating the values passed to the setSuggestionDayResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuggestionDayResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuggestionDayResultForArrayConstraintsFromSetSuggestionDayResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSuggestionDayResultSuggestionDayResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfSuggestionDayResultSuggestionDayResultItem instanceof \Ews\StructType\EwsSuggestionDayResult) {
                $invalidValues[] = is_object($arrayOfSuggestionDayResultSuggestionDayResultItem) ? get_class($arrayOfSuggestionDayResultSuggestionDayResultItem) : sprintf('%s(%s)', gettype($arrayOfSuggestionDayResultSuggestionDayResultItem), var_export($arrayOfSuggestionDayResultSuggestionDayResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SuggestionDayResult property can only contain items of type \Ews\StructType\EwsSuggestionDayResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SuggestionDayResult value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSuggestionDayResult[] $suggestionDayResult
     * @return \Ews\ArrayType\EwsArrayOfSuggestionDayResult
     */
    public function setSuggestionDayResult(array $suggestionDayResult = array())
    {
        // validation for constraint: array
        if ('' !== ($suggestionDayResultArrayErrorMessage = self::validateSuggestionDayResultForArrayConstraintsFromSetSuggestionDayResult($suggestionDayResult))) {
            throw new \InvalidArgumentException($suggestionDayResultArrayErrorMessage, __LINE__);
        }
        $this->SuggestionDayResult = $suggestionDayResult;
        return $this;
    }
    /**
     * Add item to SuggestionDayResult value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSuggestionDayResult $item
     * @return \Ews\ArrayType\EwsArrayOfSuggestionDayResult
     */
    public function addToSuggestionDayResult(\Ews\StructType\EwsSuggestionDayResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSuggestionDayResult) {
            throw new \InvalidArgumentException(sprintf('The SuggestionDayResult property can only contain items of type \Ews\StructType\EwsSuggestionDayResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SuggestionDayResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSuggestionDayResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSuggestionDayResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSuggestionDayResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSuggestionDayResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSuggestionDayResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SuggestionDayResult
     */
    public function getAttributeName()
    {
        return 'SuggestionDayResult';
    }
}
