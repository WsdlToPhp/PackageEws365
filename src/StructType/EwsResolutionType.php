<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Mailbox;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsContactItemType
     */
    public $Contact;
    /**
     * Constructor method for ResolutionType
     * @uses EwsResolutionType::setMailbox()
     * @uses EwsResolutionType::setContact()
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     * @param \Ews\StructType\EwsContactItemType $contact
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $mailbox = null, \Ews\StructType\EwsContactItemType $contact = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setContact($contact);
    }
    /**
     * Get Mailbox value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     * @return \Ews\StructType\EwsResolutionType
     */
    public function setMailbox(\Ews\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Get Contact value
     * @return \Ews\StructType\EwsContactItemType|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Ews\StructType\EwsContactItemType $contact
     * @return \Ews\StructType\EwsResolutionType
     */
    public function setContact(\Ews\StructType\EwsContactItemType $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
}
