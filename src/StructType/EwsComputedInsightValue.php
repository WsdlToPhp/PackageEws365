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
     * Meta information extracted from the WSDL
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
}
