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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RefinerType;
    /**
     * The Refiner
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $refinerType, implode(', ', \Ews\EnumType\EwsRefinerTypeType::getValidValues())), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchRefinerType
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
