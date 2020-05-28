<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpandDLType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExpandDLType extends EwsBaseRequestType
{
    /**
     * The Mailbox
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Mailbox;
    /**
     * Constructor method for ExpandDLType
     * @uses EwsExpandDLType::setMailbox()
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this
            ->setMailbox($mailbox);
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
     * @return \Ews\StructType\EwsExpandDLType
     */
    public function setMailbox(\Ews\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
}
