<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsEmailAddressType
     */
    protected \StructType\EwsEmailAddressType $RoomList;
    /**
     * Constructor method for GetRoomsType
     * @uses EwsGetRoomsType::setRoomList()
     * @param \StructType\EwsEmailAddressType $roomList
     */
    public function __construct(\StructType\EwsEmailAddressType $roomList)
    {
        $this
            ->setRoomList($roomList);
    }
    /**
     * Get RoomList value
     * @return \StructType\EwsEmailAddressType
     */
    public function getRoomList(): \StructType\EwsEmailAddressType
    {
        return $this->RoomList;
    }
    /**
     * Set RoomList value
     * @param \StructType\EwsEmailAddressType $roomList
     * @return \StructType\EwsGetRoomsType
     */
    public function setRoomList(\StructType\EwsEmailAddressType $roomList): self
    {
        $this->RoomList = $roomList;
        
        return $this;
    }
}
