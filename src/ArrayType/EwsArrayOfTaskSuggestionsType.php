<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTaskSuggestionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfTaskSuggestionsType extends AbstractStructArrayBase
{
    /**
     * The TaskSuggestion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var array
     */
    public $TaskSuggestion;
    /**
     * Constructor method for ArrayOfTaskSuggestionsType
     * @uses EwsArrayOfTaskSuggestionsType::setTaskSuggestion()
     * @param array $taskSuggestion
     */
    public function __construct(array $taskSuggestion = array())
    {
        $this
            ->setTaskSuggestion($taskSuggestion);
    }
    /**
     * Get TaskSuggestion value
     * @return array
     */
    public function getTaskSuggestion()
    {
        return $this->TaskSuggestion;
    }
    /**
     * Set TaskSuggestion value
     * @param array $taskSuggestion
     * @return \Ews\ArrayType\EwsArrayOfTaskSuggestionsType
     */
    public function setTaskSuggestion(array $taskSuggestion = array())
    {
        $this->TaskSuggestion = $taskSuggestion;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfTaskSuggestionsType
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
