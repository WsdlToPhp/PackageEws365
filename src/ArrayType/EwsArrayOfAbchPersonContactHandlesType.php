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
     * @var \Ews\StructType\EwsAbchPersonContactHandle[]
     */
    public $ContactHandle;
    /**
     * Constructor method for ArrayOfAbchPersonContactHandlesType
     * @uses EwsArrayOfAbchPersonContactHandlesType::setContactHandle()
     * @param \Ews\StructType\EwsAbchPersonContactHandle[] $contactHandle
     */
    public function __construct(array $contactHandle = array())
    {
        $this
            ->setContactHandle($contactHandle);
    }
    /**
     * Get ContactHandle value
     * @return \Ews\StructType\EwsAbchPersonContactHandle[]|null
     */
    public function getContactHandle()
    {
        return $this->ContactHandle;
    }
    /**
     * Set ContactHandle value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAbchPersonContactHandle[] $contactHandle
     * @return \Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType
     */
    public function setContactHandle(array $contactHandle = array())
    {
        foreach ($contactHandle as $arrayOfAbchPersonContactHandlesTypeContactHandleItem) {
            // validation for constraint: itemType
            if (!$arrayOfAbchPersonContactHandlesTypeContactHandleItem instanceof \Ews\StructType\EwsAbchPersonContactHandle) {
                throw new \InvalidArgumentException(sprintf('The ContactHandle property can only contain items of \Ews\StructType\EwsAbchPersonContactHandle, "%s" given', is_object($arrayOfAbchPersonContactHandlesTypeContactHandleItem) ? get_class($arrayOfAbchPersonContactHandlesTypeContactHandleItem) : gettype($arrayOfAbchPersonContactHandlesTypeContactHandleItem)), __LINE__);
            }
        }
        $this->ContactHandle = $contactHandle;
        return $this;
    }
    /**
     * Add item to ContactHandle value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAbchPersonContactHandle $item
     * @return \Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType
     */
    public function addToContactHandle(\Ews\StructType\EwsAbchPersonContactHandle $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsAbchPersonContactHandle) {
            throw new \InvalidArgumentException(sprintf('The ContactHandle property can only contain items of \Ews\StructType\EwsAbchPersonContactHandle, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContactHandle[] = $item;
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
