<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPasswordExpirationDateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPasswordExpirationDateType extends EwsBaseRequestType
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
     * Constructor method for GetPasswordExpirationDateType
     * @uses EwsGetPasswordExpirationDateType::setMailboxSmtpAddress()
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
     * @return \Ews\StructType\EwsGetPasswordExpirationDateType
     */
    public function setMailboxSmtpAddress($mailboxSmtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($mailboxSmtpAddress) && !is_string($mailboxSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailboxSmtpAddress)), __LINE__);
        }
        $this->MailboxSmtpAddress = $mailboxSmtpAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetPasswordExpirationDateType
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
