<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFolderType extends EwsBaseFolderType
{
    /**
     * The PermissionSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The set of permissions on a folder
     * @var \Ews\StructType\EwsPermissionSetType
     */
    public $PermissionSet;
    /**
     * The UnreadCount
     * Meta informations extracted from the WSDL
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
        $this->UnreadCount = $unreadCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFolderType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
