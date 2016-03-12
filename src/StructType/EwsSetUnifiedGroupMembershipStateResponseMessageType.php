<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupMembershipStateResponseMessageType
 * StructType
 * Meta informations extracted from the WSDL
 * - ref: t:GroupActionResultType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupMembershipStateResponseMessageType extends EwsResponseMessageType
{
    /**
     * The GroupActionResultType
     * @var string
     */
    public $GroupActionResultType;
    /**
     * The InvalidMembers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers
     */
    public $InvalidMembers;
    /**
     * The FailedMembers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers
     */
    public $FailedMembers;
    /**
     * Constructor method for SetUnifiedGroupMembershipStateResponseMessageType
     * @uses
     * EwsSetUnifiedGroupMembershipStateResponseMessageType::setGroupActionResultType()
     * @uses EwsSetUnifiedGroupMembershipStateResponseMessageType::setInvalidMembers()
     * @uses EwsSetUnifiedGroupMembershipStateResponseMessageType::setFailedMembers()
     * @param string $groupActionResultType
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers
     */
    public function __construct($groupActionResultType = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers = null)
    {
        $this
            ->setGroupActionResultType($groupActionResultType)
            ->setInvalidMembers($invalidMembers)
            ->setFailedMembers($failedMembers);
    }
    /**
     * Get GroupActionResultType value
     * @return string|null
     */
    public function getGroupActionResultType()
    {
        return $this->GroupActionResultType;
    }
    /**
     * Set GroupActionResultType value
     * @uses \Ews\EnumType\EwsUnifiedGroupActionResultType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupActionResultType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $groupActionResultType
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateResponseMessageType
     */
    public function setGroupActionResultType($groupActionResultType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupActionResultType::valueIsValid($groupActionResultType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $groupActionResultType, implode(', ', \Ews\EnumType\EwsUnifiedGroupActionResultType::getValidValues())), __LINE__);
        }
        $this->GroupActionResultType = $groupActionResultType;
        return $this;
    }
    /**
     * Get InvalidMembers value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers|null
     */
    public function getInvalidMembers()
    {
        return $this->InvalidMembers;
    }
    /**
     * Set InvalidMembers value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateResponseMessageType
     */
    public function setInvalidMembers(\Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $invalidMembers = null)
    {
        $this->InvalidMembers = $invalidMembers;
        return $this;
    }
    /**
     * Get FailedMembers value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers|null
     */
    public function getFailedMembers()
    {
        return $this->FailedMembers;
    }
    /**
     * Set FailedMembers value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateResponseMessageType
     */
    public function setFailedMembers(\Ews\ArrayType\EwsArrayOfUnifiedGroupMembers $failedMembers = null)
    {
        $this->FailedMembers = $failedMembers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetUnifiedGroupMembershipStateResponseMessageType
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
