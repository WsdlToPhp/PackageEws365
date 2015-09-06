<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTrackingPropertiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTrackingPropertiesType extends AbstractStructArrayBase
{
    /**
     * The TrackingPropertyType
     * @var array
     */
    public $TrackingPropertyType;
    /**
     * Constructor method for ArrayOfTrackingPropertiesType
     * @uses EwsArrayOfTrackingPropertiesType::setTrackingPropertyType()
     * @param array $trackingPropertyType
     */
    public function __construct(array $trackingPropertyType = array())
    {
        $this
            ->setTrackingPropertyType($trackingPropertyType);
    }
    /**
     * Get TrackingPropertyType value
     * @return array
     */
    public function getTrackingPropertyType()
    {
        return $this->TrackingPropertyType;
    }
    /**
     * Set TrackingPropertyType value
     * @param array $trackingPropertyType
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType
     */
    public function setTrackingPropertyType(array $trackingPropertyType = array())
    {
        $this->TrackingPropertyType = $trackingPropertyType;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsTrackingPropertyType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TrackingPropertyType
     */
    public function getAttributeName()
    {
        return 'TrackingPropertyType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType
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
