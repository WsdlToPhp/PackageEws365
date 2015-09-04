<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServerTimeZonesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetServerTimeZonesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The TimeZoneDefinitions
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType
     */
    public $TimeZoneDefinitions;
    /**
     * Constructor method for GetServerTimeZonesResponseMessageType
     * @uses EwsGetServerTimeZonesResponseMessageType::setTimeZoneDefinitions()
     * @param \Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions = null)
    {
        $this
            ->setTimeZoneDefinitions($timeZoneDefinitions);
    }
    /**
     * Get TimeZoneDefinitions value
     * @return \Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType
     */
    public function getTimeZoneDefinitions()
    {
        return $this->TimeZoneDefinitions;
    }
    /**
     * Set TimeZoneDefinitions value
     * @param \Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions
     * @return \Ews\StructType\EwsGetServerTimeZonesResponseMessageType
     */
    public function setTimeZoneDefinitions(\Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType $timeZoneDefinitions = null)
    {
        $this->TimeZoneDefinitions = $timeZoneDefinitions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetServerTimeZonesResponseMessageType
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
