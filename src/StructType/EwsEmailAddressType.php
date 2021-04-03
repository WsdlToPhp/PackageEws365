<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddressType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifier for a fully resolved email address
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailAddressType extends EwsBaseEmailAddressType
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The RoutingType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RoutingType = null;
    /**
     * The MailboxType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MailboxType = null;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The OriginalDisplayName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OriginalDisplayName = null;
    /**
     * Constructor method for EmailAddressType
     * @uses EwsEmailAddressType::setName()
     * @uses EwsEmailAddressType::setEmailAddress()
     * @uses EwsEmailAddressType::setRoutingType()
     * @uses EwsEmailAddressType::setMailboxType()
     * @uses EwsEmailAddressType::setItemId()
     * @uses EwsEmailAddressType::setOriginalDisplayName()
     * @param string $name
     * @param string $emailAddress
     * @param string $routingType
     * @param string $mailboxType
     * @param \StructType\EwsItemIdType $itemId
     * @param string $originalDisplayName
     */
    public function __construct(?string $name = null, ?string $emailAddress = null, ?string $routingType = null, ?string $mailboxType = null, ?\StructType\EwsItemIdType $itemId = null, ?string $originalDisplayName = null)
    {
        $this
            ->setName($name)
            ->setEmailAddress($emailAddress)
            ->setRoutingType($routingType)
            ->setMailboxType($mailboxType)
            ->setItemId($itemId)
            ->setOriginalDisplayName($originalDisplayName);
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
     * @return \StructType\EwsEmailAddressType
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
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \StructType\EwsEmailAddressType
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($emailAddress) && mb_strlen((string) $emailAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        
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
     * @return \StructType\EwsEmailAddressType
     */
    public function setRoutingType(?string $routingType = null): self
    {
        // validation for constraint: string
        if (!is_null($routingType) && !is_string($routingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingType, true), gettype($routingType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($routingType) && mb_strlen((string) $routingType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $routingType)), __LINE__);
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
     * @return \StructType\EwsEmailAddressType
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
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsEmailAddressType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get OriginalDisplayName value
     * @return string|null
     */
    public function getOriginalDisplayName(): ?string
    {
        return $this->OriginalDisplayName;
    }
    /**
     * Set OriginalDisplayName value
     * @param string $originalDisplayName
     * @return \StructType\EwsEmailAddressType
     */
    public function setOriginalDisplayName(?string $originalDisplayName = null): self
    {
        // validation for constraint: string
        if (!is_null($originalDisplayName) && !is_string($originalDisplayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalDisplayName, true), gettype($originalDisplayName)), __LINE__);
        }
        $this->OriginalDisplayName = $originalDisplayName;
        
        return $this;
    }
}
