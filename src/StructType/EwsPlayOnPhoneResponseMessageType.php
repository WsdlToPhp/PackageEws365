<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlayOnPhoneResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPlayOnPhoneResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PhoneCallId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsPhoneCallIdType|null
     */
    protected ?\StructType\EwsPhoneCallIdType $PhoneCallId = null;
    /**
     * Constructor method for PlayOnPhoneResponseMessageType
     * @uses EwsPlayOnPhoneResponseMessageType::setPhoneCallId()
     * @param \StructType\EwsPhoneCallIdType $phoneCallId
     */
    public function __construct(?\StructType\EwsPhoneCallIdType $phoneCallId = null)
    {
        $this
            ->setPhoneCallId($phoneCallId);
    }
    /**
     * Get PhoneCallId value
     * @return \StructType\EwsPhoneCallIdType|null
     */
    public function getPhoneCallId(): ?\StructType\EwsPhoneCallIdType
    {
        return $this->PhoneCallId;
    }
    /**
     * Set PhoneCallId value
     * @param \StructType\EwsPhoneCallIdType $phoneCallId
     * @return \StructType\EwsPlayOnPhoneResponseMessageType
     */
    public function setPhoneCallId(?\StructType\EwsPhoneCallIdType $phoneCallId = null): self
    {
        $this->PhoneCallId = $phoneCallId;
        
        return $this;
    }
}
