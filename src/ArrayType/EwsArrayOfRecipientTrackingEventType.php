<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRecipientTrackingEventType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRecipientTrackingEventType extends AbstractStructArrayBase
{
    /**
     * The RecipientTrackingEvent
     * @var \Ews\StructType\EwsRecipientTrackingEventType
     */
    public $RecipientTrackingEvent;
    /**
     * Constructor method for ArrayOfRecipientTrackingEventType
     * @uses EwsArrayOfRecipientTrackingEventType::setRecipientTrackingEvent()
     * @param \Ews\StructType\EwsRecipientTrackingEventType $recipientTrackingEvent
     */
    public function __construct(\Ews\StructType\EwsRecipientTrackingEventType $recipientTrackingEvent = null)
    {
        $this
            ->setRecipientTrackingEvent($recipientTrackingEvent);
    }
    /**
     * Get RecipientTrackingEvent value
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function getRecipientTrackingEvent()
    {
        return $this->RecipientTrackingEvent;
    }
    /**
     * Set RecipientTrackingEvent value
     * @param \Ews\StructType\EwsRecipientTrackingEventType $recipientTrackingEvent
     * @return \Ews\ArrayType\EwsArrayOfRecipientTrackingEventType
     */
    public function setRecipientTrackingEvent(\Ews\StructType\EwsRecipientTrackingEventType $recipientTrackingEvent = null)
    {
        $this->RecipientTrackingEvent = $recipientTrackingEvent;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RecipientTrackingEvent
     */
    public function getAttributeName()
    {
        return 'RecipientTrackingEvent';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfRecipientTrackingEventType
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
