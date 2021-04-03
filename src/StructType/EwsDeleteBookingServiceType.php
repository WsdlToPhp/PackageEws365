<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $BookingServiceItemId;
    /**
     * Constructor method for DeleteBookingServiceType
     * @uses EwsDeleteBookingServiceType::setBookingServiceItemId()
     * @param \StructType\EwsItemIdType $bookingServiceItemId
     */
    public function __construct(\StructType\EwsItemIdType $bookingServiceItemId)
    {
        $this
            ->setBookingServiceItemId($bookingServiceItemId);
    }
    /**
     * Get BookingServiceItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getBookingServiceItemId(): \StructType\EwsItemIdType
    {
        return $this->BookingServiceItemId;
    }
    /**
     * Set BookingServiceItemId value
     * @param \StructType\EwsItemIdType $bookingServiceItemId
     * @return \StructType\EwsDeleteBookingServiceType
     */
    public function setBookingServiceItemId(\StructType\EwsItemIdType $bookingServiceItemId): self
    {
        $this->BookingServiceItemId = $bookingServiceItemId;
        
        return $this;
    }
}
