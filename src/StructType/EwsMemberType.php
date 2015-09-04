<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MemberType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMemberType extends AbstractStructBase
{
    /**
     * The Mailbox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Mailbox;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Key;
    /**
     * Constructor method for MemberType
     * @uses EwsMemberType::setMailbox()
     * @uses EwsMemberType::setStatus()
     * @uses EwsMemberType::setKey()
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     * @param string $status
     * @param string $key
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $mailbox = null, $status = null, $key = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setStatus($status)
            ->setKey($key);
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
     * @return \Ews\StructType\EwsMemberType
     */
    public function setMailbox(\Ews\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Ews\EnumType\EwsMemberStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsMemberStatusType::getValidValues()
     * @param string $status
     * @return \Ews\StructType\EwsMemberType
     */
    public function setStatus($status = null)
    {
        if (!\Ews\EnumType\EwsMemberStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Ews\EnumType\EwsMemberStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Ews\StructType\EwsMemberType
     */
    public function setKey($key = null)
    {
        $this->Key = $key;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMemberType
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
