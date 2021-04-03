<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OneDriveItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: OneDrive search result item.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOneDriveItemType extends EwsItemType
{
    /**
     * The ResourceId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ResourceId;
    /**
     * Constructor method for OneDriveItemType
     * @uses EwsOneDriveItemType::setResourceId()
     * @param string $resourceId
     */
    public function __construct(string $resourceId)
    {
        $this
            ->setResourceId($resourceId);
    }
    /**
     * Get ResourceId value
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->ResourceId;
    }
    /**
     * Set ResourceId value
     * @param string $resourceId
     * @return \StructType\EwsOneDriveItemType
     */
    public function setResourceId(string $resourceId): self
    {
        // validation for constraint: string
        if (!is_null($resourceId) && !is_string($resourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resourceId, true), gettype($resourceId)), __LINE__);
        }
        $this->ResourceId = $resourceId;
        
        return $this;
    }
}
