<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SidAndAttributesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSidAndAttributesType extends AbstractStructBase
{
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - use: required
     * @var unsignedInt
     */
    public $Attributes;
    /**
     * The SecurityIdentifier
     * @var string
     */
    public $SecurityIdentifier;
    /**
     * Constructor method for SidAndAttributesType
     * @uses EwsSidAndAttributesType::setAttributes()
     * @uses EwsSidAndAttributesType::setSecurityIdentifier()
     * @param unsignedInt $attributes
     * @param string $securityIdentifier
     */
    public function __construct($attributes = null, $securityIdentifier = null)
    {
        $this
            ->setAttributes($attributes)
            ->setSecurityIdentifier($securityIdentifier);
    }
    /**
     * Get Attributes value
     * @return unsignedInt
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @param unsignedInt $attributes
     * @return \Ews\StructType\EwsSidAndAttributesType
     */
    public function setAttributes($attributes = null)
    {
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Get SecurityIdentifier value
     * @return string|null
     */
    public function getSecurityIdentifier()
    {
        return $this->SecurityIdentifier;
    }
    /**
     * Set SecurityIdentifier value
     * @param string $securityIdentifier
     * @return \Ews\StructType\EwsSidAndAttributesType
     */
    public function setSecurityIdentifier($securityIdentifier = null)
    {
        $this->SecurityIdentifier = $securityIdentifier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSidAndAttributesType
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
