<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsRoomType[]
     */
    protected array $Room = [];
    /**
     * Constructor method for ArrayOfRoomsType
     * @uses EwsArrayOfRoomsType::setRoom()
     * @param \StructType\EwsRoomType[] $room
     */
    public function __construct(array $room = [])
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get Room value
     * @return \StructType\EwsRoomType[]
     */
    public function getRoom(): array
    {
        return $this->Room;
    }
    /**
     * This method is responsible for validating the values passed to the setRoom method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoom method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomForArrayConstraintsFromSetRoom(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRoomsTypeRoomItem) {
            // validation for constraint: itemType
            if (!$arrayOfRoomsTypeRoomItem instanceof \StructType\EwsRoomType) {
                $invalidValues[] = is_object($arrayOfRoomsTypeRoomItem) ? get_class($arrayOfRoomsTypeRoomItem) : sprintf('%s(%s)', gettype($arrayOfRoomsTypeRoomItem), var_export($arrayOfRoomsTypeRoomItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Room property can only contain items of type \StructType\EwsRoomType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Room value
     * @throws InvalidArgumentException
     * @param \StructType\EwsRoomType[] $room
     * @return \ArrayType\EwsArrayOfRoomsType
     */
    public function setRoom(array $room = []): self
    {
        // validation for constraint: array
        if ('' !== ($roomArrayErrorMessage = self::validateRoomForArrayConstraintsFromSetRoom($room))) {
            throw new InvalidArgumentException($roomArrayErrorMessage, __LINE__);
        }
        $this->Room = $room;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsRoomType|null
     */
    public function current(): ?\StructType\EwsRoomType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsRoomType|null
     */
    public function item($index): ?\StructType\EwsRoomType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsRoomType|null
     */
    public function first(): ?\StructType\EwsRoomType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsRoomType|null
     */
    public function last(): ?\StructType\EwsRoomType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsRoomType|null
     */
    public function offsetGet($offset): ?\StructType\EwsRoomType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsRoomType $item
     * @return \ArrayType\EwsArrayOfRoomsType
     */
    public function add(\StructType\EwsRoomType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Room
     */
    public function getAttributeName(): string
    {
        return 'Room';
    }
}
