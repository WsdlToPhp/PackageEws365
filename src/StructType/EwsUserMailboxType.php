<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserMailboxType StructType
 * Meta information extracted from the WSDL
 * - documentation: User Mailbox.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserMailboxType extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Id;
    /**
     * The IsArchive
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $IsArchive;
    /**
     * Constructor method for UserMailboxType
     * @uses EwsUserMailboxType::setId()
     * @uses EwsUserMailboxType::setIsArchive()
     * @param string $id
     * @param bool $isArchive
     */
    public function __construct(string $id, bool $isArchive)
    {
        $this
            ->setId($id)
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
     * @return \StructType\EwsUserMailboxType
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
     * Get IsArchive value
     * @return bool
     */
    public function getIsArchive(): bool
    {
        return $this->IsArchive;
    }
    /**
     * Set IsArchive value
     * @param bool $isArchive
     * @return \StructType\EwsUserMailboxType
     */
    public function setIsArchive(bool $isArchive): self
    {
        // validation for constraint: boolean
        if (!is_null($isArchive) && !is_bool($isArchive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isArchive, true), gettype($isArchive)), __LINE__);
        }
        $this->IsArchive = $isArchive;
        
        return $this;
    }
}
