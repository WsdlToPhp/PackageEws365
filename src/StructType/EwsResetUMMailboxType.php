<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResetUMMailboxType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsResetUMMailboxType extends EwsBaseRequestType
{
    /**
     * The KeepProperties
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $KeepProperties;
    /**
     * Constructor method for ResetUMMailboxType
     * @uses EwsResetUMMailboxType::setKeepProperties()
     * @param boolean $keepProperties
     */
    public function __construct($keepProperties = null)
    {
        $this
            ->setKeepProperties($keepProperties);
    }
    /**
     * Get KeepProperties value
     * @return boolean
     */
    public function getKeepProperties()
    {
        return $this->KeepProperties;
    }
    /**
     * Set KeepProperties value
     * @param boolean $keepProperties
     * @return \Ews\StructType\EwsResetUMMailboxType
     */
    public function setKeepProperties($keepProperties = null)
    {
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
