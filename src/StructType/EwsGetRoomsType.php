<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRoomsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetRoomsType extends EwsBaseRequestType
{
    /**
     * The RoomList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $RoomList;
    /**
     * Constructor method for GetRoomsType
     * @uses EwsGetRoomsType::setRoomList()
     * @param \Ews\StructType\EwsEmailAddressType $roomList
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $roomList = null)
    {
        $this
            ->setRoomList($roomList);
    }
    /**
     * Get RoomList value
     * @return \Ews\StructType\EwsEmailAddressType
     */
    public function getRoomList()
    {
        return $this->RoomList;
    }
    /**
     * Set RoomList value
     * @param \Ews\StructType\EwsEmailAddressType $roomList
     * @return \Ews\StructType\EwsGetRoomsType
     */
    public function setRoomList(\Ews\StructType\EwsEmailAddressType $roomList = null)
    {
        $this->RoomList = $roomList;
        return $this;
    }
}
