<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactsFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactsFolderType extends EwsBaseFolderType
{
    /**
     * The SharingEffectiveRights
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SharingEffectiveRights;
    /**
     * The PermissionSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPermissionSetType
     */
    public $PermissionSet;
    /**
     * The SourceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SourceId;
    /**
     * The AccountName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountName;
    /**
     * Constructor method for ContactsFolderType
     * @uses EwsContactsFolderType::setSharingEffectiveRights()
     * @uses EwsContactsFolderType::setPermissionSet()
     * @uses EwsContactsFolderType::setSourceId()
     * @uses EwsContactsFolderType::setAccountName()
     * @param string $sharingEffectiveRights
     * @param \Ews\StructType\EwsPermissionSetType $permissionSet
     * @param string $sourceId
     * @param string $accountName
     */
    public function __construct($sharingEffectiveRights = null, \Ews\StructType\EwsPermissionSetType $permissionSet = null, $sourceId = null, $accountName = null)
    {
        $this
            ->setSharingEffectiveRights($sharingEffectiveRights)
            ->setPermissionSet($permissionSet)
            ->setSourceId($sourceId)
            ->setAccountName($accountName);
    }
    /**
     * Get SharingEffectiveRights value
     * @return string|null
     */
    public function getSharingEffectiveRights()
    {
        return $this->SharingEffectiveRights;
    }
    /**
     * Set SharingEffectiveRights value
     * @uses \Ews\EnumType\EwsPermissionReadAccessType::valueIsValid()
     * @uses \Ews\EnumType\EwsPermissionReadAccessType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sharingEffectiveRights
     * @return \Ews\StructType\EwsContactsFolderType
     */
    public function setSharingEffectiveRights($sharingEffectiveRights = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsPermissionReadAccessType::valueIsValid($sharingEffectiveRights)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sharingEffectiveRights, implode(', ', \Ews\EnumType\EwsPermissionReadAccessType::getValidValues())), __LINE__);
        }
        $this->SharingEffectiveRights = $sharingEffectiveRights;
        return $this;
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
     * @return \Ews\StructType\EwsContactsFolderType
     */
    public function setPermissionSet(\Ews\StructType\EwsPermissionSetType $permissionSet = null)
    {
        $this->PermissionSet = $permissionSet;
        return $this;
    }
    /**
     * Get SourceId value
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->SourceId;
    }
    /**
     * Set SourceId value
     * @param string $sourceId
     * @return \Ews\StructType\EwsContactsFolderType
     */
    public function setSourceId($sourceId = null)
    {
        // validation for constraint: string
        if (!is_null($sourceId) && !is_string($sourceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceId)), __LINE__);
        }
        $this->SourceId = $sourceId;
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \Ews\StructType\EwsContactsFolderType
     */
    public function setAccountName($accountName = null)
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsContactsFolderType
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
