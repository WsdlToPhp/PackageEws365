<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var bool
     */
    public $CanDelete;
    /**
     * The CanRenameOrMove
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CanRenameOrMove;
    /**
     * The MustDisplayComment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MustDisplayComment;
    /**
     * The HasQuota
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasQuota;
    /**
     * The IsManagedFoldersRoot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsManagedFoldersRoot;
    /**
     * The ManagedFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ManagedFolderId;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The StorageQuota
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StorageQuota;
    /**
     * The FolderSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FolderSize;
    /**
     * The HomePage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HomePage;
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
    public function __construct($canDelete = null, $canRenameOrMove = null, $mustDisplayComment = null, $hasQuota = null, $isManagedFoldersRoot = null, $managedFolderId = null, $comment = null, $storageQuota = null, $folderSize = null, $homePage = null)
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
    public function getCanDelete()
    {
        return $this->CanDelete;
    }
    /**
     * Set CanDelete value
     * @param bool $canDelete
     * @return \Ews\StructType\EwsManagedFolderInformationType
     */
    public function setCanDelete($canDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($canDelete) && !is_bool($canDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canDelete, true), gettype($canDelete)), __LINE__);
        }
        $this->CanDelete = $canDelete;
        return $this;
    }
    /**
     * Get CanRenameOrMove value
     * @return bool|null
     */
    public function getCanRenameOrMove()
    {
        return $this->CanRenameOrMove;
    }
    /**
     * Set CanRenameOrMove value
     * @param bool $canRenameOrMove
     * @return \Ews\StructType\EwsManagedFolderInformationType
     */
    public function setCanRenameOrMove($canRenameOrMove = null)
    {
        // validation for constraint: boolean
        if (!is_null($canRenameOrMove) && !is_bool($canRenameOrMove)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canRenameOrMove, true), gettype($canRenameOrMove)), __LINE__);
        }
        $this->CanRenameOrMove = $canRenameOrMove;
        return $this;
    }
    /**
     * Get MustDisplayComment value
     * @return bool|null
     */
    public function getMustDisplayComment()
    {
        return $this->MustDisplayComment;
    }
    /**
     * Set MustDisplayComment value
     * @param bool $mustDisplayComment
     * @return \Ews\StructType\EwsManagedFolderInformationType
     */
    public function setMustDisplayComment($mustDisplayComment = null)
    {
        // validation for constraint: boolean
        if (!is_null($mustDisplayComment) && !is_bool($mustDisplayComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mustDisplayComment, true), gettype($mustDisplayComment)), __LINE__);
        }
        $this->MustDisplayComment = $mustDisplayComment;
        return $this;
    }
    /**
     * Get HasQuota value
     * @return bool|null
     */
    public function getHasQuota()
    {
        return $this->HasQuota;
    }
    /**
     * Set HasQuota value
     * @param bool $hasQuota
     * @return \Ews\StructType\EwsManagedFolderInformationType
     */
    public function setHasQuota($hasQuota = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasQuota) && !is_bool($hasQuota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasQuota, true), gettype($hasQuota)), __LINE__);
        }
        $this->HasQuota = $hasQuota;
        return $this;
    }
    /**
     * Get IsManagedFoldersRoot value
     * @return bool|null
     */
    public function getIsManagedFoldersRoot()
    {
        return $this->IsManagedFoldersRoot;
    }
    /**
     * Set IsManagedFoldersRoot value
     * @param bool $isManagedFoldersRoot
     * @return \Ews\StructType\EwsManagedFolderInformationType
     */
    public function setIsManagedFoldersRoot($isManagedFoldersRoot = null)
    {
        // validation for constraint: boolean
        if (!is_null($isManagedFoldersRoot) && !is_bool($isManagedFoldersRoot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManagedFoldersRoot, true), gettype($isManagedFoldersRoot)), __LINE__);
        }
        $this->IsManagedFoldersRoot = $isManagedFoldersRoot;
        return $this;
    }
    /**
     * Get ManagedFolderId value
     * @return string|null
     */
    public function getManagedFolderId()
    {
        return $this->ManagedFolderId;
    }
    /**
     * Set ManagedFolderId value
     * @param string $managedFolderId
     * @return \Ews\StructType\EwsManagedFolderInformationType
     */
    public function setManagedFolderId($managedFolderId = null)
    {
        // validation for constraint: string
        if (!is_null($managedFolderId) && !is_string($managedFolderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($managedFolderId, true), gettype($managedFolderId)), __LINE__);
        }
        $this->ManagedFolderId = $managedFolderId;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Ews\StructType\EwsManagedFolderInformationType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get StorageQuota value
     * @return int|null
     */
    public function getStorageQuota()
    {
        return $this->StorageQuota;
    }
    /**
     * Set StorageQuota value
     * @param int $storageQuota
     * @return \Ews\StructType\EwsManagedFolderInformationType
     */
    public function setStorageQuota($storageQuota = null)
    {
        // validation for constraint: int
        if (!is_null($storageQuota) && !(is_int($storageQuota) || ctype_digit($storageQuota))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storageQuota, true), gettype($storageQuota)), __LINE__);
        }
        $this->StorageQuota = $storageQuota;
        return $this;
    }
    /**
     * Get FolderSize value
     * @return int|null
     */
    public function getFolderSize()
    {
        return $this->FolderSize;
    }
    /**
     * Set FolderSize value
     * @param int $folderSize
     * @return \Ews\StructType\EwsManagedFolderInformationType
     */
    public function setFolderSize($folderSize = null)
    {
        // validation for constraint: int
        if (!is_null($folderSize) && !(is_int($folderSize) || ctype_digit($folderSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderSize, true), gettype($folderSize)), __LINE__);
        }
        $this->FolderSize = $folderSize;
        return $this;
    }
    /**
     * Get HomePage value
     * @return string|null
     */
    public function getHomePage()
    {
        return $this->HomePage;
    }
    /**
     * Set HomePage value
     * @param string $homePage
     * @return \Ews\StructType\EwsManagedFolderInformationType
     */
    public function setHomePage($homePage = null)
    {
        // validation for constraint: string
        if (!is_null($homePage) && !is_string($homePage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($homePage, true), gettype($homePage)), __LINE__);
        }
        $this->HomePage = $homePage;
        return $this;
    }
}
