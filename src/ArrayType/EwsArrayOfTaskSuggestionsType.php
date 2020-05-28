<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTaskSuggestionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTaskSuggestionsType extends AbstractStructArrayBase
{
    /**
     * The TaskSuggestion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsTaskSuggestionType[]
     */
    public $TaskSuggestion;
    /**
     * Constructor method for ArrayOfTaskSuggestionsType
     * @uses EwsArrayOfTaskSuggestionsType::setTaskSuggestion()
     * @param \Ews\StructType\EwsTaskSuggestionType[] $taskSuggestion
     */
    public function __construct(array $taskSuggestion = array())
    {
        $this
            ->setTaskSuggestion($taskSuggestion);
    }
    /**
     * Get TaskSuggestion value
     * @return \Ews\StructType\EwsTaskSuggestionType[]|null
     */
    public function getTaskSuggestion()
    {
        return $this->TaskSuggestion;
    }
    /**
     * This method is responsible for validating the values passed to the setTaskSuggestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaskSuggestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskSuggestionForArrayConstraintsFromSetTaskSuggestion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTaskSuggestionsTypeTaskSuggestionItem) {
            // validation for constraint: itemType
            if (!$arrayOfTaskSuggestionsTypeTaskSuggestionItem instanceof \Ews\StructType\EwsTaskSuggestionType) {
                $invalidValues[] = is_object($arrayOfTaskSuggestionsTypeTaskSuggestionItem) ? get_class($arrayOfTaskSuggestionsTypeTaskSuggestionItem) : sprintf('%s(%s)', gettype($arrayOfTaskSuggestionsTypeTaskSuggestionItem), var_export($arrayOfTaskSuggestionsTypeTaskSuggestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaskSuggestion property can only contain items of type \Ews\StructType\EwsTaskSuggestionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TaskSuggestion value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTaskSuggestionType[] $taskSuggestion
     * @return \Ews\ArrayType\EwsArrayOfTaskSuggestionsType
     */
    public function setTaskSuggestion(array $taskSuggestion = array())
    {
        // validation for constraint: array
        if ('' !== ($taskSuggestionArrayErrorMessage = self::validateTaskSuggestionForArrayConstraintsFromSetTaskSuggestion($taskSuggestion))) {
            throw new \InvalidArgumentException($taskSuggestionArrayErrorMessage, __LINE__);
        }
        $this->TaskSuggestion = $taskSuggestion;
        return $this;
    }
    /**
     * Add item to TaskSuggestion value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTaskSuggestionType $item
     * @return \Ews\ArrayType\EwsArrayOfTaskSuggestionsType
     */
    public function addToTaskSuggestion(\Ews\StructType\EwsTaskSuggestionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsTaskSuggestionType) {
            throw new \InvalidArgumentException(sprintf('The TaskSuggestion property can only contain items of type \Ews\StructType\EwsTaskSuggestionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaskSuggestion[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsTaskSuggestionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsTaskSuggestionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsTaskSuggestionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsTaskSuggestionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsTaskSuggestionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TaskSuggestion
     */
    public function getAttributeName()
    {
        return 'TaskSuggestion';
    }
}
