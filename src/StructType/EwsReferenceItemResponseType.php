<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceItemResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsReferenceItemResponseType extends EwsResponseObjectType
{
    /**
     * The ReferenceItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ReferenceItemId;
    /**
     * The ObjectName
     * Meta informations extracted from the WSDL
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
        $this->ObjectName = $objectName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsReferenceItemResponseType
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
