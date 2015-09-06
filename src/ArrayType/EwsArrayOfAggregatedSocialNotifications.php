<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAggregatedSocialNotifications ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAggregatedSocialNotifications extends AbstractStructArrayBase
{
    /**
     * The AggregatedNotification
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $AggregatedNotification;
    /**
     * Constructor method for ArrayOfAggregatedSocialNotifications
     * @uses EwsArrayOfAggregatedSocialNotifications::setAggregatedNotification()
     * @param array $aggregatedNotification
     */
    public function __construct(array $aggregatedNotification = array())
    {
        $this
            ->setAggregatedNotification($aggregatedNotification);
    }
    /**
     * Get AggregatedNotification value
     * @return array
     */
    public function getAggregatedNotification()
    {
        return $this->AggregatedNotification;
    }
    /**
     * Set AggregatedNotification value
     * @param array $aggregatedNotification
     * @return \Ews\ArrayType\EwsArrayOfAggregatedSocialNotifications
     */
    public function setAggregatedNotification(array $aggregatedNotification = array())
    {
        $this->AggregatedNotification = $aggregatedNotification;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AggregatedNotification
     */
    public function getAttributeName()
    {
        return 'AggregatedNotification';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfAggregatedSocialNotifications
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
