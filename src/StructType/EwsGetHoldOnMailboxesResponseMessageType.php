<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHoldOnMailboxesResponseMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response message type for the GetHoldOnMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetHoldOnMailboxesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MailboxHoldResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMailboxHoldResultType
     */
    public $MailboxHoldResult;
    /**
     * Constructor method for GetHoldOnMailboxesResponseMessageType
     * @uses EwsGetHoldOnMailboxesResponseMessageType::setMailboxHoldResult()
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
     * @return \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType
     */
    public function setMailboxHoldResult(\Ews\StructType\EwsMailboxHoldResultType $mailboxHoldResult = null)
    {
        $this->MailboxHoldResult = $mailboxHoldResult;
        return $this;
    }
}
