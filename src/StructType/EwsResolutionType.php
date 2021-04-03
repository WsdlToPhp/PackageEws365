<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResolutionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResolutionType extends AbstractStructBase
{
    /**
     * The Mailbox
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Mailbox = null;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsContactItemType|null
     */
    protected ?\StructType\EwsContactItemType $Contact = null;
    /**
     * Constructor method for ResolutionType
     * @uses EwsResolutionType::setMailbox()
     * @uses EwsResolutionType::setContact()
     * @param \StructType\EwsEmailAddressType $mailbox
     * @param \StructType\EwsContactItemType $contact
     */
    public function __construct(?\StructType\EwsEmailAddressType $mailbox = null, ?\StructType\EwsContactItemType $contact = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setContact($contact);
    }
    /**
     * Get Mailbox value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getMailbox(): ?\StructType\EwsEmailAddressType
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \StructType\EwsEmailAddressType $mailbox
     * @return \StructType\EwsResolutionType
     */
    public function setMailbox(?\StructType\EwsEmailAddressType $mailbox = null): self
    {
        $this->Mailbox = $mailbox;
        
        return $this;
    }
    /**
     * Get Contact value
     * @return \StructType\EwsContactItemType|null
     */
    public function getContact(): ?\StructType\EwsContactItemType
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \StructType\EwsContactItemType $contact
     * @return \StructType\EwsResolutionType
     */
    public function setContact(?\StructType\EwsContactItemType $contact = null): self
    {
        $this->Contact = $contact;
        
        return $this;
    }
}
