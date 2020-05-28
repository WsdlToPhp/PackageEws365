<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsPermissionSetType
     */
    public $PermissionSet;
    /**
     * The UnreadCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UnreadCount;
    /**
     * Constructor method for FolderType
     * @uses EwsFolderType::setPermissionSet()
     * @uses EwsFolderType::setUnreadCount()
     * @param \Ews\StructType\EwsPermissionSetType $permissionSet
     * @param int $unreadCount
     */
    public function __construct(\Ews\StructType\EwsPermissionSetType $permissionSet = null, $unreadCount = null)
    {
        $this
            ->setPermissionSet($permissionSet)
            ->setUnreadCount($unreadCount);
    }
    /**
     * Get PermissionSet value
     * @return \Ews\StructType\EwsPermissionSetType|null
     */
    public function getPermissionSet()
    {
        return $this->PermissionSet;
    }
    /**
     * Set PermissionSet value
     * @param \Ews\StructType\EwsPermissionSetType $permissionSet
     * @return \Ews\StructType\EwsFolderType
     */
    public function setPermissionSet(\Ews\StructType\EwsPermissionSetType $permissionSet = null)
    {
        $this->PermissionSet = $permissionSet;
        return $this;
    }
    /**
     * Get UnreadCount value
     * @return int|null
     */
    public function getUnreadCount()
    {
        return $this->UnreadCount;
    }
    /**
     * Set UnreadCount value
     * @param int $unreadCount
     * @return \Ews\StructType\EwsFolderType
     */
    public function setUnreadCount($unreadCount = null)
    {
        // validation for constraint: int
        if (!is_null($unreadCount) && !(is_int($unreadCount) || ctype_digit($unreadCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unreadCount, true), gettype($unreadCount)), __LINE__);
        }
        $this->UnreadCount = $unreadCount;
        return $this;
    }
}
