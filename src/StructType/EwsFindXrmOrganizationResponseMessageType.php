<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmOrganizationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindXrmOrganizationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The XrmOrganizations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfXrmOrganizationItemType
     */
    protected \ArrayType\EwsArrayOfXrmOrganizationItemType $XrmOrganizations;
    /**
     * Constructor method for FindXrmOrganizationResponseMessageType
     * @uses EwsFindXrmOrganizationResponseMessageType::setXrmOrganizations()
     * @param \ArrayType\EwsArrayOfXrmOrganizationItemType $xrmOrganizations
     */
    public function __construct(\ArrayType\EwsArrayOfXrmOrganizationItemType $xrmOrganizations)
    {
        $this
            ->setXrmOrganizations($xrmOrganizations);
    }
    /**
     * Get XrmOrganizations value
     * @return \ArrayType\EwsArrayOfXrmOrganizationItemType
     */
    public function getXrmOrganizations(): \ArrayType\EwsArrayOfXrmOrganizationItemType
    {
        return $this->XrmOrganizations;
    }
    /**
     * Set XrmOrganizations value
     * @param \ArrayType\EwsArrayOfXrmOrganizationItemType $xrmOrganizations
     * @return \StructType\EwsFindXrmOrganizationResponseMessageType
     */
    public function setXrmOrganizations(\ArrayType\EwsArrayOfXrmOrganizationItemType $xrmOrganizations): self
    {
        $this->XrmOrganizations = $xrmOrganizations;
        
        return $this;
    }
}
