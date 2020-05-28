<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDelegateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddDelegateType extends EwsBaseDelegateType
{
    /**
     * The DelegateUsers
     * @var \Ews\ArrayType\EwsArrayOfDelegateUserType
     */
    public $DelegateUsers;
    /**
     * The DeliverMeetingRequests
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliverMeetingRequests;
    /**
     * Constructor method for AddDelegateType
     * @uses EwsAddDelegateType::setDelegateUsers()
     * @uses EwsAddDelegateType::setDeliverMeetingRequests()
     * @param \Ews\ArrayType\EwsArrayOfDelegateUserType $delegateUsers
     * @param string $deliverMeetingRequests
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfDelegateUserType $delegateUsers = null, $deliverMeetingRequests = null)
    {
        $this
            ->setDelegateUsers($delegateUsers)
            ->setDeliverMeetingRequests($deliverMeetingRequests);
    }
    /**
     * Get DelegateUsers value
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserType|null
     */
    public function getDelegateUsers()
    {
        return $this->DelegateUsers;
    }
    /**
     * Set DelegateUsers value
     * @param \Ews\ArrayType\EwsArrayOfDelegateUserType $delegateUsers
     * @return \Ews\StructType\EwsAddDelegateType
     */
    public function setDelegateUsers(\Ews\ArrayType\EwsArrayOfDelegateUserType $delegateUsers = null)
    {
        $this->DelegateUsers = $delegateUsers;
        return $this;
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
     * @return \Ews\StructType\EwsAddDelegateType
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
