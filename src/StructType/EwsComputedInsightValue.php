<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfComputedInsightValueProperty|null
     */
    protected ?\ArrayType\EwsArrayOfComputedInsightValueProperty $Properties = null;
    /**
     * Constructor method for ComputedInsightValue
     * @uses EwsComputedInsightValue::setProperties()
     * @param \ArrayType\EwsArrayOfComputedInsightValueProperty $properties
     */
    public function __construct(?\ArrayType\EwsArrayOfComputedInsightValueProperty $properties = null)
    {
        $this
            ->setProperties($properties);
    }
    /**
     * Get Properties value
     * @return \ArrayType\EwsArrayOfComputedInsightValueProperty|null
     */
    public function getProperties(): ?\ArrayType\EwsArrayOfComputedInsightValueProperty
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \ArrayType\EwsArrayOfComputedInsightValueProperty $properties
     * @return \StructType\EwsComputedInsightValue
     */
    public function setProperties(?\ArrayType\EwsArrayOfComputedInsightValueProperty $properties = null): self
    {
        $this->Properties = $properties;
        
        return $this;
    }
}
