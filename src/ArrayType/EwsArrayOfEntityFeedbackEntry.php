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
     * Meta informations extracted from the WSDL
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
     * Set EntityFeedbackEntry value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEntityFeedbackEntryType[] $entityFeedbackEntry
     * @return \Ews\ArrayType\EwsArrayOfEntityFeedbackEntry
     */
    public function setEntityFeedbackEntry(array $entityFeedbackEntry = array())
    {
        foreach ($entityFeedbackEntry as $arrayOfEntityFeedbackEntryEntityFeedbackEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfEntityFeedbackEntryEntityFeedbackEntryItem instanceof \Ews\StructType\EwsEntityFeedbackEntryType) {
                throw new \InvalidArgumentException(sprintf('The EntityFeedbackEntry property can only contain items of \Ews\StructType\EwsEntityFeedbackEntryType, "%s" given', is_object($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem) ? get_class($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem) : gettype($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The EntityFeedbackEntry property can only contain items of \Ews\StructType\EwsEntityFeedbackEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfEntityFeedbackEntry
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
