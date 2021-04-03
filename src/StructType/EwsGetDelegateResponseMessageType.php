<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDelegateResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetDelegateResponseMessageType extends EwsBaseDelegateResponseMessageType
{
    /**
     * The DeliverMeetingRequests
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliverMeetingRequests = null;
    /**
     * Constructor method for GetDelegateResponseMessageType
     * @uses EwsGetDelegateResponseMessageType::setDeliverMeetingRequests()
     * @param string $deliverMeetingRequests
     */
    public function __construct(?string $deliverMeetingRequests = null)
    {
        $this
            ->setDeliverMeetingRequests($deliverMeetingRequests);
    }
    /**
     * Get DeliverMeetingRequests value
     * @return string|null
     */
    public function getDeliverMeetingRequests(): ?string
    {
        return $this->DeliverMeetingRequests;
    }
    /**
     * Set DeliverMeetingRequests value
     * @uses \EnumType\EwsDeliverMeetingRequestsType::valueIsValid()
     * @uses \EnumType\EwsDeliverMeetingRequestsType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $deliverMeetingRequests
     * @return \StructType\EwsGetDelegateResponseMessageType
     */
    public function setDeliverMeetingRequests(?string $deliverMeetingRequests = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDeliverMeetingRequestsType::valueIsValid($deliverMeetingRequests)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDeliverMeetingRequestsType', is_array($deliverMeetingRequests) ? implode(', ', $deliverMeetingRequests) : var_export($deliverMeetingRequests, true), implode(', ', \EnumType\EwsDeliverMeetingRequestsType::getValidValues())), __LINE__);
        }
        $this->DeliverMeetingRequests = $deliverMeetingRequests;
        
        return $this;
    }
}
