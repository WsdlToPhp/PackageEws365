<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmptyFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmptyFolderType extends EwsBaseRequestType
{
    /**
     * The DeleteType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $DeleteType;
    /**
     * The DeleteSubFolders
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $DeleteSubFolders;
    /**
     * The FolderIds
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $FolderIds = null;
    /**
     * Constructor method for EmptyFolderType
     * @uses EwsEmptyFolderType::setDeleteType()
     * @uses EwsEmptyFolderType::setDeleteSubFolders()
     * @uses EwsEmptyFolderType::setFolderIds()
     * @param string $deleteType
     * @param bool $deleteSubFolders
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    public function __construct(string $deleteType, bool $deleteSubFolders, ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this
            ->setDeleteType($deleteType)
            ->setDeleteSubFolders($deleteSubFolders)
            ->setFolderIds($folderIds);
    }
    /**
     * Get DeleteType value
     * @return string
     */
    public function getDeleteType(): string
    {
        return $this->DeleteType;
    }
    /**
     * Set DeleteType value
     * @uses \EnumType\EwsDisposalType::valueIsValid()
     * @uses \EnumType\EwsDisposalType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $deleteType
     * @return \StructType\EwsEmptyFolderType
     */
    public function setDeleteType(string $deleteType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDisposalType::valueIsValid($deleteType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDisposalType', is_array($deleteType) ? implode(', ', $deleteType) : var_export($deleteType, true), implode(', ', \EnumType\EwsDisposalType::getValidValues())), __LINE__);
        }
        $this->DeleteType = $deleteType;
        
        return $this;
    }
    /**
     * Get DeleteSubFolders value
     * @return bool
     */
    public function getDeleteSubFolders(): bool
    {
        return $this->DeleteSubFolders;
    }
    /**
     * Set DeleteSubFolders value
     * @param bool $deleteSubFolders
     * @return \StructType\EwsEmptyFolderType
     */
    public function setDeleteSubFolders(bool $deleteSubFolders): self
    {
        // validation for constraint: boolean
        if (!is_null($deleteSubFolders) && !is_bool($deleteSubFolders)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleteSubFolders, true), gettype($deleteSubFolders)), __LINE__);
        }
        $this->DeleteSubFolders = $deleteSubFolders;
        
        return $this;
    }
    /**
     * Get FolderIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getFolderIds(): ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
    {
        return $this->FolderIds;
    }
    /**
     * Set FolderIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     * @return \StructType\EwsEmptyFolderType
     */
    public function setFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null): self
    {
        $this->FolderIds = $folderIds;
        
        return $this;
    }
}
