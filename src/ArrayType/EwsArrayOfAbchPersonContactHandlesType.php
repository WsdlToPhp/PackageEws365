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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setContactHandle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContactHandle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContactHandleForArrayConstraintsFromSetContactHandle(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAbchPersonContactHandlesTypeContactHandleItem) {
            // validation for constraint: itemType
            if (!$arrayOfAbchPersonContactHandlesTypeContactHandleItem instanceof \Ews\StructType\EwsAbchPersonContactHandle) {
                $invalidValues[] = is_object($arrayOfAbchPersonContactHandlesTypeContactHandleItem) ? get_class($arrayOfAbchPersonContactHandlesTypeContactHandleItem) : sprintf('%s(%s)', gettype($arrayOfAbchPersonContactHandlesTypeContactHandleItem), var_export($arrayOfAbchPersonContactHandlesTypeContactHandleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContactHandle property can only contain items of type \Ews\StructType\EwsAbchPersonContactHandle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ContactHandle value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAbchPersonContactHandle[] $contactHandle
     * @return \Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType
     */
    public function setContactHandle(array $contactHandle = array())
    {
        // validation for constraint: array
        if ('' !== ($contactHandleArrayErrorMessage = self::validateContactHandleForArrayConstraintsFromSetContactHandle($contactHandle))) {
            throw new \InvalidArgumentException($contactHandleArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The ContactHandle property can only contain items of type \Ews\StructType\EwsAbchPersonContactHandle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
