<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsTaskSuggestionType[]
     */
    protected array $TaskSuggestion = [];
    /**
     * Constructor method for ArrayOfTaskSuggestionsType
     * @uses EwsArrayOfTaskSuggestionsType::setTaskSuggestion()
     * @param \StructType\EwsTaskSuggestionType[] $taskSuggestion
     */
    public function __construct(array $taskSuggestion = [])
    {
        $this
            ->setTaskSuggestion($taskSuggestion);
    }
    /**
     * Get TaskSuggestion value
     * @return \StructType\EwsTaskSuggestionType[]
     */
    public function getTaskSuggestion(): array
    {
        return $this->TaskSuggestion;
    }
    /**
     * This method is responsible for validating the values passed to the setTaskSuggestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaskSuggestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskSuggestionForArrayConstraintsFromSetTaskSuggestion(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTaskSuggestionsTypeTaskSuggestionItem) {
            // validation for constraint: itemType
            if (!$arrayOfTaskSuggestionsTypeTaskSuggestionItem instanceof \StructType\EwsTaskSuggestionType) {
                $invalidValues[] = is_object($arrayOfTaskSuggestionsTypeTaskSuggestionItem) ? get_class($arrayOfTaskSuggestionsTypeTaskSuggestionItem) : sprintf('%s(%s)', gettype($arrayOfTaskSuggestionsTypeTaskSuggestionItem), var_export($arrayOfTaskSuggestionsTypeTaskSuggestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaskSuggestion property can only contain items of type \StructType\EwsTaskSuggestionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaskSuggestion value
     * @throws InvalidArgumentException
     * @param \StructType\EwsTaskSuggestionType[] $taskSuggestion
     * @return \ArrayType\EwsArrayOfTaskSuggestionsType
     */
    public function setTaskSuggestion(array $taskSuggestion = []): self
    {
        // validation for constraint: array
        if ('' !== ($taskSuggestionArrayErrorMessage = self::validateTaskSuggestionForArrayConstraintsFromSetTaskSuggestion($taskSuggestion))) {
            throw new InvalidArgumentException($taskSuggestionArrayErrorMessage, __LINE__);
        }
        $this->TaskSuggestion = $taskSuggestion;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsTaskSuggestionType|null
     */
    public function current(): ?\StructType\EwsTaskSuggestionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsTaskSuggestionType|null
     */
    public function item($index): ?\StructType\EwsTaskSuggestionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsTaskSuggestionType|null
     */
    public function first(): ?\StructType\EwsTaskSuggestionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsTaskSuggestionType|null
     */
    public function last(): ?\StructType\EwsTaskSuggestionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsTaskSuggestionType|null
     */
    public function offsetGet($offset): ?\StructType\EwsTaskSuggestionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsTaskSuggestionType $item
     * @return \ArrayType\EwsArrayOfTaskSuggestionsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsTaskSuggestionType) {
            throw new InvalidArgumentException(sprintf('The TaskSuggestion property can only contain items of type \StructType\EwsTaskSuggestionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TaskSuggestion
     */
    public function getAttributeName(): string
    {
        return 'TaskSuggestion';
    }
}
