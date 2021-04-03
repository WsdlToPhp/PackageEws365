<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateXrmOrganizationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateXrmOrganizationResponseMessageType extends EwsResponseMessageType
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
     * Constructor method for CreateXrmOrganizationResponseMessageType
     * @uses EwsCreateXrmOrganizationResponseMessageType::setXrmOrganization()
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
     * @return \StructType\EwsCreateXrmOrganizationResponseMessageType
     */
    public function setXrmOrganization(\StructType\EwsXrmOrganizationItemType $xrmOrganization): self
    {
        $this->XrmOrganization = $xrmOrganization;
        
        return $this;
    }
}
