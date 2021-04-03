<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFolderType extends EwsBaseFolderType
{
    /**
     * The PermissionSet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsPermissionSetType|null
     */
    protected ?\StructType\EwsPermissionSetType $PermissionSet = null;
    /**
     * The UnreadCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UnreadCount = null;
    /**
     * Constructor method for FolderType
     * @uses EwsFolderType::setPermissionSet()
     * @uses EwsFolderType::setUnreadCount()
     * @param \StructType\EwsPermissionSetType $permissionSet
     * @param int $unreadCount
     */
    public function __construct(?\StructType\EwsPermissionSetType $permissionSet = null, ?int $unreadCount = null)
    {
        $this
            ->setPermissionSet($permissionSet)
            ->setUnreadCount($unreadCount);
    }
    /**
     * Get PermissionSet value
     * @return \StructType\EwsPermissionSetType|null
     */
    public function getPermissionSet(): ?\StructType\EwsPermissionSetType
    {
        return $this->PermissionSet;
    }
    /**
     * Set PermissionSet value
     * @param \StructType\EwsPermissionSetType $permissionSet
     * @return \StructType\EwsFolderType
     */
    public function setPermissionSet(?\StructType\EwsPermissionSetType $permissionSet = null): self
    {
        $this->PermissionSet = $permissionSet;
        
        return $this;
    }
    /**
     * Get UnreadCount value
     * @return int|null
     */
    public function getUnreadCount(): ?int
    {
        return $this->UnreadCount;
    }
    /**
     * Set UnreadCount value
     * @param int $unreadCount
     * @return \StructType\EwsFolderType
     */
    public function setUnreadCount(?int $unreadCount = null): self
    {
        // validation for constraint: int
        if (!is_null($unreadCount) && !(is_int($unreadCount) || ctype_digit($unreadCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unreadCount, true), gettype($unreadCount)), __LINE__);
        }
        $this->UnreadCount = $unreadCount;
        
        return $this;
    }
}
