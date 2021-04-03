<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManagedFolderInformationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Compound property for Managed Folder related information for Managed Folders.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsManagedFolderInformationType extends AbstractStructBase
{
    /**
     * The CanDelete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CanDelete = null;
    /**
     * The CanRenameOrMove
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CanRenameOrMove = null;
    /**
     * The MustDisplayComment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MustDisplayComment = null;
    /**
     * The HasQuota
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasQuota = null;
    /**
     * The IsManagedFoldersRoot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsManagedFoldersRoot = null;
    /**
     * The ManagedFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ManagedFolderId = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The StorageQuota
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StorageQuota = null;
    /**
     * The FolderSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderSize = null;
    /**
     * The HomePage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HomePage = null;
    /**
     * Constructor method for ManagedFolderInformationType
     * @uses EwsManagedFolderInformationType::setCanDelete()
     * @uses EwsManagedFolderInformationType::setCanRenameOrMove()
     * @uses EwsManagedFolderInformationType::setMustDisplayComment()
     * @uses EwsManagedFolderInformationType::setHasQuota()
     * @uses EwsManagedFolderInformationType::setIsManagedFoldersRoot()
     * @uses EwsManagedFolderInformationType::setManagedFolderId()
     * @uses EwsManagedFolderInformationType::setComment()
     * @uses EwsManagedFolderInformationType::setStorageQuota()
     * @uses EwsManagedFolderInformationType::setFolderSize()
     * @uses EwsManagedFolderInformationType::setHomePage()
     * @param bool $canDelete
     * @param bool $canRenameOrMove
     * @param bool $mustDisplayComment
     * @param bool $hasQuota
     * @param bool $isManagedFoldersRoot
     * @param string $managedFolderId
     * @param string $comment
     * @param int $storageQuota
     * @param int $folderSize
     * @param string $homePage
     */
    public function __construct(?bool $canDelete = null, ?bool $canRenameOrMove = null, ?bool $mustDisplayComment = null, ?bool $hasQuota = null, ?bool $isManagedFoldersRoot = null, ?string $managedFolderId = null, ?string $comment = null, ?int $storageQuota = null, ?int $folderSize = null, ?string $homePage = null)
    {
        $this
            ->setCanDelete($canDelete)
            ->setCanRenameOrMove($canRenameOrMove)
            ->setMustDisplayComment($mustDisplayComment)
            ->setHasQuota($hasQuota)
            ->setIsManagedFoldersRoot($isManagedFoldersRoot)
            ->setManagedFolderId($managedFolderId)
            ->setComment($comment)
            ->setStorageQuota($storageQuota)
            ->setFolderSize($folderSize)
            ->setHomePage($homePage);
    }
    /**
     * Get CanDelete value
     * @return bool|null
     */
    public function getCanDelete(): ?bool
    {
        return $this->CanDelete;
    }
    /**
     * Set CanDelete value
     * @param bool $canDelete
     * @return \StructType\EwsManagedFolderInformationType
     */
    public function setCanDelete(?bool $canDelete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($canDelete) && !is_bool($canDelete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canDelete, true), gettype($canDelete)), __LINE__);
        }
        $this->CanDelete = $canDelete;
        
        return $this;
    }
    /**
     * Get CanRenameOrMove value
     * @return bool|null
     */
    public function getCanRenameOrMove(): ?bool
    {
        return $this->CanRenameOrMove;
    }
    /**
     * Set CanRenameOrMove value
     * @param bool $canRenameOrMove
     * @return \StructType\EwsManagedFolderInformationType
     */
    public function setCanRenameOrMove(?bool $canRenameOrMove = null): self
    {
        // validation for constraint: boolean
        if (!is_null($canRenameOrMove) && !is_bool($canRenameOrMove)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canRenameOrMove, true), gettype($canRenameOrMove)), __LINE__);
        }
        $this->CanRenameOrMove = $canRenameOrMove;
        
        return $this;
    }
    /**
     * Get MustDisplayComment value
     * @return bool|null
     */
    public function getMustDisplayComment(): ?bool
    {
        return $this->MustDisplayComment;
    }
    /**
     * Set MustDisplayComment value
     * @param bool $mustDisplayComment
     * @return \StructType\EwsManagedFolderInformationType
     */
    public function setMustDisplayComment(?bool $mustDisplayComment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mustDisplayComment) && !is_bool($mustDisplayComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mustDisplayComment, true), gettype($mustDisplayComment)), __LINE__);
        }
        $this->MustDisplayComment = $mustDisplayComment;
        
        return $this;
    }
    /**
     * Get HasQuota value
     * @return bool|null
     */
    public function getHasQuota(): ?bool
    {
        return $this->HasQuota;
    }
    /**
     * Set HasQuota value
     * @param bool $hasQuota
     * @return \StructType\EwsManagedFolderInformationType
     */
    public function setHasQuota(?bool $hasQuota = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasQuota) && !is_bool($hasQuota)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasQuota, true), gettype($hasQuota)), __LINE__);
        }
        $this->HasQuota = $hasQuota;
        
        return $this;
    }
    /**
     * Get IsManagedFoldersRoot value
     * @return bool|null
     */
    public function getIsManagedFoldersRoot(): ?bool
    {
        return $this->IsManagedFoldersRoot;
    }
    /**
     * Set IsManagedFoldersRoot value
     * @param bool $isManagedFoldersRoot
     * @return \StructType\EwsManagedFolderInformationType
     */
    public function setIsManagedFoldersRoot(?bool $isManagedFoldersRoot = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManagedFoldersRoot) && !is_bool($isManagedFoldersRoot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManagedFoldersRoot, true), gettype($isManagedFoldersRoot)), __LINE__);
        }
        $this->IsManagedFoldersRoot = $isManagedFoldersRoot;
        
        return $this;
    }
    /**
     * Get ManagedFolderId value
     * @return string|null
     */
    public function getManagedFolderId(): ?string
    {
        return $this->ManagedFolderId;
    }
    /**
     * Set ManagedFolderId value
     * @param string $managedFolderId
     * @return \StructType\EwsManagedFolderInformationType
     */
    public function setManagedFolderId(?string $managedFolderId = null): self
    {
        // validation for constraint: string
        if (!is_null($managedFolderId) && !is_string($managedFolderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($managedFolderId, true), gettype($managedFolderId)), __LINE__);
        }
        $this->ManagedFolderId = $managedFolderId;
        
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \StructType\EwsManagedFolderInformationType
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        
        return $this;
    }
    /**
     * Get StorageQuota value
     * @return int|null
     */
    public function getStorageQuota(): ?int
    {
        return $this->StorageQuota;
    }
    /**
     * Set StorageQuota value
     * @param int $storageQuota
     * @return \StructType\EwsManagedFolderInformationType
     */
    public function setStorageQuota(?int $storageQuota = null): self
    {
        // validation for constraint: int
        if (!is_null($storageQuota) && !(is_int($storageQuota) || ctype_digit($storageQuota))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storageQuota, true), gettype($storageQuota)), __LINE__);
        }
        $this->StorageQuota = $storageQuota;
        
        return $this;
    }
    /**
     * Get FolderSize value
     * @return int|null
     */
    public function getFolderSize(): ?int
    {
        return $this->FolderSize;
    }
    /**
     * Set FolderSize value
     * @param int $folderSize
     * @return \StructType\EwsManagedFolderInformationType
     */
    public function setFolderSize(?int $folderSize = null): self
    {
        // validation for constraint: int
        if (!is_null($folderSize) && !(is_int($folderSize) || ctype_digit($folderSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderSize, true), gettype($folderSize)), __LINE__);
        }
        $this->FolderSize = $folderSize;
        
        return $this;
    }
    /**
     * Get HomePage value
     * @return string|null
     */
    public function getHomePage(): ?string
    {
        return $this->HomePage;
    }
    /**
     * Set HomePage value
     * @param string $homePage
     * @return \StructType\EwsManagedFolderInformationType
     */
    public function setHomePage(?string $homePage = null): self
    {
        // validation for constraint: string
        if (!is_null($homePage) && !is_string($homePage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($homePage, true), gettype($homePage)), __LINE__);
        }
        $this->HomePage = $homePage;
        
        return $this;
    }
}
