<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkAsJunkResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMarkAsJunkResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MovedItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $MovedItemId = null;
    /**
     * Constructor method for MarkAsJunkResponseMessageType
     * @uses EwsMarkAsJunkResponseMessageType::setMovedItemId()
     * @param \StructType\EwsItemIdType $movedItemId
     */
    public function __construct(?\StructType\EwsItemIdType $movedItemId = null)
    {
        $this
            ->setMovedItemId($movedItemId);
    }
    /**
     * Get MovedItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getMovedItemId(): ?\StructType\EwsItemIdType
    {
        return $this->MovedItemId;
    }
    /**
     * Set MovedItemId value
     * @param \StructType\EwsItemIdType $movedItemId
     * @return \StructType\EwsMarkAsJunkResponseMessageType
     */
    public function setMovedItemId(?\StructType\EwsItemIdType $movedItemId = null): self
    {
        $this->MovedItemId = $movedItemId;
        
        return $this;
    }
}
