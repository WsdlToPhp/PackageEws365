<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfContentActivities ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfContentActivities extends AbstractStructArrayBase
{
    /**
     * The ContentActivity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var array
     */
    public $ContentActivity;
    /**
     * Constructor method for NonEmptyArrayOfContentActivities
     * @uses EwsNonEmptyArrayOfContentActivities::setContentActivity()
     * @param array $contentActivity
     */
    public function __construct(array $contentActivity = array())
    {
        $this
            ->setContentActivity($contentActivity);
    }
    /**
     * Get ContentActivity value
     * @return array
     */
    public function getContentActivity()
    {
        return $this->ContentActivity;
    }
    /**
     * Set ContentActivity value
     * @param array $contentActivity
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities
     */
    public function setContentActivity(array $contentActivity = array())
    {
        $this->ContentActivity = $contentActivity;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsContentActivity|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsContentActivity|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsContentActivity|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsContentActivity|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsContentActivity|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContentActivity
     */
    public function getAttributeName()
    {
        return 'ContentActivity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities
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
