<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfRoomsType
     */
    public $Rooms;
    /**
     * Constructor method for GetRoomsResponseMessageType
     * @uses EwsGetRoomsResponseMessageType::setRooms()
     * @param \Ews\ArrayType\EwsArrayOfRoomsType $rooms
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfRoomsType $rooms = null)
    {
        $this
            ->setRooms($rooms);
    }
    /**
     * Get Rooms value
     * @return \Ews\ArrayType\EwsArrayOfRoomsType|null
     */
    public function getRooms()
    {
        return $this->Rooms;
    }
    /**
     * Set Rooms value
     * @param \Ews\ArrayType\EwsArrayOfRoomsType $rooms
     * @return \Ews\StructType\EwsGetRoomsResponseMessageType
     */
    public function setRooms(\Ews\ArrayType\EwsArrayOfRoomsType $rooms = null)
    {
        $this->Rooms = $rooms;
        return $this;
    }
}
