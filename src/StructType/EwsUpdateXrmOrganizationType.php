<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateXrmOrganizationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateXrmOrganizationType extends EwsBaseRequestType
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
     * The XrmOrganization
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsXrmOrganizationItemType
     */
    public $XrmOrganization;
    /**
     * Constructor method for UpdateXrmOrganizationType
     * @uses EwsUpdateXrmOrganizationType::setEntityId()
     * @uses EwsUpdateXrmOrganizationType::setXrmOrganization()
     * @param \Ews\StructType\EwsItemIdType $entityId
     * @param \Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization
     */
    public function __construct(\Ews\StructType\EwsItemIdType $entityId = null, \Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization = null)
    {
        $this
            ->setEntityId($entityId)
            ->setXrmOrganization($xrmOrganization);
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
     * @return \Ews\StructType\EwsUpdateXrmOrganizationType
     */
    public function setEntityId(\Ews\StructType\EwsItemIdType $entityId = null)
    {
        $this->EntityId = $entityId;
        return $this;
    }
    /**
     * Get XrmOrganization value
     * @return \Ews\StructType\EwsXrmOrganizationItemType
     */
    public function getXrmOrganization()
    {
        return $this->XrmOrganization;
    }
    /**
     * Set XrmOrganization value
     * @param \Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization
     * @return \Ews\StructType\EwsUpdateXrmOrganizationType
     */
    public function setXrmOrganization(\Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization = null)
    {
        $this->XrmOrganization = $xrmOrganization;
        return $this;
    }
}
