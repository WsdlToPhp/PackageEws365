<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $EntityId;
    /**
     * The XrmOrganization
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsXrmOrganizationItemType
     */
    protected \StructType\EwsXrmOrganizationItemType $XrmOrganization;
    /**
     * Constructor method for UpdateXrmOrganizationType
     * @uses EwsUpdateXrmOrganizationType::setEntityId()
     * @uses EwsUpdateXrmOrganizationType::setXrmOrganization()
     * @param \StructType\EwsItemIdType $entityId
     * @param \StructType\EwsXrmOrganizationItemType $xrmOrganization
     */
    public function __construct(\StructType\EwsItemIdType $entityId, \StructType\EwsXrmOrganizationItemType $xrmOrganization)
    {
        $this
            ->setEntityId($entityId)
            ->setXrmOrganization($xrmOrganization);
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
     * @return \StructType\EwsUpdateXrmOrganizationType
     */
    public function setEntityId(\StructType\EwsItemIdType $entityId): self
    {
        $this->EntityId = $entityId;
        
        return $this;
    }
    /**
     * Get XrmOrganization value
     * @return \StructType\EwsXrmOrganizationItemType
     */
    public function getXrmOrganization(): \StructType\EwsXrmOrganizationItemType
    {
        return $this->XrmOrganization;
    }
    /**
     * Set XrmOrganization value
     * @param \StructType\EwsXrmOrganizationItemType $xrmOrganization
     * @return \StructType\EwsUpdateXrmOrganizationType
     */
    public function setXrmOrganization(\StructType\EwsXrmOrganizationItemType $xrmOrganization): self
    {
        $this->XrmOrganization = $xrmOrganization;
        
        return $this;
    }
}
