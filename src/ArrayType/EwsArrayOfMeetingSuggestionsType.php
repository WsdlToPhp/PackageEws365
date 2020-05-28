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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setMeetingSuggestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingSuggestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMeetingSuggestionForArrayConstraintsFromSetMeetingSuggestion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMeetingSuggestionsTypeMeetingSuggestionItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingSuggestionsTypeMeetingSuggestionItem instanceof \Ews\StructType\EwsMeetingSuggestionType) {
                $invalidValues[] = is_object($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem) ? get_class($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem) : sprintf('%s(%s)', gettype($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem), var_export($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MeetingSuggestion property can only contain items of type \Ews\StructType\EwsMeetingSuggestionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MeetingSuggestion value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMeetingSuggestionType[] $meetingSuggestion
     * @return \Ews\ArrayType\EwsArrayOfMeetingSuggestionsType
     */
    public function setMeetingSuggestion(array $meetingSuggestion = array())
    {
        // validation for constraint: array
        if ('' !== ($meetingSuggestionArrayErrorMessage = self::validateMeetingSuggestionForArrayConstraintsFromSetMeetingSuggestion($meetingSuggestion))) {
            throw new \InvalidArgumentException($meetingSuggestionArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The MeetingSuggestion property can only contain items of type \Ews\StructType\EwsMeetingSuggestionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
