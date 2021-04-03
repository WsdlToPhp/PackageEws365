<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRoomsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetRoomsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Rooms
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRoomsType|null
     */
    protected ?\ArrayType\EwsArrayOfRoomsType $Rooms = null;
    /**
     * Constructor method for GetRoomsResponseMessageType
     * @uses EwsGetRoomsResponseMessageType::setRooms()
     * @param \ArrayType\EwsArrayOfRoomsType $rooms
     */
    public function __construct(?\ArrayType\EwsArrayOfRoomsType $rooms = null)
    {
        $this
            ->setRooms($rooms);
    }
    /**
     * Get Rooms value
     * @return \ArrayType\EwsArrayOfRoomsType|null
     */
    public function getRooms(): ?\ArrayType\EwsArrayOfRoomsType
    {
        return $this->Rooms;
    }
    /**
     * Set Rooms value
     * @param \ArrayType\EwsArrayOfRoomsType $rooms
     * @return \StructType\EwsGetRoomsResponseMessageType
     */
    public function setRooms(?\ArrayType\EwsArrayOfRoomsType $rooms = null): self
    {
        $this->Rooms = $rooms;
        
        return $this;
    }
}
