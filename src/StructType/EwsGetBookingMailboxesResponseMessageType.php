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
     * Meta information extracted from the WSDL
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
}
