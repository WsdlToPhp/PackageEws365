<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBookingServiceResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteBookingServiceResponseMessageType extends EwsResponseMessageType
{
    /**
     * The DeletedId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $DeletedId;
    /**
     * Constructor method for DeleteBookingServiceResponseMessageType
     * @uses EwsDeleteBookingServiceResponseMessageType::setDeletedId()
     * @param \StructType\EwsItemIdType $deletedId
     */
    public function __construct(\StructType\EwsItemIdType $deletedId)
    {
        $this
            ->setDeletedId($deletedId);
    }
    /**
     * Get DeletedId value
     * @return \StructType\EwsItemIdType
     */
    public function getDeletedId(): \StructType\EwsItemIdType
    {
        return $this->DeletedId;
    }
    /**
     * Set DeletedId value
     * @param \StructType\EwsItemIdType $deletedId
     * @return \StructType\EwsDeleteBookingServiceResponseMessageType
     */
    public function setDeletedId(\StructType\EwsItemIdType $deletedId): self
    {
        $this->DeletedId = $deletedId;
        
        return $this;
    }
}
