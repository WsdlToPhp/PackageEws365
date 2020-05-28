<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsFindMessageTrackingSearchResultType
     */
    public $MessageTrackingSearchResult;
    /**
     * Constructor method for ArrayOfFindMessageTrackingSearchResultType
     * @uses EwsArrayOfFindMessageTrackingSearchResultType::setMessageTrackingSearchResult()
     * @param \Ews\StructType\EwsFindMessageTrackingSearchResultType $messageTrackingSearchResult
     */
    public function __construct(\Ews\StructType\EwsFindMessageTrackingSearchResultType $messageTrackingSearchResult = null)
    {
        $this
            ->setMessageTrackingSearchResult($messageTrackingSearchResult);
    }
    /**
     * Get MessageTrackingSearchResult value
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function getMessageTrackingSearchResult()
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
    public function validateMessageTrackingSearchResultForChoiceConstraintsFromSetMessageTrackingSearchResult($value)
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
                    throw new \InvalidArgumentException(sprintf('The property MessageTrackingSearchResult can\'t be set as the property %s is already set. Only one property must be set among these properties: MessageTrackingSearchResult, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set MessageTrackingSearchResult value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFindMessageTrackingSearchResultType $messageTrackingSearchResult
     * @return \Ews\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType
     */
    public function setMessageTrackingSearchResult(\Ews\StructType\EwsFindMessageTrackingSearchResultType $messageTrackingSearchResult = null)
    {
        // validation for constraint: choice(MessageTrackingSearchResult)
        if ('' !== ($messageTrackingSearchResultChoiceErrorMessage = self::validateMessageTrackingSearchResultForChoiceConstraintsFromSetMessageTrackingSearchResult($messageTrackingSearchResult))) {
            throw new \InvalidArgumentException($messageTrackingSearchResultChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFindMessageTrackingSearchResultType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MessageTrackingSearchResult
     */
    public function getAttributeName()
    {
        return 'MessageTrackingSearchResult';
    }
}
