<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertIdResponseMessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response Message for a single id conversion in the ConvertId web method. Note that the AlternateId element will be missing in the case of an error.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConvertIdResponseMessageType extends EwsResponseMessageType
{
    /**
     * The AlternateId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Surfaces alternate representations of an item or folder id. No change key is included.
     * @var \Ews\StructType\EwsAlternateIdBaseType
     */
    public $AlternateId;
    /**
     * Constructor method for ConvertIdResponseMessageType
     * @uses EwsConvertIdResponseMessageType::setAlternateId()
     * @param \Ews\StructType\EwsAlternateIdBaseType $alternateId
     */
    public function __construct(\Ews\StructType\EwsAlternateIdBaseType $alternateId = null)
    {
        $this
            ->setAlternateId($alternateId);
    }
    /**
     * Get AlternateId value
     * @return \Ews\StructType\EwsAlternateIdBaseType|null
     */
    public function getAlternateId()
    {
        return $this->AlternateId;
    }
    /**
     * Set AlternateId value
     * @param \Ews\StructType\EwsAlternateIdBaseType $alternateId
     * @return \Ews\StructType\EwsConvertIdResponseMessageType
     */
    public function setAlternateId(\Ews\StructType\EwsAlternateIdBaseType $alternateId = null)
    {
        $this->AlternateId = $alternateId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsConvertIdResponseMessageType
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
