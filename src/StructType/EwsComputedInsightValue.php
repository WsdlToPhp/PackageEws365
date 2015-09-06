<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComputedInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsComputedInsightValue extends EwsInsightValue
{
    /**
     * The Properties
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfComputedInsightValueProperty
     */
    public $Properties;
    /**
     * Constructor method for ComputedInsightValue
     * @uses EwsComputedInsightValue::setProperties()
     * @param \Ews\ArrayType\EwsArrayOfComputedInsightValueProperty $properties
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfComputedInsightValueProperty $properties = null)
    {
        $this
            ->setProperties($properties);
    }
    /**
     * Get Properties value
     * @return \Ews\ArrayType\EwsArrayOfComputedInsightValueProperty|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \Ews\ArrayType\EwsArrayOfComputedInsightValueProperty $properties
     * @return \Ews\StructType\EwsComputedInsightValue
     */
    public function setProperties(\Ews\ArrayType\EwsArrayOfComputedInsightValueProperty $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsComputedInsightValue
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
