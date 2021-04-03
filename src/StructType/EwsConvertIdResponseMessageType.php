<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsAlternateIdBaseType|null
     */
    protected ?\StructType\EwsAlternateIdBaseType $AlternateId = null;
    /**
     * Constructor method for ConvertIdResponseMessageType
     * @uses EwsConvertIdResponseMessageType::setAlternateId()
     * @param \StructType\EwsAlternateIdBaseType $alternateId
     */
    public function __construct(?\StructType\EwsAlternateIdBaseType $alternateId = null)
    {
        $this
            ->setAlternateId($alternateId);
    }
    /**
     * Get AlternateId value
     * @return \StructType\EwsAlternateIdBaseType|null
     */
    public function getAlternateId(): ?\StructType\EwsAlternateIdBaseType
    {
        return $this->AlternateId;
    }
    /**
     * Set AlternateId value
     * @param \StructType\EwsAlternateIdBaseType $alternateId
     * @return \StructType\EwsConvertIdResponseMessageType
     */
    public function setAlternateId(?\StructType\EwsAlternateIdBaseType $alternateId = null): self
    {
        $this->AlternateId = $alternateId;
        
        return $this;
    }
}
