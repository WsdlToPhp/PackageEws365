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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setRoom method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoom method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomForArrayConstraintsFromSetRoom(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRoomsTypeRoomItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoomsTypeRoomItem instanceof \Ews\StructType\EwsRoomType) {
                $invalidValues[] = is_object($arrayOfRoomsTypeRoomItem) ? get_class($arrayOfRoomsTypeRoomItem) : sprintf('%s(%s)', gettype($arrayOfRoomsTypeRoomItem), var_export($arrayOfRoomsTypeRoomItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Room property can only contain items of type \Ews\StructType\EwsRoomType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Room value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRoomType[] $room
     * @return \Ews\ArrayType\EwsArrayOfRoomsType
     */
    public function setRoom(array $room = array())
    {
        // validation for constraint: array
        if ('' !== ($roomArrayErrorMessage = self::validateRoomForArrayConstraintsFromSetRoom($room))) {
            throw new \InvalidArgumentException($roomArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Room property can only contain items of type \Ews\StructType\EwsRoomType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
