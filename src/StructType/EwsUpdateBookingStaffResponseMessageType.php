<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateBookingStaffResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUpdateBookingStaffResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UpdatedItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $UpdatedItemId;
    /**
     * Constructor method for UpdateBookingStaffResponseMessageType
     * @uses EwsUpdateBookingStaffResponseMessageType::setUpdatedItemId()
     * @param \Ews\StructType\EwsItemIdType $updatedItemId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $updatedItemId = null)
    {
        $this
            ->setUpdatedItemId($updatedItemId);
    }
    /**
     * Get UpdatedItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getUpdatedItemId()
    {
        return $this->UpdatedItemId;
    }
    /**
     * Set UpdatedItemId value
     * @param \Ews\StructType\EwsItemIdType $updatedItemId
     * @return \Ews\StructType\EwsUpdateBookingStaffResponseMessageType
     */
    public function setUpdatedItemId(\Ews\StructType\EwsItemIdType $updatedItemId = null)
    {
        $this->UpdatedItemId = $updatedItemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateBookingStaffResponseMessageType
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
