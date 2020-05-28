<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEntityFeedbackEntry ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEntityFeedbackEntry extends AbstractStructArrayBase
{
    /**
     * The EntityFeedbackEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsEntityFeedbackEntryType[]
     */
    public $EntityFeedbackEntry;
    /**
     * Constructor method for ArrayOfEntityFeedbackEntry
     * @uses EwsArrayOfEntityFeedbackEntry::setEntityFeedbackEntry()
     * @param \Ews\StructType\EwsEntityFeedbackEntryType[] $entityFeedbackEntry
     */
    public function __construct(array $entityFeedbackEntry = array())
    {
        $this
            ->setEntityFeedbackEntry($entityFeedbackEntry);
    }
    /**
     * Get EntityFeedbackEntry value
     * @return \Ews\StructType\EwsEntityFeedbackEntryType[]
     */
    public function getEntityFeedbackEntry()
    {
        return $this->EntityFeedbackEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setEntityFeedbackEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntityFeedbackEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntityFeedbackEntryForArrayConstraintsFromSetEntityFeedbackEntry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEntityFeedbackEntryEntityFeedbackEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfEntityFeedbackEntryEntityFeedbackEntryItem instanceof \Ews\StructType\EwsEntityFeedbackEntryType) {
                $invalidValues[] = is_object($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem) ? get_class($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem) : sprintf('%s(%s)', gettype($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem), var_export($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EntityFeedbackEntry property can only contain items of type \Ews\StructType\EwsEntityFeedbackEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EntityFeedbackEntry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEntityFeedbackEntryType[] $entityFeedbackEntry
     * @return \Ews\ArrayType\EwsArrayOfEntityFeedbackEntry
     */
    public function setEntityFeedbackEntry(array $entityFeedbackEntry = array())
    {
        // validation for constraint: array
        if ('' !== ($entityFeedbackEntryArrayErrorMessage = self::validateEntityFeedbackEntryForArrayConstraintsFromSetEntityFeedbackEntry($entityFeedbackEntry))) {
            throw new \InvalidArgumentException($entityFeedbackEntryArrayErrorMessage, __LINE__);
        }
        $this->EntityFeedbackEntry = $entityFeedbackEntry;
        return $this;
    }
    /**
     * Add item to EntityFeedbackEntry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEntityFeedbackEntryType $item
     * @return \Ews\ArrayType\EwsArrayOfEntityFeedbackEntry
     */
    public function addToEntityFeedbackEntry(\Ews\StructType\EwsEntityFeedbackEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsEntityFeedbackEntryType) {
            throw new \InvalidArgumentException(sprintf('The EntityFeedbackEntry property can only contain items of type \Ews\StructType\EwsEntityFeedbackEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EntityFeedbackEntry[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EntityFeedbackEntry
     */
    public function getAttributeName()
    {
        return 'EntityFeedbackEntry';
    }
}
