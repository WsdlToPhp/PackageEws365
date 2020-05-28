<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetXrmOrganizationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetXrmOrganizationType extends EwsBaseRequestType
{
    /**
     * The EntityId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $EntityId;
    /**
     * Constructor method for GetXrmOrganizationType
     * @uses EwsGetXrmOrganizationType::setEntityId()
     * @param \Ews\StructType\EwsItemIdType $entityId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $entityId = null)
    {
        $this
            ->setEntityId($entityId);
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
     * @return \Ews\StructType\EwsGetXrmOrganizationType
     */
    public function setEntityId(\Ews\StructType\EwsItemIdType $entityId = null)
    {
        $this->EntityId = $entityId;
        return $this;
    }
}
