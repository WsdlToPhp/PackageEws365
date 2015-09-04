<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAppManifestsResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetAppManifestsResponseType extends EwsResponseMessageType
{
    /**
     * The Manifests
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfAppManifestsType
     */
    public $Manifests;
    /**
     * Constructor method for GetAppManifestsResponseType
     * @uses EwsGetAppManifestsResponseType::setManifests()
     * @param \Ews\ArrayType\EwsArrayOfAppManifestsType $manifests
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfAppManifestsType $manifests = null)
    {
        $this
            ->setManifests($manifests);
    }
    /**
     * Get Manifests value
     * @return \Ews\ArrayType\EwsArrayOfAppManifestsType|null
     */
    public function getManifests()
    {
        return $this->Manifests;
    }
    /**
     * Set Manifests value
     * @param \Ews\ArrayType\EwsArrayOfAppManifestsType $manifests
     * @return \Ews\StructType\EwsGetAppManifestsResponseType
     */
    public function setManifests(\Ews\ArrayType\EwsArrayOfAppManifestsType $manifests = null)
    {
        $this->Manifests = $manifests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetAppManifestsResponseType
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
