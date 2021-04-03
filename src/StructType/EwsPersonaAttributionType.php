<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonaAttributionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPersonaAttributionType extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Id;
    /**
     * The SourceId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $SourceId;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DisplayName;
    /**
     * The IsWritable
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsWritable = null;
    /**
     * The IsQuickContact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsQuickContact = null;
    /**
     * The IsHidden
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsHidden = null;
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $FolderId = null;
    /**
     * Constructor method for PersonaAttributionType
     * @uses EwsPersonaAttributionType::setId()
     * @uses EwsPersonaAttributionType::setSourceId()
     * @uses EwsPersonaAttributionType::setDisplayName()
     * @uses EwsPersonaAttributionType::setIsWritable()
     * @uses EwsPersonaAttributionType::setIsQuickContact()
     * @uses EwsPersonaAttributionType::setIsHidden()
     * @uses EwsPersonaAttributionType::setFolderId()
     * @param string $id
     * @param \StructType\EwsItemIdType $sourceId
     * @param string $displayName
     * @param bool $isWritable
     * @param bool $isQuickContact
     * @param bool $isHidden
     * @param \StructType\EwsFolderIdType $folderId
     */
    public function __construct(string $id, \StructType\EwsItemIdType $sourceId, string $displayName, ?bool $isWritable = null, ?bool $isQuickContact = null, ?bool $isHidden = null, ?\StructType\EwsFolderIdType $folderId = null)
    {
        $this
            ->setId($id)
            ->setSourceId($sourceId)
            ->setDisplayName($displayName)
            ->setIsWritable($isWritable)
            ->setIsQuickContact($isQuickContact)
            ->setIsHidden($isHidden)
            ->setFolderId($folderId);
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
     * @return \StructType\EwsPersonaAttributionType
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
     * Get SourceId value
     * @return \StructType\EwsItemIdType
     */
    public function getSourceId(): \StructType\EwsItemIdType
    {
        return $this->SourceId;
    }
    /**
     * Set SourceId value
     * @param \StructType\EwsItemIdType $sourceId
     * @return \StructType\EwsPersonaAttributionType
     */
    public function setSourceId(\StructType\EwsItemIdType $sourceId): self
    {
        $this->SourceId = $sourceId;
        
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsPersonaAttributionType
     */
    public function setDisplayName(string $displayName): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get IsWritable value
     * @return bool|null
     */
    public function getIsWritable(): ?bool
    {
        return $this->IsWritable;
    }
    /**
     * Set IsWritable value
     * @param bool $isWritable
     * @return \StructType\EwsPersonaAttributionType
     */
    public function setIsWritable(?bool $isWritable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isWritable) && !is_bool($isWritable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isWritable, true), gettype($isWritable)), __LINE__);
        }
        $this->IsWritable = $isWritable;
        
        return $this;
    }
    /**
     * Get IsQuickContact value
     * @return bool|null
     */
    public function getIsQuickContact(): ?bool
    {
        return $this->IsQuickContact;
    }
    /**
     * Set IsQuickContact value
     * @param bool $isQuickContact
     * @return \StructType\EwsPersonaAttributionType
     */
    public function setIsQuickContact(?bool $isQuickContact = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isQuickContact) && !is_bool($isQuickContact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isQuickContact, true), gettype($isQuickContact)), __LINE__);
        }
        $this->IsQuickContact = $isQuickContact;
        
        return $this;
    }
    /**
     * Get IsHidden value
     * @return bool|null
     */
    public function getIsHidden(): ?bool
    {
        return $this->IsHidden;
    }
    /**
     * Set IsHidden value
     * @param bool $isHidden
     * @return \StructType\EwsPersonaAttributionType
     */
    public function setIsHidden(?bool $isHidden = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isHidden) && !is_bool($isHidden)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHidden, true), gettype($isHidden)), __LINE__);
        }
        $this->IsHidden = $isHidden;
        
        return $this;
    }
    /**
     * Get FolderId value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getFolderId(): ?\StructType\EwsFolderIdType
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \StructType\EwsFolderIdType $folderId
     * @return \StructType\EwsPersonaAttributionType
     */
    public function setFolderId(?\StructType\EwsFolderIdType $folderId = null): self
    {
        $this->FolderId = $folderId;
        
        return $this;
    }
}
