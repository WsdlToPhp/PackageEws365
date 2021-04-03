<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteFolderType extends EwsBaseRequestType
{
    /**
     * The DeleteType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $DeleteType;
    /**
     * The FolderIds
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $FolderIds = null;
    /**
     * Constructor method for DeleteFolderType
     * @uses EwsDeleteFolderType::setDeleteType()
     * @uses EwsDeleteFolderType::setFolderIds()
     * @param string $deleteType
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    public function __construct(string $deleteType, ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this
            ->setDeleteType($deleteType)
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
     * @return \StructType\EwsDeleteFolderType
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
     * @return \StructType\EwsDeleteFolderType
     */
    public function setFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null): self
    {
        $this->FolderIds = $folderIds;
        
        return $this;
    }
}
