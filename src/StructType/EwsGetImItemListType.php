<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetImItemListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetImItemListType extends EwsBaseRequestType
{
    /**
     * The ExtendedProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs
     */
    public $ExtendedProperties;
    /**
     * Constructor method for GetImItemListType
     * @uses EwsGetImItemListType::setExtendedProperties()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties = null)
    {
        $this
            ->setExtendedProperties($extendedProperties);
    }
    /**
     * Get ExtendedProperties value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs|null
     */
    public function getExtendedProperties()
    {
        return $this->ExtendedProperties;
    }
    /**
     * Set ExtendedProperties value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties
     * @return \Ews\StructType\EwsGetImItemListType
     */
    public function setExtendedProperties(\Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties = null)
    {
        $this->ExtendedProperties = $extendedProperties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetImItemListType
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
