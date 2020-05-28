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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $SendingAs;
    /**
     * The Recipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $Recipients;
    /**
     * The MailTipsRequested
     * Meta information extracted from the WSDL
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
    public function __construct(\Ews\StructType\EwsEmailAddressType $sendingAs = null, \Ews\ArrayType\EwsArrayOfRecipientsType $recipients = null, array $mailTipsRequested = array())
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
     * This method is responsible for validating the values passed to the setMailTipsRequested method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailTipsRequested method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailTipsRequestedForArrayConstraintsFromSetMailTipsRequested(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMailTipsTypeMailTipsRequestedItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsMailTipTypes::valueIsValid($getMailTipsTypeMailTipsRequestedItem)) {
                $invalidValues[] = is_object($getMailTipsTypeMailTipsRequestedItem) ? get_class($getMailTipsTypeMailTipsRequestedItem) : sprintf('%s(%s)', gettype($getMailTipsTypeMailTipsRequestedItem), var_export($getMailTipsTypeMailTipsRequestedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMailTipTypes', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsMailTipTypes::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MailTipsRequested value
     * @uses \Ews\EnumType\EwsMailTipTypes::valueIsValid()
     * @uses \Ews\EnumType\EwsMailTipTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $mailTipsRequested
     * @return \Ews\StructType\EwsGetMailTipsType
     */
    public function setMailTipsRequested(array $mailTipsRequested = array())
    {
        // validation for constraint: list
        if ('' !== ($mailTipsRequestedArrayErrorMessage = self::validateMailTipsRequestedForArrayConstraintsFromSetMailTipsRequested($mailTipsRequested))) {
            throw new \InvalidArgumentException($mailTipsRequestedArrayErrorMessage, __LINE__);
        }
        $this->MailTipsRequested = is_array($mailTipsRequested) ? implode(' ', $mailTipsRequested) : null;
        return $this;
    }
}
