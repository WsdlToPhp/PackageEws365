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
     * Meta informations extracted from the WSDL
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
     * Set SuggestionDayResult value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSuggestionDayResult[] $suggestionDayResult
     * @return \Ews\ArrayType\EwsArrayOfSuggestionDayResult
     */
    public function setSuggestionDayResult(array $suggestionDayResult = array())
    {
        foreach ($suggestionDayResult as $arrayOfSuggestionDayResultSuggestionDayResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfSuggestionDayResultSuggestionDayResultItem instanceof \Ews\StructType\EwsSuggestionDayResult) {
                throw new \InvalidArgumentException(sprintf('The SuggestionDayResult property can only contain items of \Ews\StructType\EwsSuggestionDayResult, "%s" given', is_object($arrayOfSuggestionDayResultSuggestionDayResultItem) ? get_class($arrayOfSuggestionDayResultSuggestionDayResultItem) : gettype($arrayOfSuggestionDayResultSuggestionDayResultItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The SuggestionDayResult property can only contain items of \Ews\StructType\EwsSuggestionDayResult, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfSuggestionDayResult
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
