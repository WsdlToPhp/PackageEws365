<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseDelegateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseDelegateType extends EwsBaseRequestType
{
    /**
     * The Mailbox
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Mailbox = null;
    /**
     * Constructor method for BaseDelegateType
     * @uses EwsBaseDelegateType::setMailbox()
     * @param \StructType\EwsEmailAddressType $mailbox
     */
    public function __construct(?\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this
            ->setMailbox($mailbox);
    }
    /**
     * Get Mailbox value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getMailbox(): ?\StructType\EwsEmailAddressType
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \StructType\EwsEmailAddressType $mailbox
     * @return \StructType\EwsBaseDelegateType
     */
    public function setMailbox(?\StructType\EwsEmailAddressType $mailbox = null): self
    {
        $this->Mailbox = $mailbox;
        
        return $this;
    }
}
