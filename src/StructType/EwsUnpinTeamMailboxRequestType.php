<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnpinTeamMailboxRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUnpinTeamMailboxRequestType extends EwsBaseRequestType
{
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved email address
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnpinTeamMailboxRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
