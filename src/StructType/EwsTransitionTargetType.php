<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransitionTargetType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTransitionTargetType extends AbstractStructBase
{
    /**
     * The Kind
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Kind;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * Constructor method for TransitionTargetType
     * @uses EwsTransitionTargetType::setKind()
     * @uses EwsTransitionTargetType::set_()
     * @param string $kind
     * @param string $_
     */
    public function __construct(string $kind, ?string $_ = null)
    {
        $this
            ->setKind($kind)
            ->set_($_);
    }
    /**
     * Get Kind value
     * @return string
     */
    public function getKind(): string
    {
        return $this->Kind;
    }
    /**
     * Set Kind value
     * @uses \EnumType\EwsTransitionTargetKindType::valueIsValid()
     * @uses \EnumType\EwsTransitionTargetKindType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kind
     * @return \StructType\EwsTransitionTargetType
     */
    public function setKind(string $kind): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsTransitionTargetKindType::valueIsValid($kind)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsTransitionTargetKindType', is_array($kind) ? implode(', ', $kind) : var_export($kind, true), implode(', ', \EnumType\EwsTransitionTargetKindType::getValidValues())), __LINE__);
        }
        $this->Kind = $kind;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\EwsTransitionTargetType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
}
