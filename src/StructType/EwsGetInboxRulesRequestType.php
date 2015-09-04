<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInboxRulesRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetInboxRulesRequestType extends EwsBaseRequestType
{
    /**
     * The MailboxSmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MailboxSmtpAddress;
    /**
     * Constructor method for GetInboxRulesRequestType
     * @uses EwsGetInboxRulesRequestType::setMailboxSmtpAddress()
     * @param string $mailboxSmtpAddress
     */
    public function __construct($mailboxSmtpAddress = null)
    {
        $this
            ->setMailboxSmtpAddress($mailboxSmtpAddress);
    }
    /**
     * Get MailboxSmtpAddress value
     * @return string|null
     */
    public function getMailboxSmtpAddress()
    {
        return $this->MailboxSmtpAddress;
    }
    /**
     * Set MailboxSmtpAddress value
     * @param string $mailboxSmtpAddress
     * @return \Ews\StructType\EwsGetInboxRulesRequestType
     */
    public function setMailboxSmtpAddress($mailboxSmtpAddress = null)
    {
        $this->MailboxSmtpAddress = $mailboxSmtpAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetInboxRulesRequestType
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
