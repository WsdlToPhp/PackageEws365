<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRoomListsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetRoomListsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RoomLists
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public $RoomLists;
    /**
     * Constructor method for GetRoomListsResponseMessageType
     * @uses EwsGetRoomListsResponseMessageType::setRoomLists()
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $roomLists
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfEmailAddressesType $roomLists = null)
    {
        $this
            ->setRoomLists($roomLists);
    }
    /**
     * Get RoomLists value
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getRoomLists()
    {
        return $this->RoomLists;
    }
    /**
     * Set RoomLists value
     * @param \Ews\ArrayType\EwsArrayOfEmailAddressesType $roomLists
     * @return \Ews\StructType\EwsGetRoomListsResponseMessageType
     */
    public function setRoomLists(\Ews\ArrayType\EwsArrayOfEmailAddressesType $roomLists = null)
    {
        $this->RoomLists = $roomLists;
        return $this;
    }
}
