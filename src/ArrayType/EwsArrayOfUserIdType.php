<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserIdType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUserIdType extends AbstractStructArrayBase
{
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserIdType[]
     */
    public $UserId;
    /**
     * Constructor method for ArrayOfUserIdType
     * @uses EwsArrayOfUserIdType::setUserId()
     * @param \Ews\StructType\EwsUserIdType[] $userId
     */
    public function __construct(array $userId = array())
    {
        $this
            ->setUserId($userId);
    }
    /**
     * Get UserId value
     * @return \Ews\StructType\EwsUserIdType[]
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserIdType[] $userId
     * @return \Ews\ArrayType\EwsArrayOfUserIdType
     */
    public function setUserId(array $userId = array())
    {
        foreach ($userId as $arrayOfUserIdTypeUserIdItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserIdTypeUserIdItem instanceof \Ews\StructType\EwsUserIdType) {
                throw new \InvalidArgumentException(sprintf('The UserId property can only contain items of \Ews\StructType\EwsUserIdType, "%s" given', is_object($arrayOfUserIdTypeUserIdItem) ? get_class($arrayOfUserIdTypeUserIdItem) : gettype($arrayOfUserIdTypeUserIdItem)), __LINE__);
            }
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Add item to UserId value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserIdType $item
     * @return \Ews\ArrayType\EwsArrayOfUserIdType
     */
    public function addToUserId(\Ews\StructType\EwsUserIdType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUserIdType) {
            throw new \InvalidArgumentException(sprintf('The UserId property can only contain items of \Ews\StructType\EwsUserIdType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UserId[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUserIdType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUserIdType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUserIdType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUserIdType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUserIdType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserId
     */
    public function getAttributeName()
    {
        return 'UserId';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUserIdType
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
