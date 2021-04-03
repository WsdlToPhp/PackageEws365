<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsUserIdType
     */
    protected \StructType\EwsUserIdType $UserId;
    /**
     * The DelegatePermissions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsDelegatePermissionsType|null
     */
    protected ?\StructType\EwsDelegatePermissionsType $DelegatePermissions = null;
    /**
     * The ReceiveCopiesOfMeetingMessages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReceiveCopiesOfMeetingMessages = null;
    /**
     * The ViewPrivateItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ViewPrivateItems = null;
    /**
     * Constructor method for DelegateUserType
     * @uses EwsDelegateUserType::setUserId()
     * @uses EwsDelegateUserType::setDelegatePermissions()
     * @uses EwsDelegateUserType::setReceiveCopiesOfMeetingMessages()
     * @uses EwsDelegateUserType::setViewPrivateItems()
     * @param \StructType\EwsUserIdType $userId
     * @param \StructType\EwsDelegatePermissionsType $delegatePermissions
     * @param bool $receiveCopiesOfMeetingMessages
     * @param bool $viewPrivateItems
     */
    public function __construct(\StructType\EwsUserIdType $userId, ?\StructType\EwsDelegatePermissionsType $delegatePermissions = null, ?bool $receiveCopiesOfMeetingMessages = null, ?bool $viewPrivateItems = null)
    {
        $this
            ->setUserId($userId)
            ->setDelegatePermissions($delegatePermissions)
            ->setReceiveCopiesOfMeetingMessages($receiveCopiesOfMeetingMessages)
            ->setViewPrivateItems($viewPrivateItems);
    }
    /**
     * Get UserId value
     * @return \StructType\EwsUserIdType
     */
    public function getUserId(): \StructType\EwsUserIdType
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param \StructType\EwsUserIdType $userId
     * @return \StructType\EwsDelegateUserType
     */
    public function setUserId(\StructType\EwsUserIdType $userId): self
    {
        $this->UserId = $userId;
        
        return $this;
    }
    /**
     * Get DelegatePermissions value
     * @return \StructType\EwsDelegatePermissionsType|null
     */
    public function getDelegatePermissions(): ?\StructType\EwsDelegatePermissionsType
    {
        return $this->DelegatePermissions;
    }
    /**
     * Set DelegatePermissions value
     * @param \StructType\EwsDelegatePermissionsType $delegatePermissions
     * @return \StructType\EwsDelegateUserType
     */
    public function setDelegatePermissions(?\StructType\EwsDelegatePermissionsType $delegatePermissions = null): self
    {
        $this->DelegatePermissions = $delegatePermissions;
        
        return $this;
    }
    /**
     * Get ReceiveCopiesOfMeetingMessages value
     * @return bool|null
     */
    public function getReceiveCopiesOfMeetingMessages(): ?bool
    {
        return $this->ReceiveCopiesOfMeetingMessages;
    }
    /**
     * Set ReceiveCopiesOfMeetingMessages value
     * @param bool $receiveCopiesOfMeetingMessages
     * @return \StructType\EwsDelegateUserType
     */
    public function setReceiveCopiesOfMeetingMessages(?bool $receiveCopiesOfMeetingMessages = null): self
    {
        // validation for constraint: boolean
        if (!is_null($receiveCopiesOfMeetingMessages) && !is_bool($receiveCopiesOfMeetingMessages)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($receiveCopiesOfMeetingMessages, true), gettype($receiveCopiesOfMeetingMessages)), __LINE__);
        }
        $this->ReceiveCopiesOfMeetingMessages = $receiveCopiesOfMeetingMessages;
        
        return $this;
    }
    /**
     * Get ViewPrivateItems value
     * @return bool|null
     */
    public function getViewPrivateItems(): ?bool
    {
        return $this->ViewPrivateItems;
    }
    /**
     * Set ViewPrivateItems value
     * @param bool $viewPrivateItems
     * @return \StructType\EwsDelegateUserType
     */
    public function setViewPrivateItems(?bool $viewPrivateItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($viewPrivateItems) && !is_bool($viewPrivateItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($viewPrivateItems, true), gettype($viewPrivateItems)), __LINE__);
        }
        $this->ViewPrivateItems = $viewPrivateItems;
        
        return $this;
    }
}
