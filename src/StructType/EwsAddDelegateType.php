<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDelegateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
     * Meta informations extracted from the WSDL
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
     * @param string $deliverMeetingRequests
     * @return \Ews\StructType\EwsAddDelegateType
     */
    public function setDeliverMeetingRequests($deliverMeetingRequests = null)
    {
        if (!\Ews\EnumType\EwsDeliverMeetingRequestsType::valueIsValid($deliverMeetingRequests)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliverMeetingRequests, implode(', ', \Ews\EnumType\EwsDeliverMeetingRequestsType::getValidValues())), __LINE__);
        }
        $this->DeliverMeetingRequests = $deliverMeetingRequests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAddDelegateType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
