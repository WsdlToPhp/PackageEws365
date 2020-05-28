<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $Kind;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for TransitionTargetType
     * @uses EwsTransitionTargetType::setKind()
     * @uses EwsTransitionTargetType::set_()
     * @param string $kind
     * @param string $_
     */
    public function __construct($kind = null, $_ = null)
    {
        $this
            ->setKind($kind)
            ->set_($_);
    }
    /**
     * Get Kind value
     * @return string
     */
    public function getKind()
    {
        return $this->Kind;
    }
    /**
     * Set Kind value
     * @uses \Ews\EnumType\EwsTransitionTargetKindType::valueIsValid()
     * @uses \Ews\EnumType\EwsTransitionTargetKindType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $kind
     * @return \Ews\StructType\EwsTransitionTargetType
     */
    public function setKind($kind = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsTransitionTargetKindType::valueIsValid($kind)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsTransitionTargetKindType', is_array($kind) ? implode(', ', $kind) : var_export($kind, true), implode(', ', \Ews\EnumType\EwsTransitionTargetKindType::getValidValues())), __LINE__);
        }
        $this->Kind = $kind;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ews\StructType\EwsTransitionTargetType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
}
