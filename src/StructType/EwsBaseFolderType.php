<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseFolderType extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The ParentFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $ParentFolderId;
    /**
     * The FolderClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FolderClass;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The TotalCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalCount;
    /**
     * The ChildFolderCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ChildFolderCount;
    /**
     * The ExtendedProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsExtendedPropertyType[]
     */
    public $ExtendedProperty;
    /**
     * The ManagedFolderInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsManagedFolderInformationType
     */
    public $ManagedFolderInformation;
    /**
     * The EffectiveRights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEffectiveRightsType
     */
    public $EffectiveRights;
    /**
     * The DistinguishedFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DistinguishedFolderId;
    /**
     * The PolicyTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRetentionTagType
     */
    public $PolicyTag;
    /**
     * The ArchiveTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRetentionTagType
     */
    public $ArchiveTag;
    /**
     * The ReplicaList
     * Meta information extracted from the WSDL
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
     * @param \Ews\StructType\EwsExtendedPropertyType[] $extendedProperty
     * @param \Ews\StructType\EwsManagedFolderInformationType $managedFolderInformation
     * @param \Ews\StructType\EwsEffectiveRightsType $effectiveRights
     * @param string $distinguishedFolderId
     * @param \Ews\StructType\EwsRetentionTagType $policyTag
     * @param \Ews\StructType\EwsRetentionTagType $archiveTag
     * @param \Ews\ArrayType\EwsArrayOfStringsType $replicaList
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null, \Ews\StructType\EwsFolderIdType $parentFolderId = null, $folderClass = null, $displayName = null, $totalCount = null, $childFolderCount = null, array $extendedProperty = array(), \Ews\StructType\EwsManagedFolderInformationType $managedFolderInformation = null, \Ews\StructType\EwsEffectiveRightsType $effectiveRights = null, $distinguishedFolderId = null, \Ews\StructType\EwsRetentionTagType $policyTag = null, \Ews\StructType\EwsRetentionTagType $archiveTag = null, \Ews\ArrayType\EwsArrayOfStringsType $replicaList = null)
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
        // validation for constraint: string
        if (!is_null($folderClass) && !is_string($folderClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderClass, true), gettype($folderClass)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($totalCount) && !(is_int($totalCount) || ctype_digit($totalCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalCount, true), gettype($totalCount)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($childFolderCount) && !(is_int($childFolderCount) || ctype_digit($childFolderCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($childFolderCount, true), gettype($childFolderCount)), __LINE__);
        }
        $this->ChildFolderCount = $childFolderCount;
        return $this;
    }
    /**
     * Get ExtendedProperty value
     * @return \Ews\StructType\EwsExtendedPropertyType[]|null
     */
    public function getExtendedProperty()
    {
        return $this->ExtendedProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setExtendedProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtendedPropertyForArrayConstraintsFromSetExtendedProperty(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseFolderTypeExtendedPropertyItem) {
            // validation for constraint: itemType
            if (!$baseFolderTypeExtendedPropertyItem instanceof \Ews\StructType\EwsExtendedPropertyType) {
                $invalidValues[] = is_object($baseFolderTypeExtendedPropertyItem) ? get_class($baseFolderTypeExtendedPropertyItem) : sprintf('%s(%s)', gettype($baseFolderTypeExtendedPropertyItem), var_export($baseFolderTypeExtendedPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExtendedProperty property can only contain items of type \Ews\StructType\EwsExtendedPropertyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExtendedProperty value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExtendedPropertyType[] $extendedProperty
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setExtendedProperty(array $extendedProperty = array())
    {
        // validation for constraint: array
        if ('' !== ($extendedPropertyArrayErrorMessage = self::validateExtendedPropertyForArrayConstraintsFromSetExtendedProperty($extendedProperty))) {
            throw new \InvalidArgumentException($extendedPropertyArrayErrorMessage, __LINE__);
        }
        $this->ExtendedProperty = $extendedProperty;
        return $this;
    }
    /**
     * Add item to ExtendedProperty value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExtendedPropertyType $item
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function addToExtendedProperty(\Ews\StructType\EwsExtendedPropertyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsExtendedPropertyType) {
            throw new \InvalidArgumentException(sprintf('The ExtendedProperty property can only contain items of type \Ews\StructType\EwsExtendedPropertyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExtendedProperty[] = $item;
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
     * @throws \InvalidArgumentException
     * @param string $distinguishedFolderId
     * @return \Ews\StructType\EwsBaseFolderType
     */
    public function setDistinguishedFolderId($distinguishedFolderId = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDistinguishedFolderIdNameType::valueIsValid($distinguishedFolderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDistinguishedFolderIdNameType', is_array($distinguishedFolderId) ? implode(', ', $distinguishedFolderId) : var_export($distinguishedFolderId, true), implode(', ', \Ews\EnumType\EwsDistinguishedFolderIdNameType::getValidValues())), __LINE__);
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
}
