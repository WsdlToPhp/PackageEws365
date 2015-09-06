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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetRoomListsResponseMessageType
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
