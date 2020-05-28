<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertIdResponseMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response Message for a single id conversion in the ConvertId web method. Note that the AlternateId element will be missing in the case of an error.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConvertIdResponseMessageType extends EwsResponseMessageType
{
    /**
     * The AlternateId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
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
}
