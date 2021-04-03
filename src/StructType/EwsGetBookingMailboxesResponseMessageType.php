<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfBookingMailbox
     */
    protected \ArrayType\EwsArrayOfBookingMailbox $Mailboxes;
    /**
     * Constructor method for GetBookingMailboxesResponseMessageType
     * @uses EwsGetBookingMailboxesResponseMessageType::setMailboxes()
     * @param \ArrayType\EwsArrayOfBookingMailbox $mailboxes
     */
    public function __construct(\ArrayType\EwsArrayOfBookingMailbox $mailboxes)
    {
        $this
            ->setMailboxes($mailboxes);
    }
    /**
     * Get Mailboxes value
     * @return \ArrayType\EwsArrayOfBookingMailbox
     */
    public function getMailboxes(): \ArrayType\EwsArrayOfBookingMailbox
    {
        return $this->Mailboxes;
    }
    /**
     * Set Mailboxes value
     * @param \ArrayType\EwsArrayOfBookingMailbox $mailboxes
     * @return \StructType\EwsGetBookingMailboxesResponseMessageType
     */
    public function setMailboxes(\ArrayType\EwsArrayOfBookingMailbox $mailboxes): self
    {
        $this->Mailboxes = $mailboxes;
        
        return $this;
    }
}
