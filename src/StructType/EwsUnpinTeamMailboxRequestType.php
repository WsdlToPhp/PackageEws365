<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnpinTeamMailboxRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnpinTeamMailboxRequestType extends EwsBaseRequestType
{
    /**
     * The EmailAddress
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $EmailAddress = null;
    /**
     * Constructor method for UnpinTeamMailboxRequestType
     * @uses EwsUnpinTeamMailboxRequestType::setEmailAddress()
     * @param \StructType\EwsEmailAddressType $emailAddress
     */
    public function __construct(?\StructType\EwsEmailAddressType $emailAddress = null)
    {
        $this
            ->setEmailAddress($emailAddress);
    }
    /**
     * Get EmailAddress value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getEmailAddress(): ?\StructType\EwsEmailAddressType
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param \StructType\EwsEmailAddressType $emailAddress
     * @return \StructType\EwsUnpinTeamMailboxRequestType
     */
    public function setEmailAddress(?\StructType\EwsEmailAddressType $emailAddress = null): self
    {
        $this->EmailAddress = $emailAddress;
        
        return $this;
    }
}
