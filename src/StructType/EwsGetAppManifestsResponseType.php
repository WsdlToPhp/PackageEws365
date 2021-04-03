<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfAppManifestsType|null
     */
    protected ?\ArrayType\EwsArrayOfAppManifestsType $Manifests = null;
    /**
     * Constructor method for GetAppManifestsResponseType
     * @uses EwsGetAppManifestsResponseType::setManifests()
     * @param \ArrayType\EwsArrayOfAppManifestsType $manifests
     */
    public function __construct(?\ArrayType\EwsArrayOfAppManifestsType $manifests = null)
    {
        $this
            ->setManifests($manifests);
    }
    /**
     * Get Manifests value
     * @return \ArrayType\EwsArrayOfAppManifestsType|null
     */
    public function getManifests(): ?\ArrayType\EwsArrayOfAppManifestsType
    {
        return $this->Manifests;
    }
    /**
     * Set Manifests value
     * @param \ArrayType\EwsArrayOfAppManifestsType $manifests
     * @return \StructType\EwsGetAppManifestsResponseType
     */
    public function setManifests(?\ArrayType\EwsArrayOfAppManifestsType $manifests = null): self
    {
        $this->Manifests = $manifests;
        
        return $this;
    }
}
