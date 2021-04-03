<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhoneCallInformationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPhoneCallInformationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PhoneCallInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsPhoneCallInformationType|null
     */
    protected ?\StructType\EwsPhoneCallInformationType $PhoneCallInformation = null;
    /**
     * Constructor method for GetPhoneCallInformationResponseMessageType
     * @uses EwsGetPhoneCallInformationResponseMessageType::setPhoneCallInformation()
     * @param \StructType\EwsPhoneCallInformationType $phoneCallInformation
     */
    public function __construct(?\StructType\EwsPhoneCallInformationType $phoneCallInformation = null)
    {
        $this
            ->setPhoneCallInformation($phoneCallInformation);
    }
    /**
     * Get PhoneCallInformation value
     * @return \StructType\EwsPhoneCallInformationType|null
     */
    public function getPhoneCallInformation(): ?\StructType\EwsPhoneCallInformationType
    {
        return $this->PhoneCallInformation;
    }
    /**
     * Set PhoneCallInformation value
     * @param \StructType\EwsPhoneCallInformationType $phoneCallInformation
     * @return \StructType\EwsGetPhoneCallInformationResponseMessageType
     */
    public function setPhoneCallInformation(?\StructType\EwsPhoneCallInformationType $phoneCallInformation = null): self
    {
        $this->PhoneCallInformation = $phoneCallInformation;
        
        return $this;
    }
}
