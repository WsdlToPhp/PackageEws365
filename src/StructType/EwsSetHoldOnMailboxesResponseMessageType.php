<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetHoldOnMailboxesResponseMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response message type for the SetHoldOnMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetHoldOnMailboxesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MailboxHoldResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsMailboxHoldResultType|null
     */
    protected ?\StructType\EwsMailboxHoldResultType $MailboxHoldResult = null;
    /**
     * Constructor method for SetHoldOnMailboxesResponseMessageType
     * @uses EwsSetHoldOnMailboxesResponseMessageType::setMailboxHoldResult()
     * @param \StructType\EwsMailboxHoldResultType $mailboxHoldResult
     */
    public function __construct(?\StructType\EwsMailboxHoldResultType $mailboxHoldResult = null)
    {
        $this
            ->setMailboxHoldResult($mailboxHoldResult);
    }
    /**
     * Get MailboxHoldResult value
     * @return \StructType\EwsMailboxHoldResultType|null
     */
    public function getMailboxHoldResult(): ?\StructType\EwsMailboxHoldResultType
    {
        return $this->MailboxHoldResult;
    }
    /**
     * Set MailboxHoldResult value
     * @param \StructType\EwsMailboxHoldResultType $mailboxHoldResult
     * @return \StructType\EwsSetHoldOnMailboxesResponseMessageType
     */
    public function setMailboxHoldResult(?\StructType\EwsMailboxHoldResultType $mailboxHoldResult = null): self
    {
        $this->MailboxHoldResult = $mailboxHoldResult;
        
        return $this;
    }
}
