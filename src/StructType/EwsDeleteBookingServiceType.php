<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBookingServiceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteBookingServiceType extends EwsBaseBookingRequestType
{
    /**
     * The BookingServiceItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
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
}
