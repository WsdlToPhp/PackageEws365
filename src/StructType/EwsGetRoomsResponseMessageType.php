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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetRoomsResponseMessageType
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
