<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSuggestionDayResult ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSuggestionDayResult extends AbstractStructArrayBase
{
    /**
     * The SuggestionDayResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsSuggestionDayResult[]
     */
    protected array $SuggestionDayResult = [];
    /**
     * Constructor method for ArrayOfSuggestionDayResult
     * @uses EwsArrayOfSuggestionDayResult::setSuggestionDayResult()
     * @param \StructType\EwsSuggestionDayResult[] $suggestionDayResult
     */
    public function __construct(array $suggestionDayResult = [])
    {
        $this
            ->setSuggestionDayResult($suggestionDayResult);
    }
    /**
     * Get SuggestionDayResult value
     * @return \StructType\EwsSuggestionDayResult[]
     */
    public function getSuggestionDayResult(): array
    {
        return $this->SuggestionDayResult;
    }
    /**
     * This method is responsible for validating the values passed to the setSuggestionDayResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuggestionDayResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuggestionDayResultForArrayConstraintsFromSetSuggestionDayResult(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSuggestionDayResultSuggestionDayResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfSuggestionDayResultSuggestionDayResultItem instanceof \StructType\EwsSuggestionDayResult) {
                $invalidValues[] = is_object($arrayOfSuggestionDayResultSuggestionDayResultItem) ? get_class($arrayOfSuggestionDayResultSuggestionDayResultItem) : sprintf('%s(%s)', gettype($arrayOfSuggestionDayResultSuggestionDayResultItem), var_export($arrayOfSuggestionDayResultSuggestionDayResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SuggestionDayResult property can only contain items of type \StructType\EwsSuggestionDayResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SuggestionDayResult value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSuggestionDayResult[] $suggestionDayResult
     * @return \ArrayType\EwsArrayOfSuggestionDayResult
     */
    public function setSuggestionDayResult(array $suggestionDayResult = []): self
    {
        // validation for constraint: array
        if ('' !== ($suggestionDayResultArrayErrorMessage = self::validateSuggestionDayResultForArrayConstraintsFromSetSuggestionDayResult($suggestionDayResult))) {
            throw new InvalidArgumentException($suggestionDayResultArrayErrorMessage, __LINE__);
        }
        $this->SuggestionDayResult = $suggestionDayResult;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsSuggestionDayResult|null
     */
    public function current(): ?\StructType\EwsSuggestionDayResult
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsSuggestionDayResult|null
     */
    public function item($index): ?\StructType\EwsSuggestionDayResult
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsSuggestionDayResult|null
     */
    public function first(): ?\StructType\EwsSuggestionDayResult
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsSuggestionDayResult|null
     */
    public function last(): ?\StructType\EwsSuggestionDayResult
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsSuggestionDayResult|null
     */
    public function offsetGet($offset): ?\StructType\EwsSuggestionDayResult
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsSuggestionDayResult $item
     * @return \ArrayType\EwsArrayOfSuggestionDayResult
     */
    public function add(\StructType\EwsSuggestionDayResult $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SuggestionDayResult
     */
    public function getAttributeName(): string
    {
        return 'SuggestionDayResult';
    }
}
