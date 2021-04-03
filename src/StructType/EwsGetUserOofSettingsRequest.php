<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserOofSettingsRequest StructType
 * Meta information extracted from the WSDL
 * - type: tns:GetUserOofSettingsRequest
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserOofSettingsRequest extends EwsBaseRequestType
{
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: t:Mailbox
     * @var \StructType\EwsEmailAddress
     */
    protected \StructType\EwsEmailAddress $Mailbox;
    /**
     * Constructor method for GetUserOofSettingsRequest
     * @uses EwsGetUserOofSettingsRequest::setMailbox()
     * @param \StructType\EwsEmailAddress $mailbox
     */
    public function __construct(\StructType\EwsEmailAddress $mailbox)
    {
        $this
            ->setMailbox($mailbox);
    }
    /**
     * Get Mailbox value
     * @return \StructType\EwsEmailAddress
     */
    public function getMailbox(): \StructType\EwsEmailAddress
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \StructType\EwsEmailAddress $mailbox
     * @return \StructType\EwsGetUserOofSettingsRequest
     */
    public function setMailbox(\StructType\EwsEmailAddress $mailbox): self
    {
        $this->Mailbox = $mailbox;
        
        return $this;
    }
}
