<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDistributionGroupToImListResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddDistributionGroupToImListResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ImGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A Group on the ImContactList, with one or more members
     * @var \Ews\StructType\EwsImGroupType
     */
    public $ImGroup;
    /**
     * Constructor method for AddDistributionGroupToImListResponseMessageType
     * @uses EwsAddDistributionGroupToImListResponseMessageType::setImGroup()
     * @param \Ews\StructType\EwsImGroupType $imGroup
     */
    public function __construct(\Ews\StructType\EwsImGroupType $imGroup = null)
    {
        $this
            ->setImGroup($imGroup);
    }
    /**
     * Get ImGroup value
     * @return \Ews\StructType\EwsImGroupType|null
     */
    public function getImGroup()
    {
        return $this->ImGroup;
    }
    /**
     * Set ImGroup value
     * @param \Ews\StructType\EwsImGroupType $imGroup
     * @return \Ews\StructType\EwsAddDistributionGroupToImListResponseMessageType
     */
    public function setImGroup(\Ews\StructType\EwsImGroupType $imGroup = null)
    {
        $this->ImGroup = $imGroup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAddDistributionGroupToImListResponseMessageType
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
