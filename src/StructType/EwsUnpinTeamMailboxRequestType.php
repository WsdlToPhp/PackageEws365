<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $EmailAddress;
    /**
     * Constructor method for UnpinTeamMailboxRequestType
     * @uses EwsUnpinTeamMailboxRequestType::setEmailAddress()
     * @param \Ews\StructType\EwsEmailAddressType $emailAddress
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $emailAddress = null)
    {
        $this
            ->setEmailAddress($emailAddress);
    }
    /**
     * Get EmailAddress value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param \Ews\StructType\EwsEmailAddressType $emailAddress
     * @return \Ews\StructType\EwsUnpinTeamMailboxRequestType
     */
    public function setEmailAddress(\Ews\StructType\EwsEmailAddressType $emailAddress = null)
    {
        $this->EmailAddress = $emailAddress;
        return $this;
    }
}
