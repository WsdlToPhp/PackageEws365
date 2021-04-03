<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $UpdatedBookingServiceItemId;
    /**
     * Constructor method for UpdateBookingServiceResponseMessageType
     * @uses EwsUpdateBookingServiceResponseMessageType::setUpdatedBookingServiceItemId()
     * @param \StructType\EwsItemIdType $updatedBookingServiceItemId
     */
    public function __construct(\StructType\EwsItemIdType $updatedBookingServiceItemId)
    {
        $this
            ->setUpdatedBookingServiceItemId($updatedBookingServiceItemId);
    }
    /**
     * Get UpdatedBookingServiceItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getUpdatedBookingServiceItemId(): \StructType\EwsItemIdType
    {
        return $this->UpdatedBookingServiceItemId;
    }
    /**
     * Set UpdatedBookingServiceItemId value
     * @param \StructType\EwsItemIdType $updatedBookingServiceItemId
     * @return \StructType\EwsUpdateBookingServiceResponseMessageType
     */
    public function setUpdatedBookingServiceItemId(\StructType\EwsItemIdType $updatedBookingServiceItemId): self
    {
        $this->UpdatedBookingServiceItemId = $updatedBookingServiceItemId;
        
        return $this;
    }
}
