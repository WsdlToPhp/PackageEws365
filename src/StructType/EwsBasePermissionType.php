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
     * @var bool
     */
    public $CanCreateItems;
    /**
     * The CanCreateSubFolders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $CanCreateSubFolders;
    /**
     * The IsFolderOwner
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsFolderOwner;
    /**
     * The IsFolderVisible
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsFolderVisible;
    /**
     * The IsFolderContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
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
     * @param bool $canCreateItems
     * @param bool $canCreateSubFolders
     * @param bool $isFolderOwner
     * @param bool $isFolderVisible
     * @param bool $isFolderContact
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
     * @return bool|null
     */
    public function getCanCreateItems()
    {
        return $this->CanCreateItems;
    }
    /**
     * Set CanCreateItems value
     * @param bool $canCreateItems
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setCanCreateItems($canCreateItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($canCreateItems) && !is_bool($canCreateItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($canCreateItems)), __LINE__);
        }
        $this->CanCreateItems = $canCreateItems;
        return $this;
    }
    /**
     * Get CanCreateSubFolders value
     * @return bool|null
     */
    public function getCanCreateSubFolders()
    {
        return $this->CanCreateSubFolders;
    }
    /**
     * Set CanCreateSubFolders value
     * @param bool $canCreateSubFolders
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setCanCreateSubFolders($canCreateSubFolders = null)
    {
        // validation for constraint: boolean
        if (!is_null($canCreateSubFolders) && !is_bool($canCreateSubFolders)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($canCreateSubFolders)), __LINE__);
        }
        $this->CanCreateSubFolders = $canCreateSubFolders;
        return $this;
    }
    /**
     * Get IsFolderOwner value
     * @return bool|null
     */
    public function getIsFolderOwner()
    {
        return $this->IsFolderOwner;
    }
    /**
     * Set IsFolderOwner value
     * @param bool $isFolderOwner
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setIsFolderOwner($isFolderOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFolderOwner) && !is_bool($isFolderOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isFolderOwner)), __LINE__);
        }
        $this->IsFolderOwner = $isFolderOwner;
        return $this;
    }
    /**
     * Get IsFolderVisible value
     * @return bool|null
     */
    public function getIsFolderVisible()
    {
        return $this->IsFolderVisible;
    }
    /**
     * Set IsFolderVisible value
     * @param bool $isFolderVisible
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setIsFolderVisible($isFolderVisible = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFolderVisible) && !is_bool($isFolderVisible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isFolderVisible)), __LINE__);
        }
        $this->IsFolderVisible = $isFolderVisible;
        return $this;
    }
    /**
     * Get IsFolderContact value
     * @return bool|null
     */
    public function getIsFolderContact()
    {
        return $this->IsFolderContact;
    }
    /**
     * Set IsFolderContact value
     * @param bool $isFolderContact
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setIsFolderContact($isFolderContact = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFolderContact) && !is_bool($isFolderContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isFolderContact)), __LINE__);
        }
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
     * @throws \InvalidArgumentException
     * @param string $editItems
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setEditItems($editItems = null)
    {
        // validation for constraint: enumeration
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
     * @throws \InvalidArgumentException
     * @param string $deleteItems
     * @return \Ews\StructType\EwsBasePermissionType
     */
    public function setDeleteItems($deleteItems = null)
    {
        // validation for constraint: enumeration
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
