<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfNotificationEventTypesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfNotificationEventTypesType extends AbstractStructArrayBase
{
    /**
     * The EventType
     * @var array
     */
    public $EventType;
    /**
     * Constructor method for NonEmptyArrayOfNotificationEventTypesType
     * @uses EwsNonEmptyArrayOfNotificationEventTypesType::setEventType()
     * @param array $eventType
     */
    public function __construct(array $eventType = array())
    {
        $this
            ->setEventType($eventType);
    }
    /**
     * Get EventType value
     * @return array
     */
    public function getEventType()
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @param array $eventType
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType
     */
    public function setEventType(array $eventType = array())
    {
        $this->EventType = $eventType;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @uses \Ews\EnumType\EwsNotificationEventTypeType::valueIsValid()
     * @param string $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType|bool
     */
    public function add($item)
    {
        return \Ews\EnumType\EwsNotificationEventTypeType::valueIsValid($item) ? parent::add($item) : false;
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EventType
     */
    public function getAttributeName()
    {
        return 'EventType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType
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
