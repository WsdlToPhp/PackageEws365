<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsGroupMembersArray
     */
    public $Members;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - ref: t:Action
     * @var string
     */
    public $Action;
    /**
     * Constructor method for SetUnifiedGroupMembershipStateType
     * @uses EwsSetUnifiedGroupMembershipStateType::setMembers()
     * @uses EwsSetUnifiedGroupMembershipStateType::setAction()
     * @param \Ews\ArrayType\EwsGroupMembersArray $members
     * @param string $action
     */
    public function __construct(\Ews\ArrayType\EwsGroupMembersArray $members = null, $action = null)
    {
        $this
            ->setMembers($members)
            ->setAction($action);
    }
    /**
     * Get Members value
     * @return \Ews\ArrayType\EwsGroupMembersArray|null
     */
    public function getMembers()
    {
        return $this->Members;
    }
    /**
     * Set Members value
     * @param \Ews\ArrayType\EwsGroupMembersArray $members
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateType
     */
    public function setMembers(\Ews\ArrayType\EwsGroupMembersArray $members = null)
    {
        $this->Members = $members;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \Ews\EnumType\EwsUnifiedGroupMembershipActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupMembershipActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupMembershipActionType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUnifiedGroupMembershipActionType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \Ews\EnumType\EwsUnifiedGroupMembershipActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
}
