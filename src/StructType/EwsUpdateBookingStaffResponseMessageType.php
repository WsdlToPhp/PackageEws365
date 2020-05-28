<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateBookingStaffResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateBookingStaffResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UpdatedItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
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
}
