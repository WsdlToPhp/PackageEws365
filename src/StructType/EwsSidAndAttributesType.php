<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SidAndAttributesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSidAndAttributesType extends AbstractStructBase
{
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
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
     * @param int $attributes
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
     * @return int
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @param int $attributes
     * @return \Ews\StructType\EwsSidAndAttributesType
     */
    public function setAttributes($attributes = null)
    {
        // validation for constraint: int
        if (!is_null($attributes) && !is_numeric($attributes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attributes)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($securityIdentifier) && !is_string($securityIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($securityIdentifier)), __LINE__);
        }
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
