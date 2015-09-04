<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePermissionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A permission on a folder
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
abstract class EwsBasePermissionType extends AbstractStructBase
{
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserIdType
     */
    public $UserId;
    /**
     * The CanCreateItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $CanCreateItems;
    /**
     * The CanCreateSubFolders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $CanCreateSubFolders;
    /**
     * The IsFolderOwner
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsFolderOwner;
    /**
     * The IsFolderVisible
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsFolderVisible;
    /**
     * The IsFolderContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsFolderContact;
    /**
     * The EditItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EditItems;
    /**
     * The DeleteItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeleteItems;
    /**
     * Constructor method for BasePermissionType
     * @uses EwsBasePermissionType::setUserId()
     * @uses EwsBasePermissionType::setCanCreateItems()
     * @uses EwsBasePermissionType::setCanCreateSubFolders()
     * @uses EwsBasePermissionType::setIsFolderOwner()
     * @uses EwsBasePermissionType::setIsFolderVisible()
     * @uses EwsBasePermissionType::setIsFolderContact()
     * @uses EwsBasePermissionType::setEditItems()
     * @uses EwsBasePermissionType::setDeleteItems()
     * @param \Ews\StructType\EwsUserIdType $userId
     * @param boolean $canCreateItems
     * @param boolean $canCreateSubFolders
     * @param boolean $isFolderOwner
     * @param boolean $isFolderVisible
     * @param boolean $isFolderContact
     * @param string $editItems
     * @param string $deleteItems
     */
    public function __construct(\Ews\StructType\EwsUserIdType $userId = null, $canCreateItems = null, $canCreateSubFolders = null, $isFolderOwner = null, $isFolderVisible = null, $isFolderContact = null, $editItems = null, $deleteItems = null)
    {
        $this
            ->setUserId($userId)
            ->setCanCreateItems($canCreateItems)
            ->setCanCreateSubFolders($canCreateSubFolders)
            ->setIsFolderOwner($isFolderOwner)
            ->setIsFolderVisible($isFolderVisible)
            ->setIsFolderContact($isFolderContact)
            ->setEditItems($editItems)
            ->setDeleteItems($deleteItems);
    }
    /**
     * Get UserId value
     * @return \Ews\StructType\EwsUserIdType
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param \Ews\StructType\EwsUserIdType $userId
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setUserId(\Ews\StructType\EwsUserIdType $userId = null)
    {
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get CanCreateItems value
     * @return boolean|null
     */
    public function getCanCreateItems()
    {
        return $this->CanCreateItems;
    }
    /**
     * Set CanCreateItems value
     * @param boolean $canCreateItems
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setCanCreateItems($canCreateItems = null)
    {
        $this->CanCreateItems = $canCreateItems;
        return $this;
    }
    /**
     * Get CanCreateSubFolders value
     * @return boolean|null
     */
    public function getCanCreateSubFolders()
    {
        return $this->CanCreateSubFolders;
    }
    /**
     * Set CanCreateSubFolders value
     * @param boolean $canCreateSubFolders
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setCanCreateSubFolders($canCreateSubFolders = null)
    {
        $this->CanCreateSubFolders = $canCreateSubFolders;
        return $this;
    }
    /**
     * Get IsFolderOwner value
     * @return boolean|null
     */
    public function getIsFolderOwner()
    {
        return $this->IsFolderOwner;
    }
    /**
     * Set IsFolderOwner value
     * @param boolean $isFolderOwner
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setIsFolderOwner($isFolderOwner = null)
    {
        $this->IsFolderOwner = $isFolderOwner;
        return $this;
    }
    /**
     * Get IsFolderVisible value
     * @return boolean|null
     */
    public function getIsFolderVisible()
    {
        return $this->IsFolderVisible;
    }
    /**
     * Set IsFolderVisible value
     * @param boolean $isFolderVisible
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setIsFolderVisible($isFolderVisible = null)
    {
        $this->IsFolderVisible = $isFolderVisible;
        return $this;
    }
    /**
     * Get IsFolderContact value
     * @return boolean|null
     */
    public function getIsFolderContact()
    {
        return $this->IsFolderContact;
    }
    /**
     * Set IsFolderContact value
     * @param boolean $isFolderContact
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setIsFolderContact($isFolderContact = null)
    {
        $this->IsFolderContact = $isFolderContact;
        return $this;
    }
    /**
     * Get EditItems value
     * @return string|null
     */
    public function getEditItems()
    {
        return $this->EditItems;
    }
    /**
     * Set EditItems value
     * @uses \Ews\EnumType\EwsPermissionActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsPermissionActionType::getValidValues()
     * @param string $editItems
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setEditItems($editItems = null)
    {
        if (!\Ews\EnumType\EwsPermissionActionType::valueIsValid($editItems)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $editItems, implode(', ', \Ews\EnumType\EwsPermissionActionType::getValidValues())), __LINE__);
        }
        $this->EditItems = $editItems;
        return $this;
    }
    /**
     * Get DeleteItems value
     * @return string|null
     */
    public function getDeleteItems()
    {
        return $this->DeleteItems;
    }
    /**
     * Set DeleteItems value
     * @uses \Ews\EnumType\EwsPermissionActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsPermissionActionType::getValidValues()
     * @param string $deleteItems
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setDeleteItems($deleteItems = null)
    {
        if (!\Ews\EnumType\EwsPermissionActionType::valueIsValid($deleteItems)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deleteItems, implode(', ', \Ews\EnumType\EwsPermissionActionType::getValidValues())), __LINE__);
        }
        $this->DeleteItems = $deleteItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBasePermissionType
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
