<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfDelegateUserType|null
     */
    protected ?\ArrayType\EwsArrayOfDelegateUserType $DelegateUsers = null;
    /**
     * The DeliverMeetingRequests
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliverMeetingRequests = null;
    /**
     * Constructor method for AddDelegateType
     * @uses EwsAddDelegateType::setDelegateUsers()
     * @uses EwsAddDelegateType::setDeliverMeetingRequests()
     * @param \ArrayType\EwsArrayOfDelegateUserType $delegateUsers
     * @param string $deliverMeetingRequests
     */
    public function __construct(?\ArrayType\EwsArrayOfDelegateUserType $delegateUsers = null, ?string $deliverMeetingRequests = null)
    {
        $this
            ->setDelegateUsers($delegateUsers)
            ->setDeliverMeetingRequests($deliverMeetingRequests);
    }
    /**
     * Get DelegateUsers value
     * @return \ArrayType\EwsArrayOfDelegateUserType|null
     */
    public function getDelegateUsers(): ?\ArrayType\EwsArrayOfDelegateUserType
    {
        return $this->DelegateUsers;
    }
    /**
     * Set DelegateUsers value
     * @param \ArrayType\EwsArrayOfDelegateUserType $delegateUsers
     * @return \StructType\EwsAddDelegateType
     */
    public function setDelegateUsers(?\ArrayType\EwsArrayOfDelegateUserType $delegateUsers = null): self
    {
        $this->DelegateUsers = $delegateUsers;
        
        return $this;
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
     * @return \StructType\EwsAddDelegateType
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
