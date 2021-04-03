<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateIdType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents an alternate mailbox folder or item Id.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAlternateIdType extends EwsAlternateIdBaseType
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
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Mailbox;
    /**
     * The IsArchive
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsArchive = null;
    /**
     * Constructor method for AlternateIdType
     * @uses EwsAlternateIdType::setId()
     * @uses EwsAlternateIdType::setMailbox()
     * @uses EwsAlternateIdType::setIsArchive()
     * @param string $id
     * @param string $mailbox
     * @param bool $isArchive
     */
    public function __construct(string $id, string $mailbox, ?bool $isArchive = null)
    {
        $this
            ->setId($id)
            ->setMailbox($mailbox)
            ->setIsArchive($isArchive);
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
     * @param string $id
     * @return \StructType\EwsAlternateIdType
     */
    public function setId(string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Mailbox value
     * @return string
     */
    public function getMailbox(): string
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param string $mailbox
     * @return \StructType\EwsAlternateIdType
     */
    public function setMailbox(string $mailbox): self
    {
        // validation for constraint: string
        if (!is_null($mailbox) && !is_string($mailbox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailbox, true), gettype($mailbox)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($mailbox) && mb_strlen((string) $mailbox) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $mailbox)), __LINE__);
        }
        $this->Mailbox = $mailbox;
        
        return $this;
    }
    /**
     * Get IsArchive value
     * @return bool|null
     */
    public function getIsArchive(): ?bool
    {
        return $this->IsArchive;
    }
    /**
     * Set IsArchive value
     * @param bool $isArchive
     * @return \StructType\EwsAlternateIdType
     */
    public function setIsArchive(?bool $isArchive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isArchive) && !is_bool($isArchive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isArchive, true), gettype($isArchive)), __LINE__);
        }
        $this->IsArchive = $isArchive;
        
        return $this;
    }
}
