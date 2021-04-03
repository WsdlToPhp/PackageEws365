<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsEmailAddressType
     */
    protected \StructType\EwsEmailAddressType $SendingAs;
    /**
     * The Recipients
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfRecipientsType
     */
    protected \ArrayType\EwsArrayOfRecipientsType $Recipients;
    /**
     * The MailTipsRequested
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $MailTipsRequested;
    /**
     * Constructor method for GetMailTipsType
     * @uses EwsGetMailTipsType::setSendingAs()
     * @uses EwsGetMailTipsType::setRecipients()
     * @uses EwsGetMailTipsType::setMailTipsRequested()
     * @param \StructType\EwsEmailAddressType $sendingAs
     * @param \ArrayType\EwsArrayOfRecipientsType $recipients
     * @param array|string $mailTipsRequested
     */
    public function __construct(\StructType\EwsEmailAddressType $sendingAs, \ArrayType\EwsArrayOfRecipientsType $recipients, $mailTipsRequested)
    {
        $this
            ->setSendingAs($sendingAs)
            ->setRecipients($recipients)
            ->setMailTipsRequested($mailTipsRequested);
    }
    /**
     * Get SendingAs value
     * @return \StructType\EwsEmailAddressType
     */
    public function getSendingAs(): \StructType\EwsEmailAddressType
    {
        return $this->SendingAs;
    }
    /**
     * Set SendingAs value
     * @param \StructType\EwsEmailAddressType $sendingAs
     * @return \StructType\EwsGetMailTipsType
     */
    public function setSendingAs(\StructType\EwsEmailAddressType $sendingAs): self
    {
        $this->SendingAs = $sendingAs;
        
        return $this;
    }
    /**
     * Get Recipients value
     * @return \ArrayType\EwsArrayOfRecipientsType
     */
    public function getRecipients(): \ArrayType\EwsArrayOfRecipientsType
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \ArrayType\EwsArrayOfRecipientsType $recipients
     * @return \StructType\EwsGetMailTipsType
     */
    public function setRecipients(\ArrayType\EwsArrayOfRecipientsType $recipients): self
    {
        $this->Recipients = $recipients;
        
        return $this;
    }
    /**
     * Get MailTipsRequested value
     * @return string
     */
    public function getMailTipsRequested(): string
    {
        return $this->MailTipsRequested;
    }
    /**
     * This method is responsible for validating the values passed to the setMailTipsRequested method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailTipsRequested method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailTipsRequestedForArrayConstraintsFromSetMailTipsRequested(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMailTipsTypeMailTipsRequestedItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsMailTipTypes::valueIsValid($getMailTipsTypeMailTipsRequestedItem)) {
                $invalidValues[] = is_object($getMailTipsTypeMailTipsRequestedItem) ? get_class($getMailTipsTypeMailTipsRequestedItem) : sprintf('%s(%s)', gettype($getMailTipsTypeMailTipsRequestedItem), var_export($getMailTipsTypeMailTipsRequestedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMailTipTypes', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsMailTipTypes::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MailTipsRequested value
     * @uses \EnumType\EwsMailTipTypes::valueIsValid()
     * @uses \EnumType\EwsMailTipTypes::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $mailTipsRequested
     * @return \StructType\EwsGetMailTipsType
     */
    public function setMailTipsRequested($mailTipsRequested): self
    {
        // validation for constraint: list
        if ('' !== ($mailTipsRequestedArrayErrorMessage = self::validateMailTipsRequestedForArrayConstraintsFromSetMailTipsRequested(is_string($mailTipsRequested) ? explode(' ', $mailTipsRequested) : $mailTipsRequested))) {
            throw new InvalidArgumentException($mailTipsRequestedArrayErrorMessage, __LINE__);
        }
        $this->MailTipsRequested = is_array($mailTipsRequested) ? implode(' ', $mailTipsRequested) : $mailTipsRequested;
        
        return $this;
    }
}
