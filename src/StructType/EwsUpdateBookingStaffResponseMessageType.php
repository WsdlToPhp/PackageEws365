<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $UpdatedItemId;
    /**
     * Constructor method for UpdateBookingStaffResponseMessageType
     * @uses EwsUpdateBookingStaffResponseMessageType::setUpdatedItemId()
     * @param \StructType\EwsItemIdType $updatedItemId
     */
    public function __construct(\StructType\EwsItemIdType $updatedItemId)
    {
        $this
            ->setUpdatedItemId($updatedItemId);
    }
    /**
     * Get UpdatedItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getUpdatedItemId(): \StructType\EwsItemIdType
    {
        return $this->UpdatedItemId;
    }
    /**
     * Set UpdatedItemId value
     * @param \StructType\EwsItemIdType $updatedItemId
     * @return \StructType\EwsUpdateBookingStaffResponseMessageType
     */
    public function setUpdatedItemId(\StructType\EwsItemIdType $updatedItemId): self
    {
        $this->UpdatedItemId = $updatedItemId;
        
        return $this;
    }
}
