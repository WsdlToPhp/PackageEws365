<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Mailbox = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * Constructor method for MemberType
     * @uses EwsMemberType::setMailbox()
     * @uses EwsMemberType::setStatus()
     * @uses EwsMemberType::setKey()
     * @param \StructType\EwsEmailAddressType $mailbox
     * @param string $status
     * @param string $key
     */
    public function __construct(?\StructType\EwsEmailAddressType $mailbox = null, ?string $status = null, ?string $key = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setStatus($status)
            ->setKey($key);
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
     * @return \StructType\EwsMemberType
     */
    public function setMailbox(?\StructType\EwsEmailAddressType $mailbox = null): self
    {
        $this->Mailbox = $mailbox;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\EwsMemberStatusType::valueIsValid()
     * @uses \EnumType\EwsMemberStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \StructType\EwsMemberType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMemberStatusType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMemberStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\EwsMemberStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \StructType\EwsMemberType
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
}
