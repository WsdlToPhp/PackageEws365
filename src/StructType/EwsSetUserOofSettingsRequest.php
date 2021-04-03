<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserOofSettingsRequest StructType
 * Meta information extracted from the WSDL
 * - type: tns:SetUserOofSettingsRequest
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUserOofSettingsRequest extends EwsBaseRequestType
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
     * The UserOofSettings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: t:UserOofSettings
     * @var \StructType\EwsUserOofSettings
     */
    protected \StructType\EwsUserOofSettings $UserOofSettings;
    /**
     * Constructor method for SetUserOofSettingsRequest
     * @uses EwsSetUserOofSettingsRequest::setMailbox()
     * @uses EwsSetUserOofSettingsRequest::setUserOofSettings()
     * @param \StructType\EwsEmailAddress $mailbox
     * @param \StructType\EwsUserOofSettings $userOofSettings
     */
    public function __construct(\StructType\EwsEmailAddress $mailbox, \StructType\EwsUserOofSettings $userOofSettings)
    {
        $this
            ->setMailbox($mailbox)
            ->setUserOofSettings($userOofSettings);
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
     * @return \StructType\EwsSetUserOofSettingsRequest
     */
    public function setMailbox(\StructType\EwsEmailAddress $mailbox): self
    {
        $this->Mailbox = $mailbox;
        
        return $this;
    }
    /**
     * Get UserOofSettings value
     * @return \StructType\EwsUserOofSettings
     */
    public function getUserOofSettings(): \StructType\EwsUserOofSettings
    {
        return $this->UserOofSettings;
    }
    /**
     * Set UserOofSettings value
     * @param \StructType\EwsUserOofSettings $userOofSettings
     * @return \StructType\EwsSetUserOofSettingsRequest
     */
    public function setUserOofSettings(\StructType\EwsUserOofSettings $userOofSettings): self
    {
        $this->UserOofSettings = $userOofSettings;
        
        return $this;
    }
}
