<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateXrmOrganizationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateXrmOrganizationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The XrmOrganization
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsXrmOrganizationItemType
     */
    protected \StructType\EwsXrmOrganizationItemType $XrmOrganization;
    /**
     * Constructor method for UpdateXrmOrganizationResponseMessageType
     * @uses EwsUpdateXrmOrganizationResponseMessageType::setXrmOrganization()
     * @param \StructType\EwsXrmOrganizationItemType $xrmOrganization
     */
    public function __construct(\StructType\EwsXrmOrganizationItemType $xrmOrganization)
    {
        $this
            ->setXrmOrganization($xrmOrganization);
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
     * @return \StructType\EwsUpdateXrmOrganizationResponseMessageType
     */
    public function setXrmOrganization(\StructType\EwsXrmOrganizationItemType $xrmOrganization): self
    {
        $this->XrmOrganization = $xrmOrganization;
        
        return $this;
    }
}
