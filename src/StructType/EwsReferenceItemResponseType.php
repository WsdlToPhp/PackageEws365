<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceItemResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReferenceItemResponseType extends AbstractStructBase
{
    /**
     * The ReferenceItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ReferenceItemId;
    /**
     * The ObjectName
     * Meta information extracted from the WSDL
     * - use: prohibited
     * @var string
     */
    public $ObjectName;
    /**
     * Constructor method for ReferenceItemResponseType
     * @uses EwsReferenceItemResponseType::setReferenceItemId()
     * @uses EwsReferenceItemResponseType::setObjectName()
     * @param \Ews\StructType\EwsItemIdType $referenceItemId
     * @param string $objectName
     */
    public function __construct(\Ews\StructType\EwsItemIdType $referenceItemId = null, $objectName = null)
    {
        $this
            ->setReferenceItemId($referenceItemId)
            ->setObjectName($objectName);
    }
    /**
     * Get ReferenceItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getReferenceItemId()
    {
        return $this->ReferenceItemId;
    }
    /**
     * Set ReferenceItemId value
     * @param \Ews\StructType\EwsItemIdType $referenceItemId
     * @return \Ews\StructType\EwsReferenceItemResponseType
     */
    public function setReferenceItemId(\Ews\StructType\EwsItemIdType $referenceItemId = null)
    {
        $this->ReferenceItemId = $referenceItemId;
        return $this;
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \Ews\StructType\EwsReferenceItemResponseType
     */
    public function setObjectName($objectName = null)
    {
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectName, true), gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        return $this;
    }
}
