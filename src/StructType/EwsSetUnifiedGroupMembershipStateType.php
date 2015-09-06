<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupMembershipStateType StructType
 * Meta informations extracted from the WSDL
 * - ref: t:Action
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
     * @param string $action
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateType
     */
    public function setAction($action = null)
    {
        if (!\Ews\EnumType\EwsUnifiedGroupMembershipActionType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \Ews\EnumType\EwsUnifiedGroupMembershipActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateType
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
