<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsEmailAddress
     */
    public $Mailbox;
    /**
     * Constructor method for GetUserOofSettingsRequest
     * @uses EwsGetUserOofSettingsRequest::setMailbox()
     * @param \Ews\StructType\EwsEmailAddress $mailbox
     */
    public function __construct(\Ews\StructType\EwsEmailAddress $mailbox = null)
    {
        $this
            ->setMailbox($mailbox);
    }
    /**
     * Get Mailbox value
     * @return \Ews\StructType\EwsEmailAddress
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \Ews\StructType\EwsEmailAddress $mailbox
     * @return \Ews\StructType\EwsGetUserOofSettingsRequest
     */
    public function setMailbox(\Ews\StructType\EwsEmailAddress $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
}
