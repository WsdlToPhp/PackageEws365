<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Suggestions StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSuggestions extends AbstractStructBase
{
    /**
     * The Suggestion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsSuggestionType[]
     */
    protected array $Suggestion = [];
    /**
     * Constructor method for Suggestions
     * @uses EwsSuggestions::setSuggestion()
     * @param \StructType\EwsSuggestionType[] $suggestion
     */
    public function __construct(array $suggestion = [])
    {
        $this
            ->setSuggestion($suggestion);
    }
    /**
     * Get Suggestion value
     * @return \StructType\EwsSuggestionType[]
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
        foreach ($values as $suggestionsSuggestionItem) {
            // validation for constraint: itemType
            if (!$suggestionsSuggestionItem instanceof \StructType\EwsSuggestionType) {
                $invalidValues[] = is_object($suggestionsSuggestionItem) ? get_class($suggestionsSuggestionItem) : sprintf('%s(%s)', gettype($suggestionsSuggestionItem), var_export($suggestionsSuggestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Suggestion property can only contain items of type \StructType\EwsSuggestionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Suggestion value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSuggestionType[] $suggestion
     * @return \StructType\EwsSuggestions
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
     * Add item to Suggestion value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSuggestionType $item
     * @return \StructType\EwsSuggestions
     */
    public function addToSuggestion(\StructType\EwsSuggestionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsSuggestionType) {
            throw new InvalidArgumentException(sprintf('The Suggestion property can only contain items of type \StructType\EwsSuggestionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Suggestion[] = $item;
        
        return $this;
    }
}
