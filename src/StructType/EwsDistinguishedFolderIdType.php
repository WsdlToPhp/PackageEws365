<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistinguishedFolderIdType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifier for a distinguished folder
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDistinguishedFolderIdType extends EwsBaseFolderIdType
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Id;
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Mailbox = null;
    /**
     * The ChangeKey
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ChangeKey = null;
    /**
     * Constructor method for DistinguishedFolderIdType
     * @uses EwsDistinguishedFolderIdType::setId()
     * @uses EwsDistinguishedFolderIdType::setMailbox()
     * @uses EwsDistinguishedFolderIdType::setChangeKey()
     * @param string $id
     * @param \StructType\EwsEmailAddressType $mailbox
     * @param string $changeKey
     */
    public function __construct(string $id, ?\StructType\EwsEmailAddressType $mailbox = null, ?string $changeKey = null)
    {
        $this
            ->setId($id)
            ->setMailbox($mailbox)
            ->setChangeKey($changeKey);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @uses \EnumType\EwsDistinguishedFolderIdNameType::valueIsValid()
     * @uses \EnumType\EwsDistinguishedFolderIdNameType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $id
     * @return \StructType\EwsDistinguishedFolderIdType
     */
    public function setId(string $id): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDistinguishedFolderIdNameType::valueIsValid($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDistinguishedFolderIdNameType', is_array($id) ? implode(', ', $id) : var_export($id, true), implode(', ', \EnumType\EwsDistinguishedFolderIdNameType::getValidValues())), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
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
     * @return \StructType\EwsDistinguishedFolderIdType
     */
    public function setMailbox(?\StructType\EwsEmailAddressType $mailbox = null): self
    {
        $this->Mailbox = $mailbox;
        
        return $this;
    }
    /**
     * Get ChangeKey value
     * @return string|null
     */
    public function getChangeKey(): ?string
    {
        return $this->ChangeKey;
    }
    /**
     * Set ChangeKey value
     * @param string $changeKey
     * @return \StructType\EwsDistinguishedFolderIdType
     */
    public function setChangeKey(?string $changeKey = null): self
    {
        // validation for constraint: string
        if (!is_null($changeKey) && !is_string($changeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeKey, true), gettype($changeKey)), __LINE__);
        }
        $this->ChangeKey = $changeKey;
        
        return $this;
    }
}
