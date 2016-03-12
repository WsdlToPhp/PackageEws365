<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMeetingSuggestionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMeetingSuggestionsType extends AbstractStructArrayBase
{
    /**
     * The MeetingSuggestion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsMeetingSuggestionType[]
     */
    public $MeetingSuggestion;
    /**
     * Constructor method for ArrayOfMeetingSuggestionsType
     * @uses EwsArrayOfMeetingSuggestionsType::setMeetingSuggestion()
     * @param \Ews\StructType\EwsMeetingSuggestionType[] $meetingSuggestion
     */
    public function __construct(array $meetingSuggestion = array())
    {
        $this
            ->setMeetingSuggestion($meetingSuggestion);
    }
    /**
     * Get MeetingSuggestion value
     * @return \Ews\StructType\EwsMeetingSuggestionType[]|null
     */
    public function getMeetingSuggestion()
    {
        return $this->MeetingSuggestion;
    }
    /**
     * Set MeetingSuggestion value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingSuggestionType[] $meetingSuggestion
     * @return \Ews\ArrayType\EwsArrayOfMeetingSuggestionsType
     */
    public function setMeetingSuggestion(array $meetingSuggestion = array())
    {
        foreach ($meetingSuggestion as $arrayOfMeetingSuggestionsTypeMeetingSuggestionItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingSuggestionsTypeMeetingSuggestionItem instanceof \Ews\StructType\EwsMeetingSuggestionType) {
                throw new \InvalidArgumentException(sprintf('The MeetingSuggestion property can only contain items of \Ews\StructType\EwsMeetingSuggestionType, "%s" given', is_object($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem) ? get_class($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem) : gettype($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem)), __LINE__);
            }
        }
        $this->MeetingSuggestion = $meetingSuggestion;
        return $this;
    }
    /**
     * Add item to MeetingSuggestion value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingSuggestionType $item
     * @return \Ews\ArrayType\EwsArrayOfMeetingSuggestionsType
     */
    public function addToMeetingSuggestion(\Ews\StructType\EwsMeetingSuggestionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMeetingSuggestionType) {
            throw new \InvalidArgumentException(sprintf('The MeetingSuggestion property can only contain items of \Ews\StructType\EwsMeetingSuggestionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MeetingSuggestion[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMeetingSuggestionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMeetingSuggestionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMeetingSuggestionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMeetingSuggestionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMeetingSuggestionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MeetingSuggestion
     */
    public function getAttributeName()
    {
        return 'MeetingSuggestion';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfMeetingSuggestionsType
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
