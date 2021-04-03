<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkAllItemsAsReadType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMarkAllItemsAsReadType extends EwsBaseRequestType
{
    /**
     * The ReadFlag
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $ReadFlag;
    /**
     * The SuppressReadReceipts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $SuppressReadReceipts;
    /**
     * The FolderIds
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $FolderIds = null;
    /**
     * Constructor method for MarkAllItemsAsReadType
     * @uses EwsMarkAllItemsAsReadType::setReadFlag()
     * @uses EwsMarkAllItemsAsReadType::setSuppressReadReceipts()
     * @uses EwsMarkAllItemsAsReadType::setFolderIds()
     * @param bool $readFlag
     * @param bool $suppressReadReceipts
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    public function __construct(bool $readFlag, bool $suppressReadReceipts, ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this
            ->setReadFlag($readFlag)
            ->setSuppressReadReceipts($suppressReadReceipts)
            ->setFolderIds($folderIds);
    }
    /**
     * Get ReadFlag value
     * @return bool
     */
    public function getReadFlag(): bool
    {
        return $this->ReadFlag;
    }
    /**
     * Set ReadFlag value
     * @param bool $readFlag
     * @return \StructType\EwsMarkAllItemsAsReadType
     */
    public function setReadFlag(bool $readFlag): self
    {
        // validation for constraint: boolean
        if (!is_null($readFlag) && !is_bool($readFlag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($readFlag, true), gettype($readFlag)), __LINE__);
        }
        $this->ReadFlag = $readFlag;
        
        return $this;
    }
    /**
     * Get SuppressReadReceipts value
     * @return bool
     */
    public function getSuppressReadReceipts(): bool
    {
        return $this->SuppressReadReceipts;
    }
    /**
     * Set SuppressReadReceipts value
     * @param bool $suppressReadReceipts
     * @return \StructType\EwsMarkAllItemsAsReadType
     */
    public function setSuppressReadReceipts(bool $suppressReadReceipts): self
    {
        // validation for constraint: boolean
        if (!is_null($suppressReadReceipts) && !is_bool($suppressReadReceipts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressReadReceipts, true), gettype($suppressReadReceipts)), __LINE__);
        }
        $this->SuppressReadReceipts = $suppressReadReceipts;
        
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
     * @return \StructType\EwsMarkAllItemsAsReadType
     */
    public function setFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null): self
    {
        $this->FolderIds = $folderIds;
        
        return $this;
    }
}
