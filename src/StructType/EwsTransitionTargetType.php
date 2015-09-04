<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransitionTargetType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsTransitionTargetType extends AbstractStructBase
{
    /**
     * The Kind
     * Meta informations extracted from the WSDL
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
     * @param string $kind
     * @return \Ews\StructType\EwsTransitionTargetType
     */
    public function setKind($kind = null)
    {
        if (!\Ews\EnumType\EwsTransitionTargetKindType::valueIsValid($kind)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $kind, implode(', ', \Ews\EnumType\EwsTransitionTargetKindType::getValidValues())), __LINE__);
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
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTransitionTargetType
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
