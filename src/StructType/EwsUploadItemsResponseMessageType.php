<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadItemsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUploadItemsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * Constructor method for UploadItemsResponseMessageType
     * @uses EwsUploadItemsResponseMessageType::setItemId()
     * @param \StructType\EwsItemIdType $itemId
     */
    public function __construct(?\StructType\EwsItemIdType $itemId = null)
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsUploadItemsResponseMessageType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
}
