<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUMPinType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsValidateUMPinType extends EwsBaseRequestType
{
    /**
     * The UserUMMailboxPolicyGuid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $UserUMMailboxPolicyGuid;
    /**
     * The PinInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPinInfoType
     */
    public $PinInfo;
    /**
     * Constructor method for ValidateUMPinType
     * @uses EwsValidateUMPinType::setUserUMMailboxPolicyGuid()
     * @uses EwsValidateUMPinType::setPinInfo()
     * @param string $userUMMailboxPolicyGuid
     * @param \Ews\StructType\EwsPinInfoType $pinInfo
     */
    public function __construct($userUMMailboxPolicyGuid = null, \Ews\StructType\EwsPinInfoType $pinInfo = null)
    {
        $this
            ->setUserUMMailboxPolicyGuid($userUMMailboxPolicyGuid)
            ->setPinInfo($pinInfo);
    }
    /**
     * Get UserUMMailboxPolicyGuid value
     * @return string
     */
    public function getUserUMMailboxPolicyGuid()
    {
        return $this->UserUMMailboxPolicyGuid;
    }
    /**
     * Set UserUMMailboxPolicyGuid value
     * @param string $userUMMailboxPolicyGuid
     * @return \Ews\StructType\EwsValidateUMPinType
     */
    public function setUserUMMailboxPolicyGuid($userUMMailboxPolicyGuid = null)
    {
        // validation for constraint: pattern
        if (!is_null($userUMMailboxPolicyGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $userUMMailboxPolicyGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($userUMMailboxPolicyGuid)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($userUMMailboxPolicyGuid) && !is_string($userUMMailboxPolicyGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userUMMailboxPolicyGuid)), __LINE__);
        }
        $this->UserUMMailboxPolicyGuid = $userUMMailboxPolicyGuid;
        return $this;
    }
    /**
     * Get PinInfo value
     * @return \Ews\StructType\EwsPinInfoType|null
     */
    public function getPinInfo()
    {
        return $this->PinInfo;
    }
    /**
     * Set PinInfo value
     * @param \Ews\StructType\EwsPinInfoType $pinInfo
     * @return \Ews\StructType\EwsValidateUMPinType
     */
    public function setPinInfo(\Ews\StructType\EwsPinInfoType $pinInfo = null)
    {
        $this->PinInfo = $pinInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsValidateUMPinType
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
