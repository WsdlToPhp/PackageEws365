<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddImGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddImGroupType extends EwsBaseRequestType
{
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $DisplayName;
    /**
     * Constructor method for AddImGroupType
     * @uses EwsAddImGroupType::setDisplayName()
     * @param string $displayName
     */
    public function __construct($displayName = null)
    {
        $this
            ->setDisplayName($displayName);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsAddImGroupType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: minLength
        if ((is_scalar(displayName) && strlen(displayName) < 1) || (is_array(displayName) && count(displayName) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAddImGroupType
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
