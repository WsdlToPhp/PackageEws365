<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateXrmActivityStreamType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateXrmActivityStreamType extends EwsBaseRequestType
{
    /**
     * The Activity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsXrmActivityStreamType
     */
    protected \StructType\EwsXrmActivityStreamType $Activity;
    /**
     * The EntityId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $EntityId;
    /**
     * Constructor method for UpdateXrmActivityStreamType
     * @uses EwsUpdateXrmActivityStreamType::setActivity()
     * @uses EwsUpdateXrmActivityStreamType::setEntityId()
     * @param \StructType\EwsXrmActivityStreamType $activity
     * @param \StructType\EwsItemIdType $entityId
     */
    public function __construct(\StructType\EwsXrmActivityStreamType $activity, \StructType\EwsItemIdType $entityId)
    {
        $this
            ->setActivity($activity)
            ->setEntityId($entityId);
    }
    /**
     * Get Activity value
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function getActivity(): \StructType\EwsXrmActivityStreamType
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @param \StructType\EwsXrmActivityStreamType $activity
     * @return \StructType\EwsUpdateXrmActivityStreamType
     */
    public function setActivity(\StructType\EwsXrmActivityStreamType $activity): self
    {
        $this->Activity = $activity;
        
        return $this;
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
     * @return \StructType\EwsUpdateXrmActivityStreamType
     */
    public function setEntityId(\StructType\EwsItemIdType $entityId): self
    {
        $this->EntityId = $entityId;
        
        return $this;
    }
}
