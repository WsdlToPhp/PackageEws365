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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SharingEffectiveRights;
    /**
     * The PermissionSet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPermissionSetType
     */
    public $PermissionSet;
    /**
     * The SourceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SourceId;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsPermissionReadAccessType', is_array($sharingEffectiveRights) ? implode(', ', $sharingEffectiveRights) : var_export($sharingEffectiveRights, true), implode(', ', \Ews\EnumType\EwsPermissionReadAccessType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceId, true), gettype($sourceId)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        return $this;
    }
}
