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
     * @var array
     */
    public $SuggestionDayResult;
    /**
     * Constructor method for ArrayOfSuggestionDayResult
     * @uses EwsArrayOfSuggestionDayResult::setSuggestionDayResult()
     * @param array $suggestionDayResult
     */
    public function __construct(array $suggestionDayResult = array())
    {
        $this
            ->setSuggestionDayResult($suggestionDayResult);
    }
    /**
     * Get SuggestionDayResult value
     * @return array
     */
    public function getSuggestionDayResult()
    {
        return $this->SuggestionDayResult;
    }
    /**
     * Set SuggestionDayResult value
     * @param array $suggestionDayResult
     * @return \Ews\ArrayType\EwsArrayOfSuggestionDayResult
     */
    public function setSuggestionDayResult(array $suggestionDayResult = array())
    {
        $this->SuggestionDayResult = $suggestionDayResult;
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
