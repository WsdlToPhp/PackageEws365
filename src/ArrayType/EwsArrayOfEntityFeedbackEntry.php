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
     * @var array
     */
    public $EntityFeedbackEntry;
    /**
     * Constructor method for ArrayOfEntityFeedbackEntry
     * @uses EwsArrayOfEntityFeedbackEntry::setEntityFeedbackEntry()
     * @param array $entityFeedbackEntry
     */
    public function __construct(array $entityFeedbackEntry = array())
    {
        $this
            ->setEntityFeedbackEntry($entityFeedbackEntry);
    }
    /**
     * Get EntityFeedbackEntry value
     * @return array
     */
    public function getEntityFeedbackEntry()
    {
        return $this->EntityFeedbackEntry;
    }
    /**
     * Set EntityFeedbackEntry value
     * @param array $entityFeedbackEntry
     * @return \Ews\ArrayType\EwsArrayOfEntityFeedbackEntry
     */
    public function setEntityFeedbackEntry(array $entityFeedbackEntry = array())
    {
        $this->EntityFeedbackEntry = $entityFeedbackEntry;
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
