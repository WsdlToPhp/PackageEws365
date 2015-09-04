<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
abstract class EwsBaseFolderType extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved folder
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The ParentFolderId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved folder
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $ParentFolderId;
    /**
     * The FolderClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FolderClass;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The TotalCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalCount;
    /**
     * The ChildFolderCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ChildFolderCount;
    /**
     * The ExtendedProperty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Represents an extended property instance (both its path identifier along with its associated value).
     * @var \Ews\StructType\EwsExtendedPropertyType
     */
    public $ExtendedProperty;
    /**
     * The ManagedFolderInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Compound property for Managed Folder related information for Managed Folders.
     * @var \Ews\StructType\EwsManagedFolderInformationType
     */
    public $ManagedFolderInformation;
    /**
     * The EffectiveRights
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEffectiveRightsType
     */
    public $EffectiveRights;
    /**
     * The DistinguishedFolderId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: URIs for the distinguished folders accessible from a mailbox
     * @var string
     */
    public $DistinguishedFolderId;
    /**
     * The PolicyTag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRetentionTagType
     */
    public $PolicyTag;
    /**
     * The ArchiveTag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRetentionTagType
     */
    public $ArchiveTag;
    /**
     * The ReplicaList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $ReplicaList;
    /**
     * Constructor method for BaseFolderType
     * @uses EwsBaseFolderType::setFolderId()
     * @uses EwsBaseFolderType::setParentFolderId()
     * @uses EwsBaseFolderType::setFolderClass()
     * @uses EwsBaseFolderType::setDisplayName()
     * @uses EwsBaseFolderType::setTotalCount()
     * @uses EwsBaseFolderType::setChildFolderCount()
     * @uses EwsBaseFolderType::setExtendedProperty()
     * @uses EwsBaseFolderType::setManagedFolderInformation()
     * @uses EwsBaseFolderType::setEffectiveRights()
     * @uses EwsBaseFolderType::setDistinguishedFolderId()
     * @uses EwsBaseFolderType::setPolicyTag()
     * @uses EwsBaseFolderType::setArchiveTag()
     * @uses EwsBaseFolderType::setReplicaList()
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @param \Ews\StructType\EwsFolderIdType $parentFolderId
     * @param string $folderClass
     * @param string $displayName
     * @param int $totalCount
     * @param int $childFolderCount
     * @param \Ews\StructType\EwsExtendedPropertyType $extendedProperty
     * @param \Ews\StructType\EwsManagedFolderInformationType $managedFolderInformation
     * @param \Ews\StructType\EwsEffectiveRightsType $effectiveRights
     * @param string $distinguishedFolderId
     * @param \Ews\StructType\EwsRetentionTagType $policyTag
     * @param \Ews\StructType\EwsRetentionTagType $archiveTag
     * @param \Ews\ArrayType\EwsArrayOfStringsType $replicaList
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null, \Ews\StructType\EwsFolderIdType $parentFolderId = null, $folderClass = null, $displayName = null, $totalCount = null, $childFolderCount = null, \Ews\StructType\EwsExtendedPropertyType $extendedProperty = null, \Ews\StructType\EwsManagedFolderInformationType $managedFolderInformation = null, \Ews\StructType\EwsEffectiveRightsType $effectiveRights = null, $distinguishedFolderId = null, \Ews\StructType\EwsRetentionTagType $policyTag = null, \Ews\StructType\EwsRetentionTagType $archiveTag = null, \Ews\ArrayType\EwsArrayOfStringsType $replicaList = null)
    {
        $this
            ->setFolderId($folderId)
            ->setParentFolderId($parentFolderId)
            ->setFolderClass($folderClass)
            ->setDisplayName($displayName)
            ->setTotalCount($totalCount)
            ->setChildFolderCount($childFolderCount)
            ->setExtendedProperty($extendedProperty)
            ->setManagedFolderInformation($managedFolderInformation)
            ->setEffectiveRights($effectiveRights)
            ->setDistinguishedFolderId($distinguishedFolderId)
            ->setPolicyTag($policyTag)
            ->setArchiveTag($archiveTag)
            ->setReplicaList($replicaList);
    }
    /**
     * Get FolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Get ParentFolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getParentFolderId()
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \Ews\StructType\EwsFolderIdType $parentFolderId
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setParentFolderId(\Ews\StructType\EwsFolderIdType $parentFolderId = null)
    {
        $this->ParentFolderId = $parentFolderId;
        return $this;
    }
    /**
     * Get FolderClass value
     * @return string|null
     */
    public function getFolderClass()
    {
        return $this->FolderClass;
    }
    /**
     * Set FolderClass value
     * @param string $folderClass
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setFolderClass($folderClass = null)
    {
        $this->FolderClass = $folderClass;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get TotalCount value
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }
    /**
     * Set TotalCount value
     * @param int $totalCount
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setTotalCount($totalCount = null)
    {
        $this->TotalCount = $totalCount;
        return $this;
    }
    /**
     * Get ChildFolderCount value
     * @return int|null
     */
    public function getChildFolderCount()
    {
        return $this->ChildFolderCount;
    }
    /**
     * Set ChildFolderCount value
     * @param int $childFolderCount
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setChildFolderCount($childFolderCount = null)
    {
        $this->ChildFolderCount = $childFolderCount;
        return $this;
    }
    /**
     * Get ExtendedProperty value
     * @return \Ews\StructType\EwsExtendedPropertyType|null
     */
    public function getExtendedProperty()
    {
        return $this->ExtendedProperty;
    }
    /**
     * Set ExtendedProperty value
     * @param \Ews\StructType\EwsExtendedPropertyType $extendedProperty
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setExtendedProperty(\Ews\StructType\EwsExtendedPropertyType $extendedProperty = null)
    {
        $this->ExtendedProperty = $extendedProperty;
        return $this;
    }
    /**
     * Get ManagedFolderInformation value
     * @return \Ews\StructType\EwsManagedFolderInformationType|null
     */
    public function getManagedFolderInformation()
    {
        return $this->ManagedFolderInformation;
    }
    /**
     * Set ManagedFolderInformation value
     * @param \Ews\StructType\EwsManagedFolderInformationType $managedFolderInformation
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setManagedFolderInformation(\Ews\StructType\EwsManagedFolderInformationType $managedFolderInformation = null)
    {
        $this->ManagedFolderInformation = $managedFolderInformation;
        return $this;
    }
    /**
     * Get EffectiveRights value
     * @return \Ews\StructType\EwsEffectiveRightsType|null
     */
    public function getEffectiveRights()
    {
        return $this->EffectiveRights;
    }
    /**
     * Set EffectiveRights value
     * @param \Ews\StructType\EwsEffectiveRightsType $effectiveRights
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setEffectiveRights(\Ews\StructType\EwsEffectiveRightsType $effectiveRights = null)
    {
        $this->EffectiveRights = $effectiveRights;
        return $this;
    }
    /**
     * Get DistinguishedFolderId value
     * @return string|null
     */
    public function getDistinguishedFolderId()
    {
        return $this->DistinguishedFolderId;
    }
    /**
     * Set DistinguishedFolderId value
     * @uses \Ews\EnumType\EwsDistinguishedFolderIdNameType::valueIsValid()
     * @uses \Ews\EnumType\EwsDistinguishedFolderIdNameType::getValidValues()
     * @param string $distinguishedFolderId
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setDistinguishedFolderId($distinguishedFolderId = null)
    {
        if (!\Ews\EnumType\EwsDistinguishedFolderIdNameType::valueIsValid($distinguishedFolderId)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $distinguishedFolderId, implode(', ', \Ews\EnumType\EwsDistinguishedFolderIdNameType::getValidValues())), __LINE__);
        }
        $this->DistinguishedFolderId = $distinguishedFolderId;
        return $this;
    }
    /**
     * Get PolicyTag value
     * @return \Ews\StructType\EwsRetentionTagType|null
     */
    public function getPolicyTag()
    {
        return $this->PolicyTag;
    }
    /**
     * Set PolicyTag value
     * @param \Ews\StructType\EwsRetentionTagType $policyTag
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setPolicyTag(\Ews\StructType\EwsRetentionTagType $policyTag = null)
    {
        $this->PolicyTag = $policyTag;
        return $this;
    }
    /**
     * Get ArchiveTag value
     * @return \Ews\StructType\EwsRetentionTagType|null
     */
    public function getArchiveTag()
    {
        return $this->ArchiveTag;
    }
    /**
     * Set ArchiveTag value
     * @param \Ews\StructType\EwsRetentionTagType $archiveTag
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setArchiveTag(\Ews\StructType\EwsRetentionTagType $archiveTag = null)
    {
        $this->ArchiveTag = $archiveTag;
        return $this;
    }
    /**
     * Get ReplicaList value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getReplicaList()
    {
        return $this->ReplicaList;
    }
    /**
     * Set ReplicaList value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $replicaList
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setReplicaList(\Ews\ArrayType\EwsArrayOfStringsType $replicaList = null)
    {
        $this->ReplicaList = $replicaList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseFolderType
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
