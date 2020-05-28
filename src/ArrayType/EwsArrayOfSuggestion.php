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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setSuggestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuggestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuggestionForArrayConstraintsFromSetSuggestion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSuggestionSuggestionItem) {
            // validation for constraint: itemType
            if (!$arrayOfSuggestionSuggestionItem instanceof \Ews\StructType\EwsSuggestion) {
                $invalidValues[] = is_object($arrayOfSuggestionSuggestionItem) ? get_class($arrayOfSuggestionSuggestionItem) : sprintf('%s(%s)', gettype($arrayOfSuggestionSuggestionItem), var_export($arrayOfSuggestionSuggestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Suggestion property can only contain items of type \Ews\StructType\EwsSuggestion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Suggestion value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSuggestion[] $suggestion
     * @return \Ews\ArrayType\EwsArrayOfSuggestion
     */
    public function setSuggestion(array $suggestion = array())
    {
        // validation for constraint: array
        if ('' !== ($suggestionArrayErrorMessage = self::validateSuggestionForArrayConstraintsFromSetSuggestion($suggestion))) {
            throw new \InvalidArgumentException($suggestionArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Suggestion property can only contain items of type \Ews\StructType\EwsSuggestion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
