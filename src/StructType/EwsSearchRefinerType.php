<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $RefinerType;
    /**
     * The Refiner
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsDynamicRefinerQueryType
     */
    protected \StructType\EwsDynamicRefinerQueryType $Refiner;
    /**
     * Constructor method for SearchRefinerType
     * @uses EwsSearchRefinerType::setRefinerType()
     * @uses EwsSearchRefinerType::setRefiner()
     * @param string $refinerType
     * @param \StructType\EwsDynamicRefinerQueryType $refiner
     */
    public function __construct(string $refinerType, \StructType\EwsDynamicRefinerQueryType $refiner)
    {
        $this
            ->setRefinerType($refinerType)
            ->setRefiner($refiner);
    }
    /**
     * Get RefinerType value
     * @return string
     */
    public function getRefinerType(): string
    {
        return $this->RefinerType;
    }
    /**
     * Set RefinerType value
     * @uses \EnumType\EwsRefinerTypeType::valueIsValid()
     * @uses \EnumType\EwsRefinerTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $refinerType
     * @return \StructType\EwsSearchRefinerType
     */
    public function setRefinerType(string $refinerType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsRefinerTypeType::valueIsValid($refinerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsRefinerTypeType', is_array($refinerType) ? implode(', ', $refinerType) : var_export($refinerType, true), implode(', ', \EnumType\EwsRefinerTypeType::getValidValues())), __LINE__);
        }
        $this->RefinerType = $refinerType;
        
        return $this;
    }
    /**
     * Get Refiner value
     * @return \StructType\EwsDynamicRefinerQueryType
     */
    public function getRefiner(): \StructType\EwsDynamicRefinerQueryType
    {
        return $this->Refiner;
    }
    /**
     * Set Refiner value
     * @param \StructType\EwsDynamicRefinerQueryType $refiner
     * @return \StructType\EwsSearchRefinerType
     */
    public function setRefiner(\StructType\EwsDynamicRefinerQueryType $refiner): self
    {
        $this->Refiner = $refiner;
        
        return $this;
    }
}
