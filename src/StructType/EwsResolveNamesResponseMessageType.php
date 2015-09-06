<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResolveNamesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResolveNamesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ResolutionSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsArrayOfResolutionType
     */
    public $ResolutionSet;
    /**
     * Constructor method for ResolveNamesResponseMessageType
     * @uses EwsResolveNamesResponseMessageType::setResolutionSet()
     * @param \Ews\StructType\EwsArrayOfResolutionType $resolutionSet
     */
    public function __construct(\Ews\StructType\EwsArrayOfResolutionType $resolutionSet = null)
    {
        $this
            ->setResolutionSet($resolutionSet);
    }
    /**
     * Get ResolutionSet value
     * @return \Ews\StructType\EwsArrayOfResolutionType|null
     */
    public function getResolutionSet()
    {
        return $this->ResolutionSet;
    }
    /**
     * Set ResolutionSet value
     * @param \Ews\StructType\EwsArrayOfResolutionType $resolutionSet
     * @return \Ews\StructType\EwsResolveNamesResponseMessageType
     */
    public function setResolutionSet(\Ews\StructType\EwsArrayOfResolutionType $resolutionSet = null)
    {
        $this->ResolutionSet = $resolutionSet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsResolveNamesResponseMessageType
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
