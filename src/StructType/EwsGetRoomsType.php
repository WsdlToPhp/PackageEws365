<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRoomsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetRoomsType extends EwsBaseRequestType
{
    /**
     * The RoomList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved email address
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetRoomsType
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
