<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BodyContentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBodyContentType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Value;
    /**
     * The BodyType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $BodyType;
    /**
     * Constructor method for BodyContentType
     * @uses EwsBodyContentType::setValue()
     * @uses EwsBodyContentType::setBodyType()
     * @param string $value
     * @param string $bodyType
     */
    public function __construct(string $value, string $bodyType)
    {
        $this
            ->setValue($value)
            ->setBodyType($bodyType);
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \StructType\EwsBodyContentType
     */
    public function setValue(string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get BodyType value
     * @return string
     */
    public function getBodyType(): string
    {
        return $this->BodyType;
    }
    /**
     * Set BodyType value
     * @uses \EnumType\EwsBodyTypeType::valueIsValid()
     * @uses \EnumType\EwsBodyTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bodyType
     * @return \StructType\EwsBodyContentType
     */
    public function setBodyType(string $bodyType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsBodyTypeType::valueIsValid($bodyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsBodyTypeType', is_array($bodyType) ? implode(', ', $bodyType) : var_export($bodyType, true), implode(', ', \EnumType\EwsBodyTypeType::getValidValues())), __LINE__);
        }
        $this->BodyType = $bodyType;
        
        return $this;
    }
}
