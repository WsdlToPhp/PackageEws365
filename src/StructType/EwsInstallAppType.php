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
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manifest, true), gettype($manifest)), __LINE__);
        }
        $this->Manifest = $manifest;
        return $this;
    }
}
