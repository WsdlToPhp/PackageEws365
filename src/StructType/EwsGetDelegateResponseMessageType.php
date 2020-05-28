<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $DeliverMeetingRequests;
    /**
     * Constructor method for GetDelegateResponseMessageType
     * @uses EwsGetDelegateResponseMessageType::setDeliverMeetingRequests()
     * @param string $deliverMeetingRequests
     */
    public function __construct($deliverMeetingRequests = null)
    {
        $this
            ->setDeliverMeetingRequests($deliverMeetingRequests);
    }
    /**
     * Get DeliverMeetingRequests value
     * @return string|null
     */
    public function getDeliverMeetingRequests()
    {
        return $this->DeliverMeetingRequests;
    }
    /**
     * Set DeliverMeetingRequests value
     * @uses \Ews\EnumType\EwsDeliverMeetingRequestsType::valueIsValid()
     * @uses \Ews\EnumType\EwsDeliverMeetingRequestsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliverMeetingRequests
     * @return \Ews\StructType\EwsGetDelegateResponseMessageType
     */
    public function setDeliverMeetingRequests($deliverMeetingRequests = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDeliverMeetingRequestsType::valueIsValid($deliverMeetingRequests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDeliverMeetingRequestsType', is_array($deliverMeetingRequests) ? implode(', ', $deliverMeetingRequests) : var_export($deliverMeetingRequests, true), implode(', ', \Ews\EnumType\EwsDeliverMeetingRequestsType::getValidValues())), __LINE__);
        }
        $this->DeliverMeetingRequests = $deliverMeetingRequests;
        return $this;
    }
}
