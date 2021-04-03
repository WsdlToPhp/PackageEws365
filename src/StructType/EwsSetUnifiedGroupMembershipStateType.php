<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupMembershipStateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupMembershipStateType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The Members
     * @var \ArrayType\EwsGroupMembersArray|null
     */
    protected ?\ArrayType\EwsGroupMembersArray $Members = null;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - ref: t:Action
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * Constructor method for SetUnifiedGroupMembershipStateType
     * @uses EwsSetUnifiedGroupMembershipStateType::setMembers()
     * @uses EwsSetUnifiedGroupMembershipStateType::setAction()
     * @param \ArrayType\EwsGroupMembersArray $members
     * @param string $action
     */
    public function __construct(?\ArrayType\EwsGroupMembersArray $members = null, ?string $action = null)
    {
        $this
            ->setMembers($members)
            ->setAction($action);
    }
    /**
     * Get Members value
     * @return \ArrayType\EwsGroupMembersArray|null
     */
    public function getMembers(): ?\ArrayType\EwsGroupMembersArray
    {
        return $this->Members;
    }
    /**
     * Set Members value
     * @param \ArrayType\EwsGroupMembersArray $members
     * @return \StructType\EwsSetUnifiedGroupMembershipStateType
     */
    public function setMembers(?\ArrayType\EwsGroupMembersArray $members = null): self
    {
        $this->Members = $members;
        
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \EnumType\EwsUnifiedGroupMembershipActionType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupMembershipActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \StructType\EwsSetUnifiedGroupMembershipStateType
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupMembershipActionType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupMembershipActionType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \EnumType\EwsUnifiedGroupMembershipActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
}
