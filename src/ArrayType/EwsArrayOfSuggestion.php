<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsSuggestion[]
     */
    protected array $Suggestion = [];
    /**
     * Constructor method for ArrayOfSuggestion
     * @uses EwsArrayOfSuggestion::setSuggestion()
     * @param \StructType\EwsSuggestion[] $suggestion
     */
    public function __construct(array $suggestion = [])
    {
        $this
            ->setSuggestion($suggestion);
    }
    /**
     * Get Suggestion value
     * @return \StructType\EwsSuggestion[]
     */
    public function getSuggestion(): array
    {
        return $this->Suggestion;
    }
    /**
     * This method is responsible for validating the values passed to the setSuggestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuggestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuggestionForArrayConstraintsFromSetSuggestion(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSuggestionSuggestionItem) {
            // validation for constraint: itemType
            if (!$arrayOfSuggestionSuggestionItem instanceof \StructType\EwsSuggestion) {
                $invalidValues[] = is_object($arrayOfSuggestionSuggestionItem) ? get_class($arrayOfSuggestionSuggestionItem) : sprintf('%s(%s)', gettype($arrayOfSuggestionSuggestionItem), var_export($arrayOfSuggestionSuggestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Suggestion property can only contain items of type \StructType\EwsSuggestion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Suggestion value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSuggestion[] $suggestion
     * @return \ArrayType\EwsArrayOfSuggestion
     */
    public function setSuggestion(array $suggestion = []): self
    {
        // validation for constraint: array
        if ('' !== ($suggestionArrayErrorMessage = self::validateSuggestionForArrayConstraintsFromSetSuggestion($suggestion))) {
            throw new InvalidArgumentException($suggestionArrayErrorMessage, __LINE__);
        }
        $this->Suggestion = $suggestion;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsSuggestion|null
     */
    public function current(): ?\StructType\EwsSuggestion
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsSuggestion|null
     */
    public function item($index): ?\StructType\EwsSuggestion
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsSuggestion|null
     */
    public function first(): ?\StructType\EwsSuggestion
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsSuggestion|null
     */
    public function last(): ?\StructType\EwsSuggestion
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsSuggestion|null
     */
    public function offsetGet($offset): ?\StructType\EwsSuggestion
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsSuggestion $item
     * @return \ArrayType\EwsArrayOfSuggestion
     */
    public function add(\StructType\EwsSuggestion $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Suggestion
     */
    public function getAttributeName(): string
    {
        return 'Suggestion';
    }
}
