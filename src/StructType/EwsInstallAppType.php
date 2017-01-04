<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InstallAppType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInstallAppType extends EwsBaseRequestType
{
    /**
     * The Manifest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Manifest;
    /**
     * Constructor method for InstallAppType
     * @uses EwsInstallAppType::setManifest()
     * @param string $manifest
     */
    public function __construct($manifest = null)
    {
        $this
            ->setManifest($manifest);
    }
    /**
     * Get Manifest value
     * @return string
     */
    public function getManifest()
    {
        return $this->Manifest;
    }
    /**
     * Set Manifest value
     * @param string $manifest
     * @return \Ews\StructType\EwsInstallAppType
     */
    public function setManifest($manifest = null)
    {
        // validation for constraint: string
        if (!is_null($manifest) && !is_string($manifest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($manifest)), __LINE__);
        }
        $this->Manifest = $manifest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsInstallAppType
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
