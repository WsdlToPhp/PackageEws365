<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingMailboxesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetBookingMailboxesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Mailboxes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfBookingMailbox
     */
    public $Mailboxes;
    /**
     * Constructor method for GetBookingMailboxesResponseMessageType
     * @uses EwsGetBookingMailboxesResponseMessageType::setMailboxes()
     * @param \Ews\ArrayType\EwsArrayOfBookingMailbox $mailboxes
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfBookingMailbox $mailboxes = null)
    {
        $this
            ->setMailboxes($mailboxes);
    }
    /**
     * Get Mailboxes value
     * @return \Ews\ArrayType\EwsArrayOfBookingMailbox
     */
    public function getMailboxes()
    {
        return $this->Mailboxes;
    }
    /**
     * Set Mailboxes value
     * @param \Ews\ArrayType\EwsArrayOfBookingMailbox $mailboxes
     * @return \Ews\StructType\EwsGetBookingMailboxesResponseMessageType
     */
    public function setMailboxes(\Ews\ArrayType\EwsArrayOfBookingMailbox $mailboxes = null)
    {
        $this->Mailboxes = $mailboxes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetBookingMailboxesResponseMessageType
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
