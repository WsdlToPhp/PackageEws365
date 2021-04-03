<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupIdentity StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupIdentity extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Type;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Value;
    /**
     * Constructor method for UnifiedGroupIdentity
     * @uses EwsUnifiedGroupIdentity::setType()
     * @uses EwsUnifiedGroupIdentity::setValue()
     * @param string $type
     * @param string $value
     */
    public function __construct(string $type, string $value)
    {
        $this
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\EwsUnifiedGroupIdentityType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupIdentityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\EwsUnifiedGroupIdentity
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupIdentityType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupIdentityType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EwsUnifiedGroupIdentityType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
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
     * @return \StructType\EwsUnifiedGroupIdentity
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
}
