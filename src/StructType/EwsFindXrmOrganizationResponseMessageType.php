<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfXrmOrganizationItemType
     */
    public $XrmOrganizations;
    /**
     * Constructor method for FindXrmOrganizationResponseMessageType
     * @uses EwsFindXrmOrganizationResponseMessageType::setXrmOrganizations()
     * @param \Ews\ArrayType\EwsArrayOfXrmOrganizationItemType $xrmOrganizations
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfXrmOrganizationItemType $xrmOrganizations = null)
    {
        $this
            ->setXrmOrganizations($xrmOrganizations);
    }
    /**
     * Get XrmOrganizations value
     * @return \Ews\ArrayType\EwsArrayOfXrmOrganizationItemType
     */
    public function getXrmOrganizations()
    {
        return $this->XrmOrganizations;
    }
    /**
     * Set XrmOrganizations value
     * @param \Ews\ArrayType\EwsArrayOfXrmOrganizationItemType $xrmOrganizations
     * @return \Ews\StructType\EwsFindXrmOrganizationResponseMessageType
     */
    public function setXrmOrganizations(\Ews\ArrayType\EwsArrayOfXrmOrganizationItemType $xrmOrganizations = null)
    {
        $this->XrmOrganizations = $xrmOrganizations;
        return $this;
    }
}
