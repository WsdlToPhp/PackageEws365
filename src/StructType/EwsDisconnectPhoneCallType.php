<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisconnectPhoneCallType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDisconnectPhoneCallType extends EwsBaseRequestType
{
    /**
     * The PhoneCallId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsPhoneCallIdType
     */
    protected \StructType\EwsPhoneCallIdType $PhoneCallId;
    /**
     * Constructor method for DisconnectPhoneCallType
     * @uses EwsDisconnectPhoneCallType::setPhoneCallId()
     * @param \StructType\EwsPhoneCallIdType $phoneCallId
     */
    public function __construct(\StructType\EwsPhoneCallIdType $phoneCallId)
    {
        $this
            ->setPhoneCallId($phoneCallId);
    }
    /**
     * Get PhoneCallId value
     * @return \StructType\EwsPhoneCallIdType
     */
    public function getPhoneCallId(): \StructType\EwsPhoneCallIdType
    {
        return $this->PhoneCallId;
    }
    /**
     * Set PhoneCallId value
     * @param \StructType\EwsPhoneCallIdType $phoneCallId
     * @return \StructType\EwsDisconnectPhoneCallType
     */
    public function setPhoneCallId(\StructType\EwsPhoneCallIdType $phoneCallId): self
    {
        $this->PhoneCallId = $phoneCallId;
        
        return $this;
    }
}
