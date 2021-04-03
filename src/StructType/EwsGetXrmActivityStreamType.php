<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetXrmActivityStreamType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetXrmActivityStreamType extends EwsBaseRequestType
{
    /**
     * The EntityId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $EntityId;
    /**
     * Constructor method for GetXrmActivityStreamType
     * @uses EwsGetXrmActivityStreamType::setEntityId()
     * @param \StructType\EwsItemIdType $entityId
     */
    public function __construct(\StructType\EwsItemIdType $entityId)
    {
        $this
            ->setEntityId($entityId);
    }
    /**
     * Get EntityId value
     * @return \StructType\EwsItemIdType
     */
    public function getEntityId(): \StructType\EwsItemIdType
    {
        return $this->EntityId;
    }
    /**
     * Set EntityId value
     * @param \StructType\EwsItemIdType $entityId
     * @return \StructType\EwsGetXrmActivityStreamType
     */
    public function setEntityId(\StructType\EwsItemIdType $entityId): self
    {
        $this->EntityId = $entityId;
        
        return $this;
    }
}
