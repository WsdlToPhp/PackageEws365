<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhoneCallInformationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPhoneCallInformationType extends EwsBaseRequestType
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
     * Constructor method for GetPhoneCallInformationType
     * @uses EwsGetPhoneCallInformationType::setPhoneCallId()
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
     * @return \StructType\EwsGetPhoneCallInformationType
     */
    public function setPhoneCallId(\StructType\EwsPhoneCallIdType $phoneCallId): self
    {
        $this->PhoneCallId = $phoneCallId;
        
        return $this;
    }
}
