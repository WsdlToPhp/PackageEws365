<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserOofSettingsRequest StructType
 * Meta informations extracted from the WSDL
 * - maxOccurs: 1
 * - minOccurs: 1
 * - ref: t:Mailbox
 * - type: tns:GetUserOofSettingsRequest
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetUserOofSettingsRequest extends EwsBaseRequestType
{
    /**
     * The Mailbox
     * @var \Ews\StructType\EwsEmailAddress
     */
    public $Mailbox;
    /**
     * Constructor method for GetUserOofSettingsRequest
     * @uses EwsGetUserOofSettingsRequest::setMailbox()
     * @param \Ews\StructType\EwsEmailAddress $mailbox
     */
    public function __construct(\Ews\StructType\EwsEmailAddress $mailbox = null)
    {
        $this
            ->setMailbox($mailbox);
    }
    /**
     * Get Mailbox value
     * @return \Ews\StructType\EwsEmailAddress|null
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \Ews\StructType\EwsEmailAddress $mailbox
     * @return \Ews\StructType\EwsGetUserOofSettingsRequest
     */
    public function setMailbox(\Ews\StructType\EwsEmailAddress $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUserOofSettingsRequest
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
