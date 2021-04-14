<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFindMessageTrackingSearchResultType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFindMessageTrackingSearchResultType extends AbstractStructArrayBase
{
    /**
     * The MessageTrackingSearchResult
     * Meta information extracted from the WSDL
     * - choice: MessageTrackingSearchResult
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsFindMessageTrackingSearchResultType|null
     */
    protected ?\StructType\EwsFindMessageTrackingSearchResultType $MessageTrackingSearchResult = null;
    /**
     * Constructor method for ArrayOfFindMessageTrackingSearchResultType
     * @uses EwsArrayOfFindMessageTrackingSearchResultType::setMessageTrackingSearchResult()
     * @param \StructType\EwsFindMessageTrackingSearchResultType $messageTrackingSearchResult
     */
    public function __construct(?\StructType\EwsFindMessageTrackingSearchResultType $messageTrackingSearchResult = null)
    {
        $this
            ->setMessageTrackingSearchResult($messageTrackingSearchResult);
    }
    /**
     * Get MessageTrackingSearchResult value
     * @return \StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function getMessageTrackingSearchResult(): ?\StructType\EwsFindMessageTrackingSearchResultType
    {
        return isset($this->MessageTrackingSearchResult) ? $this->MessageTrackingSearchResult : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMessageTrackingSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessageTrackingSearchResult method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMessageTrackingSearchResultForChoiceConstraintsFromSetMessageTrackingSearchResult($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MessageTrackingSearchResult can\'t be set as the property %s is already set. Only one property must be set among these properties: MessageTrackingSearchResult, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MessageTrackingSearchResult value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsFindMessageTrackingSearchResultType $messageTrackingSearchResult
     * @return \ArrayType\EwsArrayOfFindMessageTrackingSearchResultType
     */
    public function setMessageTrackingSearchResult(?\StructType\EwsFindMessageTrackingSearchResultType $messageTrackingSearchResult = null): self
    {
        // validation for constraint: choice(MessageTrackingSearchResult)
        if ('' !== ($messageTrackingSearchResultChoiceErrorMessage = self::validateMessageTrackingSearchResultForChoiceConstraintsFromSetMessageTrackingSearchResult($messageTrackingSearchResult))) {
            throw new InvalidArgumentException($messageTrackingSearchResultChoiceErrorMessage, __LINE__);
        }
        if (is_null($messageTrackingSearchResult) || (is_array($messageTrackingSearchResult) && empty($messageTrackingSearchResult))) {
            unset($this->MessageTrackingSearchResult);
        } else {
            $this->MessageTrackingSearchResult = $messageTrackingSearchResult;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function current(): ?\StructType\EwsFindMessageTrackingSearchResultType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function item($index): ?\StructType\EwsFindMessageTrackingSearchResultType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function first(): ?\StructType\EwsFindMessageTrackingSearchResultType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function last(): ?\StructType\EwsFindMessageTrackingSearchResultType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function offsetGet($offset): ?\StructType\EwsFindMessageTrackingSearchResultType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsFindMessageTrackingSearchResultType $item
     * @return \ArrayType\EwsArrayOfFindMessageTrackingSearchResultType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsFindMessageTrackingSearchResultType) {
            throw new InvalidArgumentException(sprintf('The MessageTrackingSearchResult property can only contain items of type \StructType\EwsFindMessageTrackingSearchResultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MessageTrackingSearchResult
     */
    public function getAttributeName(): string
    {
        return 'MessageTrackingSearchResult';
    }
}
