<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkAsJunkResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMarkAsJunkResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MovedItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $MovedItemId;
    /**
     * Constructor method for MarkAsJunkResponseMessageType
     * @uses EwsMarkAsJunkResponseMessageType::setMovedItemId()
     * @param \Ews\StructType\EwsItemIdType $movedItemId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $movedItemId = null)
    {
        $this
            ->setMovedItemId($movedItemId);
    }
    /**
     * Get MovedItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getMovedItemId()
    {
        return $this->MovedItemId;
    }
    /**
     * Set MovedItemId value
     * @param \Ews\StructType\EwsItemIdType $movedItemId
     * @return \Ews\StructType\EwsMarkAsJunkResponseMessageType
     */
    public function setMovedItemId(\Ews\StructType\EwsItemIdType $movedItemId = null)
    {
        $this->MovedItemId = $movedItemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMarkAsJunkResponseMessageType
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
