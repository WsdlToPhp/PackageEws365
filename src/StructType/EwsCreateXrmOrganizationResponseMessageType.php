<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsXrmOrganizationItemType
     */
    public $XrmOrganization;
    /**
     * Constructor method for CreateXrmOrganizationResponseMessageType
     * @uses EwsCreateXrmOrganizationResponseMessageType::setXrmOrganization()
     * @param \Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization
     */
    public function __construct(\Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization = null)
    {
        $this
            ->setXrmOrganization($xrmOrganization);
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
     * @return \Ews\StructType\EwsCreateXrmOrganizationResponseMessageType
     */
    public function setXrmOrganization(\Ews\StructType\EwsXrmOrganizationItemType $xrmOrganization = null)
    {
        $this->XrmOrganization = $xrmOrganization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateXrmOrganizationResponseMessageType
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
