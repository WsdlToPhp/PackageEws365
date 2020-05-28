<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DelegateUserType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDelegateUserType extends AbstractStructBase
{
    /**
     * The UserId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserIdType
     */
    public $UserId;
    /**
     * The DelegatePermissions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsDelegatePermissionsType
     */
    public $DelegatePermissions;
    /**
     * The ReceiveCopiesOfMeetingMessages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ReceiveCopiesOfMeetingMessages;
    /**
     * The ViewPrivateItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ViewPrivateItems;
    /**
     * Constructor method for DelegateUserType
     * @uses EwsDelegateUserType::setUserId()
     * @uses EwsDelegateUserType::setDelegatePermissions()
     * @uses EwsDelegateUserType::setReceiveCopiesOfMeetingMessages()
     * @uses EwsDelegateUserType::setViewPrivateItems()
     * @param \Ews\StructType\EwsUserIdType $userId
     * @param \Ews\StructType\EwsDelegatePermissionsType $delegatePermissions
     * @param bool $receiveCopiesOfMeetingMessages
     * @param bool $viewPrivateItems
     */
    public function __construct(\Ews\StructType\EwsUserIdType $userId = null, \Ews\StructType\EwsDelegatePermissionsType $delegatePermissions = null, $receiveCopiesOfMeetingMessages = null, $viewPrivateItems = null)
    {
        $this
            ->setUserId($userId)
            ->setDelegatePermissions($delegatePermissions)
            ->setReceiveCopiesOfMeetingMessages($receiveCopiesOfMeetingMessages)
            ->setViewPrivateItems($viewPrivateItems);
    }
    /**
     * Get UserId value
     * @return \Ews\StructType\EwsUserIdType
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param \Ews\StructType\EwsUserIdType $userId
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function setUserId(\Ews\StructType\EwsUserIdType $userId = null)
    {
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get DelegatePermissions value
     * @return \Ews\StructType\EwsDelegatePermissionsType|null
     */
    public function getDelegatePermissions()
    {
        return $this->DelegatePermissions;
    }
    /**
     * Set DelegatePermissions value
     * @param \Ews\StructType\EwsDelegatePermissionsType $delegatePermissions
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function setDelegatePermissions(\Ews\StructType\EwsDelegatePermissionsType $delegatePermissions = null)
    {
        $this->DelegatePermissions = $delegatePermissions;
        return $this;
    }
    /**
     * Get ReceiveCopiesOfMeetingMessages value
     * @return bool|null
     */
    public function getReceiveCopiesOfMeetingMessages()
    {
        return $this->ReceiveCopiesOfMeetingMessages;
    }
    /**
     * Set ReceiveCopiesOfMeetingMessages value
     * @param bool $receiveCopiesOfMeetingMessages
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function setReceiveCopiesOfMeetingMessages($receiveCopiesOfMeetingMessages = null)
    {
        // validation for constraint: boolean
        if (!is_null($receiveCopiesOfMeetingMessages) && !is_bool($receiveCopiesOfMeetingMessages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($receiveCopiesOfMeetingMessages, true), gettype($receiveCopiesOfMeetingMessages)), __LINE__);
        }
        $this->ReceiveCopiesOfMeetingMessages = $receiveCopiesOfMeetingMessages;
        return $this;
    }
    /**
     * Get ViewPrivateItems value
     * @return bool|null
     */
    public function getViewPrivateItems()
    {
        return $this->ViewPrivateItems;
    }
    /**
     * Set ViewPrivateItems value
     * @param bool $viewPrivateItems
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function setViewPrivateItems($viewPrivateItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($viewPrivateItems) && !is_bool($viewPrivateItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($viewPrivateItems, true), gettype($viewPrivateItems)), __LINE__);
        }
        $this->ViewPrivateItems = $viewPrivateItems;
        return $this;
    }
}
