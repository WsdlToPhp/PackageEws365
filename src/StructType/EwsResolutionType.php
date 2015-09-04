<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResolutionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsResolutionType extends AbstractStructBase
{
    /**
     * The Mailbox
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Mailbox;
    /**
     * The Contact
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsResolutionType
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
