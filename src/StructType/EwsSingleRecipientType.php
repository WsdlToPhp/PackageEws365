<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleRecipientType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSingleRecipientType extends AbstractStructBase
{
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - choice: Mailbox
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Mailbox = null;
    /**
     * Constructor method for SingleRecipientType
     * @uses EwsSingleRecipientType::setMailbox()
     * @param \StructType\EwsEmailAddressType $mailbox
     */
    public function __construct(?\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this
            ->setMailbox($mailbox);
    }
    /**
     * Get Mailbox value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getMailbox(): ?\StructType\EwsEmailAddressType
    {
        return isset($this->Mailbox) ? $this->Mailbox : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailbox method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMailboxForChoiceConstraintsFromSetMailbox($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Mailbox can\'t be set as the property %s is already set. Only one property must be set among these properties: Mailbox, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Mailbox value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressType $mailbox
     * @return \StructType\EwsSingleRecipientType
     */
    public function setMailbox(?\StructType\EwsEmailAddressType $mailbox = null): self
    {
        // validation for constraint: choice(Mailbox)
        if ('' !== ($mailboxChoiceErrorMessage = self::validateMailboxForChoiceConstraintsFromSetMailbox($mailbox))) {
            throw new InvalidArgumentException($mailboxChoiceErrorMessage, __LINE__);
        }
        if (is_null($mailbox) || (is_array($mailbox) && empty($mailbox))) {
            unset($this->Mailbox);
        } else {
            $this->Mailbox = $mailbox;
        }
        
        return $this;
    }
}
