<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDistributionGroupToImListResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddDistributionGroupToImListResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ImGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsImGroupType|null
     */
    protected ?\StructType\EwsImGroupType $ImGroup = null;
    /**
     * Constructor method for AddDistributionGroupToImListResponseMessageType
     * @uses EwsAddDistributionGroupToImListResponseMessageType::setImGroup()
     * @param \StructType\EwsImGroupType $imGroup
     */
    public function __construct(?\StructType\EwsImGroupType $imGroup = null)
    {
        $this
            ->setImGroup($imGroup);
    }
    /**
     * Get ImGroup value
     * @return \StructType\EwsImGroupType|null
     */
    public function getImGroup(): ?\StructType\EwsImGroupType
    {
        return $this->ImGroup;
    }
    /**
     * Set ImGroup value
     * @param \StructType\EwsImGroupType $imGroup
     * @return \StructType\EwsAddDistributionGroupToImListResponseMessageType
     */
    public function setImGroup(?\StructType\EwsImGroupType $imGroup = null): self
    {
        $this->ImGroup = $imGroup;
        
        return $this;
    }
}
