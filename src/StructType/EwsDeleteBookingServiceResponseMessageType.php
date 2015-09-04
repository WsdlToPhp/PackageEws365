<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBookingServiceResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsDeleteBookingServiceResponseMessageType extends EwsResponseMessageType
{
    /**
     * The DeletedId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $DeletedId;
    /**
     * Constructor method for DeleteBookingServiceResponseMessageType
     * @uses EwsDeleteBookingServiceResponseMessageType::setDeletedId()
     * @param \Ews\StructType\EwsItemIdType $deletedId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $deletedId = null)
    {
        $this
            ->setDeletedId($deletedId);
    }
    /**
     * Get DeletedId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getDeletedId()
    {
        return $this->DeletedId;
    }
    /**
     * Set DeletedId value
     * @param \Ews\StructType\EwsItemIdType $deletedId
     * @return \Ews\StructType\EwsDeleteBookingServiceResponseMessageType
     */
    public function setDeletedId(\Ews\StructType\EwsItemIdType $deletedId = null)
    {
        $this->DeletedId = $deletedId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeleteBookingServiceResponseMessageType
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
