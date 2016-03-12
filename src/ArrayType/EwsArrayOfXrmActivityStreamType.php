<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmActivityStreamType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfXrmActivityStreamType extends AbstractStructArrayBase
{
    /**
     * The Activity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsXrmActivityStreamType[]
     */
    public $Activity;
    /**
     * Constructor method for ArrayOfXrmActivityStreamType
     * @uses EwsArrayOfXrmActivityStreamType::setActivity()
     * @param \Ews\StructType\EwsXrmActivityStreamType[] $activity
     */
    public function __construct(array $activity = array())
    {
        $this
            ->setActivity($activity);
    }
    /**
     * Get Activity value
     * @return \Ews\StructType\EwsXrmActivityStreamType[]|null
     */
    public function getActivity()
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmActivityStreamType[] $activity
     * @return \Ews\ArrayType\EwsArrayOfXrmActivityStreamType
     */
    public function setActivity(array $activity = array())
    {
        foreach ($activity as $arrayOfXrmActivityStreamTypeActivityItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmActivityStreamTypeActivityItem instanceof \Ews\StructType\EwsXrmActivityStreamType) {
                throw new \InvalidArgumentException(sprintf('The Activity property can only contain items of \Ews\StructType\EwsXrmActivityStreamType, "%s" given', is_object($arrayOfXrmActivityStreamTypeActivityItem) ? get_class($arrayOfXrmActivityStreamTypeActivityItem) : gettype($arrayOfXrmActivityStreamTypeActivityItem)), __LINE__);
            }
        }
        $this->Activity = $activity;
        return $this;
    }
    /**
     * Add item to Activity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmActivityStreamType $item
     * @return \Ews\ArrayType\EwsArrayOfXrmActivityStreamType
     */
    public function addToActivity(\Ews\StructType\EwsXrmActivityStreamType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsXrmActivityStreamType) {
            throw new \InvalidArgumentException(sprintf('The Activity property can only contain items of \Ews\StructType\EwsXrmActivityStreamType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Activity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Activity
     */
    public function getAttributeName()
    {
        return 'Activity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfXrmActivityStreamType
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
