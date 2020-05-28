<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
}
