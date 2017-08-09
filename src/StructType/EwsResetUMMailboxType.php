<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResetUMMailboxType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResetUMMailboxType extends EwsBaseRequestType
{
    /**
     * The KeepProperties
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $KeepProperties;
    /**
     * Constructor method for ResetUMMailboxType
     * @uses EwsResetUMMailboxType::setKeepProperties()
     * @param bool $keepProperties
     */
    public function __construct($keepProperties = null)
    {
        $this
            ->setKeepProperties($keepProperties);
    }
    /**
     * Get KeepProperties value
     * @return bool
     */
    public function getKeepProperties()
    {
        return $this->KeepProperties;
    }
    /**
     * Set KeepProperties value
     * @param bool $keepProperties
     * @return \Ews\StructType\EwsResetUMMailboxType
     */
    public function setKeepProperties($keepProperties = null)
    {
        // validation for constraint: boolean
        if (!is_null($keepProperties) && !is_bool($keepProperties)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($keepProperties)), __LINE__);
        }
        $this->KeepProperties = $keepProperties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsResetUMMailboxType
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
