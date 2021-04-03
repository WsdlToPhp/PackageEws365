<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailAddressesType $RoomLists = null;
    /**
     * Constructor method for GetRoomListsResponseMessageType
     * @uses EwsGetRoomListsResponseMessageType::setRoomLists()
     * @param \ArrayType\EwsArrayOfEmailAddressesType $roomLists
     */
    public function __construct(?\ArrayType\EwsArrayOfEmailAddressesType $roomLists = null)
    {
        $this
            ->setRoomLists($roomLists);
    }
    /**
     * Get RoomLists value
     * @return \ArrayType\EwsArrayOfEmailAddressesType|null
     */
    public function getRoomLists(): ?\ArrayType\EwsArrayOfEmailAddressesType
    {
        return $this->RoomLists;
    }
    /**
     * Set RoomLists value
     * @param \ArrayType\EwsArrayOfEmailAddressesType $roomLists
     * @return \StructType\EwsGetRoomListsResponseMessageType
     */
    public function setRoomLists(?\ArrayType\EwsArrayOfEmailAddressesType $roomLists = null): self
    {
        $this->RoomLists = $roomLists;
        
        return $this;
    }
}
