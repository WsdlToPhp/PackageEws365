<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMailTipsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetMailTipsType extends EwsBaseRequestType
{
    /**
     * The SendingAs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $SendingAs;
    /**
     * The Recipients
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $Recipients;
    /**
     * The MailTipsRequested
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $MailTipsRequested;
    /**
     * Constructor method for GetMailTipsType
     * @uses EwsGetMailTipsType::setSendingAs()
     * @uses EwsGetMailTipsType::setRecipients()
     * @uses EwsGetMailTipsType::setMailTipsRequested()
     * @param \Ews\StructType\EwsEmailAddressType $sendingAs
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $recipients
     * @param string[] $mailTipsRequested
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $sendingAs = null, \Ews\ArrayType\EwsArrayOfRecipientsType $recipients = null, $mailTipsRequested = null)
    {
        $this
            ->setSendingAs($sendingAs)
            ->setRecipients($recipients)
            ->setMailTipsRequested($mailTipsRequested);
    }
    /**
     * Get SendingAs value
     * @return \Ews\StructType\EwsEmailAddressType
     */
    public function getSendingAs()
    {
        return $this->SendingAs;
    }
    /**
     * Set SendingAs value
     * @param \Ews\StructType\EwsEmailAddressType $sendingAs
     * @return \Ews\StructType\EwsGetMailTipsType
     */
    public function setSendingAs(\Ews\StructType\EwsEmailAddressType $sendingAs = null)
    {
        $this->SendingAs = $sendingAs;
        return $this;
    }
    /**
     * Get Recipients value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $recipients
     * @return \Ews\StructType\EwsGetMailTipsType
     */
    public function setRecipients(\Ews\ArrayType\EwsArrayOfRecipientsType $recipients = null)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    /**
     * Get MailTipsRequested value
     * @return string[]
     */
    public function getMailTipsRequested()
    {
        return $this->MailTipsRequested;
    }
    /**
     * Set MailTipsRequested value
     * @uses \Ews\EnumType\EwsMailTipTypes::valueIsValid()
     * @uses \Ews\EnumType\EwsMailTipTypes::getValidValues()
     * @param string[] $mailTipsRequested
     * @return \Ews\StructType\EwsGetMailTipsType
     */
    public function setMailTipsRequested($mailTipsRequested = null)
    {
        if (!\Ews\EnumType\EwsMailTipTypes::valueIsValid($mailTipsRequested)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mailTipsRequested, implode(', ', \Ews\EnumType\EwsMailTipTypes::getValidValues())), __LINE__);
        }
        $this->MailTipsRequested = $mailTipsRequested;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetMailTipsType
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
