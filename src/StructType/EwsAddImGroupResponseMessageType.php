<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddImGroupResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddImGroupResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ImGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsImGroupType
     */
    public $ImGroup;
    /**
     * Constructor method for AddImGroupResponseMessageType
     * @uses EwsAddImGroupResponseMessageType::setImGroup()
     * @param \Ews\StructType\EwsImGroupType $imGroup
     */
    public function __construct(\Ews\StructType\EwsImGroupType $imGroup = null)
    {
        $this
            ->setImGroup($imGroup);
    }
    /**
     * Get ImGroup value
     * @return \Ews\StructType\EwsImGroupType|null
     */
    public function getImGroup()
    {
        return $this->ImGroup;
    }
    /**
     * Set ImGroup value
     * @param \Ews\StructType\EwsImGroupType $imGroup
     * @return \Ews\StructType\EwsAddImGroupResponseMessageType
     */
    public function setImGroup(\Ews\StructType\EwsImGroupType $imGroup = null)
    {
        $this->ImGroup = $imGroup;
        return $this;
    }
}
