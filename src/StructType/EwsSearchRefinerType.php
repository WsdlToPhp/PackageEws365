<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchRefinerType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchRefinerType extends AbstractStructBase
{
    /**
     * The RefinerType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RefinerType;
    /**
     * The Refiner
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsDynamicRefinerQueryType
     */
    public $Refiner;
    /**
     * Constructor method for SearchRefinerType
     * @uses EwsSearchRefinerType::setRefinerType()
     * @uses EwsSearchRefinerType::setRefiner()
     * @param string $refinerType
     * @param \Ews\StructType\EwsDynamicRefinerQueryType $refiner
     */
    public function __construct($refinerType = null, \Ews\StructType\EwsDynamicRefinerQueryType $refiner = null)
    {
        $this
            ->setRefinerType($refinerType)
            ->setRefiner($refiner);
    }
    /**
     * Get RefinerType value
     * @return string
     */
    public function getRefinerType()
    {
        return $this->RefinerType;
    }
    /**
     * Set RefinerType value
     * @uses \Ews\EnumType\EwsRefinerTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsRefinerTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refinerType
     * @return \Ews\StructType\EwsSearchRefinerType
     */
    public function setRefinerType($refinerType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsRefinerTypeType::valueIsValid($refinerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsRefinerTypeType', is_array($refinerType) ? implode(', ', $refinerType) : var_export($refinerType, true), implode(', ', \Ews\EnumType\EwsRefinerTypeType::getValidValues())), __LINE__);
        }
        $this->RefinerType = $refinerType;
        return $this;
    }
    /**
     * Get Refiner value
     * @return \Ews\StructType\EwsDynamicRefinerQueryType
     */
    public function getRefiner()
    {
        return $this->Refiner;
    }
    /**
     * Set Refiner value
     * @param \Ews\StructType\EwsDynamicRefinerQueryType $refiner
     * @return \Ews\StructType\EwsSearchRefinerType
     */
    public function setRefiner(\Ews\StructType\EwsDynamicRefinerQueryType $refiner = null)
    {
        $this->Refiner = $refiner;
        return $this;
    }
}
