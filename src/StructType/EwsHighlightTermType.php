<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HighlightTermType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsHighlightTermType extends AbstractStructBase
{
    /**
     * The Scope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Scope;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Value;
    /**
     * Constructor method for HighlightTermType
     * @uses EwsHighlightTermType::setScope()
     * @uses EwsHighlightTermType::setValue()
     * @param string $scope
     * @param string $value
     */
    public function __construct(string $scope, string $value)
    {
        $this
            ->setScope($scope)
            ->setValue($value);
    }
    /**
     * Get Scope value
     * @return string
     */
    public function getScope(): string
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @param string $scope
     * @return \StructType\EwsHighlightTermType
     */
    public function setScope(string $scope): self
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->Scope = $scope;
        
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
     * @return \StructType\EwsHighlightTermType
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
