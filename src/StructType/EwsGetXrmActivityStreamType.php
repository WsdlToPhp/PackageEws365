<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetXrmActivityStreamType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetXrmActivityStreamType extends EwsBaseRequestType
{
    /**
     * The EntityId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $EntityId;
    /**
     * Constructor method for GetXrmActivityStreamType
     * @uses EwsGetXrmActivityStreamType::setEntityId()
     * @param \Ews\StructType\EwsItemIdType $entityId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $entityId = null)
    {
        $this
            ->setEntityId($entityId);
    }
    /**
     * Get EntityId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getEntityId()
    {
        return $this->EntityId;
    }
    /**
     * Set EntityId value
     * @param \Ews\StructType\EwsItemIdType $entityId
     * @return \Ews\StructType\EwsGetXrmActivityStreamType
     */
    public function setEntityId(\Ews\StructType\EwsItemIdType $entityId = null)
    {
        $this->EntityId = $entityId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetXrmActivityStreamType
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
