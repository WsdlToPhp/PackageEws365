<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateXrmOrganizationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateXrmOrganizationType extends EwsBaseRequestType
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
     * Constructor method for CreateXrmOrganizationType
     * @uses EwsCreateXrmOrganizationType::setXrmOrganization()
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
     * @return \StructType\EwsCreateXrmOrganizationType
     */
    public function setXrmOrganization(\StructType\EwsXrmOrganizationItemType $xrmOrganization): self
    {
        $this->XrmOrganization = $xrmOrganization;
        
        return $this;
    }
}
