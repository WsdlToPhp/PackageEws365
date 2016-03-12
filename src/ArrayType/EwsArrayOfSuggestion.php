<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSuggestion ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSuggestion extends AbstractStructArrayBase
{
    /**
     * The Suggestion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSuggestion[]
     */
    public $Suggestion;
    /**
     * Constructor method for ArrayOfSuggestion
     * @uses EwsArrayOfSuggestion::setSuggestion()
     * @param \Ews\StructType\EwsSuggestion[] $suggestion
     */
    public function __construct(array $suggestion = array())
    {
        $this
            ->setSuggestion($suggestion);
    }
    /**
     * Get Suggestion value
     * @return \Ews\StructType\EwsSuggestion[]|null
     */
    public function getSuggestion()
    {
        return $this->Suggestion;
    }
    /**
     * Set Suggestion value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSuggestion[] $suggestion
     * @return \Ews\ArrayType\EwsArrayOfSuggestion
     */
    public function setSuggestion(array $suggestion = array())
    {
        foreach ($suggestion as $arrayOfSuggestionSuggestionItem) {
            // validation for constraint: itemType
            if (!$arrayOfSuggestionSuggestionItem instanceof \Ews\StructType\EwsSuggestion) {
                throw new \InvalidArgumentException(sprintf('The Suggestion property can only contain items of \Ews\StructType\EwsSuggestion, "%s" given', is_object($arrayOfSuggestionSuggestionItem) ? get_class($arrayOfSuggestionSuggestionItem) : gettype($arrayOfSuggestionSuggestionItem)), __LINE__);
            }
        }
        $this->Suggestion = $suggestion;
        return $this;
    }
    /**
     * Add item to Suggestion value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSuggestion $item
     * @return \Ews\ArrayType\EwsArrayOfSuggestion
     */
    public function addToSuggestion(\Ews\StructType\EwsSuggestion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSuggestion) {
            throw new \InvalidArgumentException(sprintf('The Suggestion property can only contain items of \Ews\StructType\EwsSuggestion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Suggestion[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSuggestion|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSuggestion|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSuggestion|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSuggestion|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSuggestion|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Suggestion
     */
    public function getAttributeName()
    {
        return 'Suggestion';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfSuggestion
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
