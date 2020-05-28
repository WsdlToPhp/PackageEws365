<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateDelegateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateDelegateType extends EwsBaseDelegateType
{
    /**
     * The DelegateUsers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
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
     * Constructor method for UpdateDelegateType
     * @uses EwsUpdateDelegateType::setDelegateUsers()
     * @uses EwsUpdateDelegateType::setDeliverMeetingRequests()
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
     * @return \Ews\StructType\EwsUpdateDelegateType
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
     * @return \Ews\StructType\EwsUpdateDelegateType
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
