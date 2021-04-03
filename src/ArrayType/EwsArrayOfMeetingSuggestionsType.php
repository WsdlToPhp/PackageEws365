<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsMeetingSuggestionType[]
     */
    protected array $MeetingSuggestion = [];
    /**
     * Constructor method for ArrayOfMeetingSuggestionsType
     * @uses EwsArrayOfMeetingSuggestionsType::setMeetingSuggestion()
     * @param \StructType\EwsMeetingSuggestionType[] $meetingSuggestion
     */
    public function __construct(array $meetingSuggestion = [])
    {
        $this
            ->setMeetingSuggestion($meetingSuggestion);
    }
    /**
     * Get MeetingSuggestion value
     * @return \StructType\EwsMeetingSuggestionType[]
     */
    public function getMeetingSuggestion(): array
    {
        return $this->MeetingSuggestion;
    }
    /**
     * This method is responsible for validating the values passed to the setMeetingSuggestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeetingSuggestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMeetingSuggestionForArrayConstraintsFromSetMeetingSuggestion(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMeetingSuggestionsTypeMeetingSuggestionItem) {
            // validation for constraint: itemType
            if (!$arrayOfMeetingSuggestionsTypeMeetingSuggestionItem instanceof \StructType\EwsMeetingSuggestionType) {
                $invalidValues[] = is_object($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem) ? get_class($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem) : sprintf('%s(%s)', gettype($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem), var_export($arrayOfMeetingSuggestionsTypeMeetingSuggestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MeetingSuggestion property can only contain items of type \StructType\EwsMeetingSuggestionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MeetingSuggestion value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingSuggestionType[] $meetingSuggestion
     * @return \ArrayType\EwsArrayOfMeetingSuggestionsType
     */
    public function setMeetingSuggestion(array $meetingSuggestion = []): self
    {
        // validation for constraint: array
        if ('' !== ($meetingSuggestionArrayErrorMessage = self::validateMeetingSuggestionForArrayConstraintsFromSetMeetingSuggestion($meetingSuggestion))) {
            throw new InvalidArgumentException($meetingSuggestionArrayErrorMessage, __LINE__);
        }
        $this->MeetingSuggestion = $meetingSuggestion;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsMeetingSuggestionType|null
     */
    public function current(): ?\StructType\EwsMeetingSuggestionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsMeetingSuggestionType|null
     */
    public function item($index): ?\StructType\EwsMeetingSuggestionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsMeetingSuggestionType|null
     */
    public function first(): ?\StructType\EwsMeetingSuggestionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsMeetingSuggestionType|null
     */
    public function last(): ?\StructType\EwsMeetingSuggestionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsMeetingSuggestionType|null
     */
    public function offsetGet($offset): ?\StructType\EwsMeetingSuggestionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsMeetingSuggestionType $item
     * @return \ArrayType\EwsArrayOfMeetingSuggestionsType
     */
    public function add(\StructType\EwsMeetingSuggestionType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MeetingSuggestion
     */
    public function getAttributeName(): string
    {
        return 'MeetingSuggestion';
    }
}
