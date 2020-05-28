<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsXrmActivityStreamType
     */
    public $Activity;
    /**
     * The EntityId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $EntityId;
    /**
     * Constructor method for UpdateXrmActivityStreamType
     * @uses EwsUpdateXrmActivityStreamType::setActivity()
     * @uses EwsUpdateXrmActivityStreamType::setEntityId()
     * @param \Ews\StructType\EwsXrmActivityStreamType $activity
     * @param \Ews\StructType\EwsItemIdType $entityId
     */
    public function __construct(\Ews\StructType\EwsXrmActivityStreamType $activity = null, \Ews\StructType\EwsItemIdType $entityId = null)
    {
        $this
            ->setActivity($activity)
            ->setEntityId($entityId);
    }
    /**
     * Get Activity value
     * @return \Ews\StructType\EwsXrmActivityStreamType
     */
    public function getActivity()
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @param \Ews\StructType\EwsXrmActivityStreamType $activity
     * @return \Ews\StructType\EwsUpdateXrmActivityStreamType
     */
    public function setActivity(\Ews\StructType\EwsXrmActivityStreamType $activity = null)
    {
        $this->Activity = $activity;
        return $this;
    }
    /**
     * Get EntityId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getEntityId()
    {
        return $this->EntityId;
    }
    /**
     * Set EntityId value
     * @param \Ews\StructType\EwsItemIdType $entityId
     * @return \Ews\StructType\EwsUpdateXrmActivityStreamType
     */
    public function setEntityId(\Ews\StructType\EwsItemIdType $entityId = null)
    {
        $this->EntityId = $entityId;
        return $this;
    }
}
