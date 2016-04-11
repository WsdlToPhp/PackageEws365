<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserOofSettingsRequest StructType
 * Meta informations extracted from the WSDL
 * - type: tns:SetUserOofSettingsRequest
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUserOofSettingsRequest extends EwsBaseRequestType
{
    /**
     * The Mailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: t:Mailbox
     * @var \Ews\StructType\EwsEmailAddress
     */
    public $Mailbox;
    /**
     * The UserOofSettings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: t:UserOofSettings
     * @var \Ews\StructType\EwsUserOofSettings
     */
    public $UserOofSettings;
    /**
     * Constructor method for SetUserOofSettingsRequest
     * @uses EwsSetUserOofSettingsRequest::setMailbox()
     * @uses EwsSetUserOofSettingsRequest::setUserOofSettings()
     * @param \Ews\StructType\EwsEmailAddress $mailbox
     * @param \Ews\StructType\EwsUserOofSettings $userOofSettings
     */
    public function __construct(\Ews\StructType\EwsEmailAddress $mailbox = null, \Ews\StructType\EwsUserOofSettings $userOofSettings = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setUserOofSettings($userOofSettings);
    }
    /**
     * Get Mailbox value
     * @return \Ews\StructType\EwsEmailAddress
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \Ews\StructType\EwsEmailAddress $mailbox
     * @return \Ews\StructType\EwsSetUserOofSettingsRequest
     */
    public function setMailbox(\Ews\StructType\EwsEmailAddress $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Get UserOofSettings value
     * @return \Ews\StructType\EwsUserOofSettings
     */
    public function getUserOofSettings()
    {
        return $this->UserOofSettings;
    }
    /**
     * Set UserOofSettings value
     * @param \Ews\StructType\EwsUserOofSettings $userOofSettings
     * @return \Ews\StructType\EwsSetUserOofSettingsRequest
     */
    public function setUserOofSettings(\Ews\StructType\EwsUserOofSettings $userOofSettings = null)
    {
        $this->UserOofSettings = $userOofSettings;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetUserOofSettingsRequest
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
