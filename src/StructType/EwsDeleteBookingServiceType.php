<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBookingServiceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsDeleteBookingServiceType extends EwsBaseBookingRequestType
{
    /**
     * The BookingServiceItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $BookingServiceItemId;
    /**
     * Constructor method for DeleteBookingServiceType
     * @uses EwsDeleteBookingServiceType::setBookingServiceItemId()
     * @param \Ews\StructType\EwsItemIdType $bookingServiceItemId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $bookingServiceItemId = null)
    {
        $this
            ->setBookingServiceItemId($bookingServiceItemId);
    }
    /**
     * Get BookingServiceItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getBookingServiceItemId()
    {
        return $this->BookingServiceItemId;
    }
    /**
     * Set BookingServiceItemId value
     * @param \Ews\StructType\EwsItemIdType $bookingServiceItemId
     * @return \Ews\StructType\EwsDeleteBookingServiceType
     */
    public function setBookingServiceItemId(\Ews\StructType\EwsItemIdType $bookingServiceItemId = null)
    {
        $this->BookingServiceItemId = $bookingServiceItemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeleteBookingServiceType
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
