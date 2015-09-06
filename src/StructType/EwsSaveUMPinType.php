<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUMPinType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSaveUMPinType extends EwsBaseRequestType
{
    /**
     * The PinInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsPinInfoType
     */
    public $PinInfo;
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
     * Constructor method for SaveUMPinType
     * @uses EwsSaveUMPinType::setPinInfo()
     * @uses EwsSaveUMPinType::setUserUMMailboxPolicyGuid()
     * @param \Ews\StructType\EwsPinInfoType $pinInfo
     * @param string $userUMMailboxPolicyGuid
     */
    public function __construct(\Ews\StructType\EwsPinInfoType $pinInfo = null, $userUMMailboxPolicyGuid = null)
    {
        $this
            ->setPinInfo($pinInfo)
            ->setUserUMMailboxPolicyGuid($userUMMailboxPolicyGuid);
    }
    /**
     * Get PinInfo value
     * @return \Ews\StructType\EwsPinInfoType
     */
    public function getPinInfo()
    {
        return $this->PinInfo;
    }
    /**
     * Set PinInfo value
     * @param \Ews\StructType\EwsPinInfoType $pinInfo
     * @return \Ews\StructType\EwsSaveUMPinType
     */
    public function setPinInfo(\Ews\StructType\EwsPinInfoType $pinInfo = null)
    {
        $this->PinInfo = $pinInfo;
        return $this;
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
     * @return \Ews\StructType\EwsSaveUMPinType
     */
    public function setUserUMMailboxPolicyGuid($userUMMailboxPolicyGuid = null)
    {
        $this->UserUMMailboxPolicyGuid = $userUMMailboxPolicyGuid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSaveUMPinType
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
