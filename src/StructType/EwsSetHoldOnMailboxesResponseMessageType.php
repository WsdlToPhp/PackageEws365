<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsMailboxHoldResultType
     */
    public $MailboxHoldResult;
    /**
     * Constructor method for SetHoldOnMailboxesResponseMessageType
     * @uses EwsSetHoldOnMailboxesResponseMessageType::setMailboxHoldResult()
     * @param \Ews\StructType\EwsMailboxHoldResultType $mailboxHoldResult
     */
    public function __construct(\Ews\StructType\EwsMailboxHoldResultType $mailboxHoldResult = null)
    {
        $this
            ->setMailboxHoldResult($mailboxHoldResult);
    }
    /**
     * Get MailboxHoldResult value
     * @return \Ews\StructType\EwsMailboxHoldResultType|null
     */
    public function getMailboxHoldResult()
    {
        return $this->MailboxHoldResult;
    }
    /**
     * Set MailboxHoldResult value
     * @param \Ews\StructType\EwsMailboxHoldResultType $mailboxHoldResult
     * @return \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType
     */
    public function setMailboxHoldResult(\Ews\StructType\EwsMailboxHoldResultType $mailboxHoldResult = null)
    {
        $this->MailboxHoldResult = $mailboxHoldResult;
        return $this;
    }
}
