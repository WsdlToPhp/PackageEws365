<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserMembershipChangedChannelSubscriptionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserMembershipChangedChannelSubscriptionType extends EwsChannelSubscriptionBaseType
{
    /**
     * The UserSmtpAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserSmtpAddress;
    /**
     * Constructor method for UserMembershipChangedChannelSubscriptionType
     * @uses EwsUserMembershipChangedChannelSubscriptionType::setUserSmtpAddress()
     * @param string $userSmtpAddress
     */
    public function __construct($userSmtpAddress = null)
    {
        $this
            ->setUserSmtpAddress($userSmtpAddress);
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
     * @return \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType
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
