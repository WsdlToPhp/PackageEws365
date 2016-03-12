<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetTeamMailboxRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetTeamMailboxRequestType extends EwsBaseRequestType
{
    /**
     * The EmailAddress
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $EmailAddress;
    /**
     * The SharePointSiteUrl
     * @var string
     */
    public $SharePointSiteUrl;
    /**
     * The State
     * @var string
     */
    public $State;
    /**
     * Constructor method for SetTeamMailboxRequestType
     * @uses EwsSetTeamMailboxRequestType::setEmailAddress()
     * @uses EwsSetTeamMailboxRequestType::setSharePointSiteUrl()
     * @uses EwsSetTeamMailboxRequestType::setState()
     * @param \Ews\StructType\EwsEmailAddressType $emailAddress
     * @param string $sharePointSiteUrl
     * @param string $state
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $emailAddress = null, $sharePointSiteUrl = null, $state = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setSharePointSiteUrl($sharePointSiteUrl)
            ->setState($state);
    }
    /**
     * Get EmailAddress value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param \Ews\StructType\EwsEmailAddressType $emailAddress
     * @return \Ews\StructType\EwsSetTeamMailboxRequestType
     */
    public function setEmailAddress(\Ews\StructType\EwsEmailAddressType $emailAddress = null)
    {
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get SharePointSiteUrl value
     * @return string|null
     */
    public function getSharePointSiteUrl()
    {
        return $this->SharePointSiteUrl;
    }
    /**
     * Set SharePointSiteUrl value
     * @param string $sharePointSiteUrl
     * @return \Ews\StructType\EwsSetTeamMailboxRequestType
     */
    public function setSharePointSiteUrl($sharePointSiteUrl = null)
    {
        // validation for constraint: string
        if (!is_null($sharePointSiteUrl) && !is_string($sharePointSiteUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sharePointSiteUrl)), __LINE__);
        }
        $this->SharePointSiteUrl = $sharePointSiteUrl;
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \Ews\EnumType\EwsTeamMailboxLifecycleStateType::valueIsValid()
     * @uses \Ews\EnumType\EwsTeamMailboxLifecycleStateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $state
     * @return \Ews\StructType\EwsSetTeamMailboxRequestType
     */
    public function setState($state = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsTeamMailboxLifecycleStateType::valueIsValid($state)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $state, implode(', ', \Ews\EnumType\EwsTeamMailboxLifecycleStateType::getValidValues())), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetTeamMailboxRequestType
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
