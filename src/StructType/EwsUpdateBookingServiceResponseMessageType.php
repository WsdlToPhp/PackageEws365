<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateBookingServiceResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateBookingServiceResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UpdatedBookingServiceItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $UpdatedBookingServiceItemId;
    /**
     * Constructor method for UpdateBookingServiceResponseMessageType
     * @uses EwsUpdateBookingServiceResponseMessageType::setUpdatedBookingServiceItemId()
     * @param \Ews\StructType\EwsItemIdType $updatedBookingServiceItemId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $updatedBookingServiceItemId = null)
    {
        $this
            ->setUpdatedBookingServiceItemId($updatedBookingServiceItemId);
    }
    /**
     * Get UpdatedBookingServiceItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getUpdatedBookingServiceItemId()
    {
        return $this->UpdatedBookingServiceItemId;
    }
    /**
     * Set UpdatedBookingServiceItemId value
     * @param \Ews\StructType\EwsItemIdType $updatedBookingServiceItemId
     * @return \Ews\StructType\EwsUpdateBookingServiceResponseMessageType
     */
    public function setUpdatedBookingServiceItemId(\Ews\StructType\EwsItemIdType $updatedBookingServiceItemId = null)
    {
        $this->UpdatedBookingServiceItemId = $updatedBookingServiceItemId;
        return $this;
    }
}
