<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTransitionsGroupsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTransitionsGroupsType extends AbstractStructArrayBase
{
    /**
     * The TransitionsGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - maxOccurs: unbounded
     * - ref: t:Transition
     * @var array
     */
    public $TransitionsGroup;
    /**
     * Constructor method for ArrayOfTransitionsGroupsType
     * @uses EwsArrayOfTransitionsGroupsType::setTransitionsGroup()
     * @param array $transitionsGroup
     */
    public function __construct(array $transitionsGroup = array())
    {
        $this
            ->setTransitionsGroup($transitionsGroup);
    }
    /**
     * Get TransitionsGroup value
     * @return array
     */
    public function getTransitionsGroup()
    {
        return $this->TransitionsGroup;
    }
    /**
     * Set TransitionsGroup value
     * @param array $transitionsGroup
     * @return \Ews\ArrayType\EwsArrayOfTransitionsGroupsType
     */
    public function setTransitionsGroup(array $transitionsGroup = array())
    {
        $this->TransitionsGroup = $transitionsGroup;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TransitionsGroup
     */
    public function getAttributeName()
    {
        return 'TransitionsGroup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfTransitionsGroupsType
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
