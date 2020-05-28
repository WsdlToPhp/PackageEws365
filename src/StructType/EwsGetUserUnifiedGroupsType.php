<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserUnifiedGroupsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserUnifiedGroupsType extends EwsBaseRequestType
{
    /**
     * The RequestedGroupsSets
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType
     */
    public $RequestedGroupsSets;
    /**
     * The UserSmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserSmtpAddress;
    /**
     * Constructor method for GetUserUnifiedGroupsType
     * @uses EwsGetUserUnifiedGroupsType::setRequestedGroupsSets()
     * @uses EwsGetUserUnifiedGroupsType::setUserSmtpAddress()
     * @param \Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType $requestedGroupsSets
     * @param string $userSmtpAddress
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType $requestedGroupsSets = null, $userSmtpAddress = null)
    {
        $this
            ->setRequestedGroupsSets($requestedGroupsSets)
            ->setUserSmtpAddress($userSmtpAddress);
    }
    /**
     * Get RequestedGroupsSets value
     * @return \Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType|null
     */
    public function getRequestedGroupsSets()
    {
        return $this->RequestedGroupsSets;
    }
    /**
     * Set RequestedGroupsSets value
     * @param \Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType $requestedGroupsSets
     * @return \Ews\StructType\EwsGetUserUnifiedGroupsType
     */
    public function setRequestedGroupsSets(\Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType $requestedGroupsSets = null)
    {
        $this->RequestedGroupsSets = $requestedGroupsSets;
        return $this;
    }
    /**
     * Get UserSmtpAddress value
     * @return string|null
     */
    public function getUserSmtpAddress()
    {
        return $this->UserSmtpAddress;
    }
    /**
     * Set UserSmtpAddress value
     * @param string $userSmtpAddress
     * @return \Ews\StructType\EwsGetUserUnifiedGroupsType
     */
    public function setUserSmtpAddress($userSmtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($userSmtpAddress) && !is_string($userSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userSmtpAddress, true), gettype($userSmtpAddress)), __LINE__);
        }
        $this->UserSmtpAddress = $userSmtpAddress;
        return $this;
    }
}
