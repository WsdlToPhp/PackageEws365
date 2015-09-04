<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmOrganizationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFindXrmOrganizationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The XrmOrganizations
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindXrmOrganizationResponseMessageType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
