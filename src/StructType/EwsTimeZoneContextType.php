<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeZoneContextType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Allow attributes in the soap namespace to be used here
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTimeZoneContextType extends AbstractStructBase
{
    /**
     * The TimeZoneDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public $TimeZoneDefinition;
    /**
     * Constructor method for TimeZoneContextType
     * @uses EwsTimeZoneContextType::setTimeZoneDefinition()
     * @param \Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition
     */
    public function __construct(\Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition = null)
    {
        $this
            ->setTimeZoneDefinition($timeZoneDefinition);
    }
    /**
     * Get TimeZoneDefinition value
     * @return \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public function getTimeZoneDefinition()
    {
        return $this->TimeZoneDefinition;
    }
    /**
     * Set TimeZoneDefinition value
     * @param \Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition
     * @return \Ews\StructType\EwsTimeZoneContextType
     */
    public function setTimeZoneDefinition(\Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition = null)
    {
        $this->TimeZoneDefinition = $timeZoneDefinition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTimeZoneContextType
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
