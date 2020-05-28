<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MemberType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMemberType extends AbstractStructBase
{
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Mailbox;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Key
     * Meta information extracted from the WSDL
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
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Ews\StructType\EwsMemberType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMemberStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMemberStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Ews\EnumType\EwsMemberStatusType::getValidValues())), __LINE__);
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
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
}
