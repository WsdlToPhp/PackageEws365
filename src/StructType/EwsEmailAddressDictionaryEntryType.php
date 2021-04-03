<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddressDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailAddressDictionaryEntryType extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The RoutingType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $RoutingType = null;
    /**
     * The MailboxType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $MailboxType = null;
    /**
     * Constructor method for EmailAddressDictionaryEntryType
     * @uses EwsEmailAddressDictionaryEntryType::setKey()
     * @uses EwsEmailAddressDictionaryEntryType::set_()
     * @uses EwsEmailAddressDictionaryEntryType::setName()
     * @uses EwsEmailAddressDictionaryEntryType::setRoutingType()
     * @uses EwsEmailAddressDictionaryEntryType::setMailboxType()
     * @param string $key
     * @param string $_
     * @param string $name
     * @param string $routingType
     * @param string $mailboxType
     */
    public function __construct(string $key, ?string $_ = null, ?string $name = null, ?string $routingType = null, ?string $mailboxType = null)
    {
        $this
            ->setKey($key)
            ->set_($_)
            ->setName($name)
            ->setRoutingType($routingType)
            ->setMailboxType($mailboxType);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @uses \EnumType\EwsEmailAddressKeyType::valueIsValid()
     * @uses \EnumType\EwsEmailAddressKeyType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $key
     * @return \StructType\EwsEmailAddressDictionaryEntryType
     */
    public function setKey(string $key): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsEmailAddressKeyType::valueIsValid($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsEmailAddressKeyType', is_array($key) ? implode(', ', $key) : var_export($key, true), implode(', ', \EnumType\EwsEmailAddressKeyType::getValidValues())), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\EwsEmailAddressDictionaryEntryType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsEmailAddressDictionaryEntryType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get RoutingType value
     * @return string|null
     */
    public function getRoutingType(): ?string
    {
        return $this->RoutingType;
    }
    /**
     * Set RoutingType value
     * @param string $routingType
     * @return \StructType\EwsEmailAddressDictionaryEntryType
     */
    public function setRoutingType(?string $routingType = null): self
    {
        // validation for constraint: string
        if (!is_null($routingType) && !is_string($routingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingType, true), gettype($routingType)), __LINE__);
        }
        $this->RoutingType = $routingType;
        
        return $this;
    }
    /**
     * Get MailboxType value
     * @return string|null
     */
    public function getMailboxType(): ?string
    {
        return $this->MailboxType;
    }
    /**
     * Set MailboxType value
     * @uses \EnumType\EwsMailboxTypeType::valueIsValid()
     * @uses \EnumType\EwsMailboxTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mailboxType
     * @return \StructType\EwsEmailAddressDictionaryEntryType
     */
    public function setMailboxType(?string $mailboxType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMailboxTypeType::valueIsValid($mailboxType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMailboxTypeType', is_array($mailboxType) ? implode(', ', $mailboxType) : var_export($mailboxType, true), implode(', ', \EnumType\EwsMailboxTypeType::getValidValues())), __LINE__);
        }
        $this->MailboxType = $mailboxType;
        
        return $this;
    }
}
