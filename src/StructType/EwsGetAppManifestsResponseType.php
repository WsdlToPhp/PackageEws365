<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAppManifestsResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetAppManifestsResponseType extends EwsResponseMessageType
{
    /**
     * The Manifests
     * Meta information extracted from the WSDL
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
}
