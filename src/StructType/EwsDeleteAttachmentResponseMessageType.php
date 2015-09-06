<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAttachmentResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteAttachmentResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RootItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRootItemIdType
     */
    public $RootItemId;
    /**
     * Constructor method for DeleteAttachmentResponseMessageType
     * @uses EwsDeleteAttachmentResponseMessageType::setRootItemId()
     * @param \Ews\StructType\EwsRootItemIdType $rootItemId
     */
    public function __construct(\Ews\StructType\EwsRootItemIdType $rootItemId = null)
    {
        $this
            ->setRootItemId($rootItemId);
    }
    /**
     * Get RootItemId value
     * @return \Ews\StructType\EwsRootItemIdType|null
     */
    public function getRootItemId()
    {
        return $this->RootItemId;
    }
    /**
     * Set RootItemId value
     * @param \Ews\StructType\EwsRootItemIdType $rootItemId
     * @return \Ews\StructType\EwsDeleteAttachmentResponseMessageType
     */
    public function setRootItemId(\Ews\StructType\EwsRootItemIdType $rootItemId = null)
    {
        $this->RootItemId = $rootItemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeleteAttachmentResponseMessageType
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
