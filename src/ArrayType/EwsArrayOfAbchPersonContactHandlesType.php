<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAbchPersonContactHandlesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAbchPersonContactHandlesType extends AbstractStructArrayBase
{
    /**
     * The ContactHandle
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $ContactHandle;
    /**
     * Constructor method for ArrayOfAbchPersonContactHandlesType
     * @uses EwsArrayOfAbchPersonContactHandlesType::setContactHandle()
     * @param array $contactHandle
     */
    public function __construct(array $contactHandle = array())
    {
        $this
            ->setContactHandle($contactHandle);
    }
    /**
     * Get ContactHandle value
     * @return array
     */
    public function getContactHandle()
    {
        return $this->ContactHandle;
    }
    /**
     * Set ContactHandle value
     * @param array $contactHandle
     * @return \Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType
     */
    public function setContactHandle(array $contactHandle = array())
    {
        $this->ContactHandle = $contactHandle;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsAbchPersonContactHandle|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsAbchPersonContactHandle|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsAbchPersonContactHandle|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsAbchPersonContactHandle|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsAbchPersonContactHandle|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContactHandle
     */
    public function getAttributeName()
    {
        return 'ContactHandle';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType
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
