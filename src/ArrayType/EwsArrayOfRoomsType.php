<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRoomsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRoomsType extends AbstractStructArrayBase
{
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRoomType[]
     */
    public $Room;
    /**
     * Constructor method for ArrayOfRoomsType
     * @uses EwsArrayOfRoomsType::setRoom()
     * @param \Ews\StructType\EwsRoomType[] $room
     */
    public function __construct(array $room = array())
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get Room value
     * @return \Ews\StructType\EwsRoomType[]|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRoomType[] $room
     * @return \Ews\ArrayType\EwsArrayOfRoomsType
     */
    public function setRoom(array $room = array())
    {
        foreach ($room as $arrayOfRoomsTypeRoomItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoomsTypeRoomItem instanceof \Ews\StructType\EwsRoomType) {
                throw new \InvalidArgumentException(sprintf('The Room property can only contain items of \Ews\StructType\EwsRoomType, "%s" given', is_object($arrayOfRoomsTypeRoomItem) ? get_class($arrayOfRoomsTypeRoomItem) : gettype($arrayOfRoomsTypeRoomItem)), __LINE__);
            }
        }
        $this->Room = $room;
        return $this;
    }
    /**
     * Add item to Room value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRoomType $item
     * @return \Ews\ArrayType\EwsArrayOfRoomsType
     */
    public function addToRoom(\Ews\StructType\EwsRoomType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsRoomType) {
            throw new \InvalidArgumentException(sprintf('The Room property can only contain items of \Ews\StructType\EwsRoomType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Room[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRoomType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRoomType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRoomType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRoomType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRoomType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Room
     */
    public function getAttributeName()
    {
        return 'Room';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfRoomsType
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
