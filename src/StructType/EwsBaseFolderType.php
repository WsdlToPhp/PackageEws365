<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $FolderId = null;
    /**
     * The ParentFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $ParentFolderId = null;
    /**
     * The FolderClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FolderClass = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The TotalCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalCount = null;
    /**
     * The ChildFolderCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ChildFolderCount = null;
    /**
     * The ExtendedProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsExtendedPropertyType[]
     */
    protected array $ExtendedProperty = [];
    /**
     * The ManagedFolderInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsManagedFolderInformationType|null
     */
    protected ?\StructType\EwsManagedFolderInformationType $ManagedFolderInformation = null;
    /**
     * The EffectiveRights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEffectiveRightsType|null
     */
    protected ?\StructType\EwsEffectiveRightsType $EffectiveRights = null;
    /**
     * The DistinguishedFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DistinguishedFolderId = null;
    /**
     * The PolicyTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsRetentionTagType|null
     */
    protected ?\StructType\EwsRetentionTagType $PolicyTag = null;
    /**
     * The ArchiveTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsRetentionTagType|null
     */
    protected ?\StructType\EwsRetentionTagType $ArchiveTag = null;
    /**
     * The ReplicaList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $ReplicaList = null;
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
     * @param \StructType\EwsFolderIdType $folderId
     * @param \StructType\EwsFolderIdType $parentFolderId
     * @param string $folderClass
     * @param string $displayName
     * @param int $totalCount
     * @param int $childFolderCount
     * @param \StructType\EwsExtendedPropertyType[] $extendedProperty
     * @param \StructType\EwsManagedFolderInformationType $managedFolderInformation
     * @param \StructType\EwsEffectiveRightsType $effectiveRights
     * @param string $distinguishedFolderId
     * @param \StructType\EwsRetentionTagType $policyTag
     * @param \StructType\EwsRetentionTagType $archiveTag
     * @param \ArrayType\EwsArrayOfStringsType $replicaList
     */
    public function __construct(?\StructType\EwsFolderIdType $folderId = null, ?\StructType\EwsFolderIdType $parentFolderId = null, ?string $folderClass = null, ?string $displayName = null, ?int $totalCount = null, ?int $childFolderCount = null, array $extendedProperty = [], ?\StructType\EwsManagedFolderInformationType $managedFolderInformation = null, ?\StructType\EwsEffectiveRightsType $effectiveRights = null, ?string $distinguishedFolderId = null, ?\StructType\EwsRetentionTagType $policyTag = null, ?\StructType\EwsRetentionTagType $archiveTag = null, ?\ArrayType\EwsArrayOfStringsType $replicaList = null)
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
     * @return \StructType\EwsFolderIdType|null
     */
    public function getFolderId(): ?\StructType\EwsFolderIdType
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \StructType\EwsFolderIdType $folderId
     * @return \StructType\EwsBaseFolderType
     */
    public function setFolderId(?\StructType\EwsFolderIdType $folderId = null): self
    {
        $this->FolderId = $folderId;
        
        return $this;
    }
    /**
     * Get ParentFolderId value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getParentFolderId(): ?\StructType\EwsFolderIdType
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \StructType\EwsFolderIdType $parentFolderId
     * @return \StructType\EwsBaseFolderType
     */
    public function setParentFolderId(?\StructType\EwsFolderIdType $parentFolderId = null): self
    {
        $this->ParentFolderId = $parentFolderId;
        
        return $this;
    }
    /**
     * Get FolderClass value
     * @return string|null
     */
    public function getFolderClass(): ?string
    {
        return $this->FolderClass;
    }
    /**
     * Set FolderClass value
     * @param string $folderClass
     * @return \StructType\EwsBaseFolderType
     */
    public function setFolderClass(?string $folderClass = null): self
    {
        // validation for constraint: string
        if (!is_null($folderClass) && !is_string($folderClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderClass, true), gettype($folderClass)), __LINE__);
        }
        $this->FolderClass = $folderClass;
        
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsBaseFolderType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get TotalCount value
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->TotalCount;
    }
    /**
     * Set TotalCount value
     * @param int $totalCount
     * @return \StructType\EwsBaseFolderType
     */
    public function setTotalCount(?int $totalCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalCount) && !(is_int($totalCount) || ctype_digit($totalCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalCount, true), gettype($totalCount)), __LINE__);
        }
        $this->TotalCount = $totalCount;
        
        return $this;
    }
    /**
     * Get ChildFolderCount value
     * @return int|null
     */
    public function getChildFolderCount(): ?int
    {
        return $this->ChildFolderCount;
    }
    /**
     * Set ChildFolderCount value
     * @param int $childFolderCount
     * @return \StructType\EwsBaseFolderType
     */
    public function setChildFolderCount(?int $childFolderCount = null): self
    {
        // validation for constraint: int
        if (!is_null($childFolderCount) && !(is_int($childFolderCount) || ctype_digit($childFolderCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($childFolderCount, true), gettype($childFolderCount)), __LINE__);
        }
        $this->ChildFolderCount = $childFolderCount;
        
        return $this;
    }
    /**
     * Get ExtendedProperty value
     * @return \StructType\EwsExtendedPropertyType[]
     */
    public function getExtendedProperty(): array
    {
        return $this->ExtendedProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setExtendedProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtendedPropertyForArrayConstraintsFromSetExtendedProperty(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseFolderTypeExtendedPropertyItem) {
            // validation for constraint: itemType
            if (!$baseFolderTypeExtendedPropertyItem instanceof \StructType\EwsExtendedPropertyType) {
                $invalidValues[] = is_object($baseFolderTypeExtendedPropertyItem) ? get_class($baseFolderTypeExtendedPropertyItem) : sprintf('%s(%s)', gettype($baseFolderTypeExtendedPropertyItem), var_export($baseFolderTypeExtendedPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExtendedProperty property can only contain items of type \StructType\EwsExtendedPropertyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExtendedProperty value
     * @throws InvalidArgumentException
     * @param \StructType\EwsExtendedPropertyType[] $extendedProperty
     * @return \StructType\EwsBaseFolderType
     */
    public function setExtendedProperty(array $extendedProperty = []): self
    {
        // validation for constraint: array
        if ('' !== ($extendedPropertyArrayErrorMessage = self::validateExtendedPropertyForArrayConstraintsFromSetExtendedProperty($extendedProperty))) {
            throw new InvalidArgumentException($extendedPropertyArrayErrorMessage, __LINE__);
        }
        $this->ExtendedProperty = $extendedProperty;
        
        return $this;
    }
    /**
     * Add item to ExtendedProperty value
     * @throws InvalidArgumentException
     * @param \StructType\EwsExtendedPropertyType $item
     * @return \StructType\EwsBaseFolderType
     */
    public function addToExtendedProperty(\StructType\EwsExtendedPropertyType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsExtendedPropertyType) {
            throw new InvalidArgumentException(sprintf('The ExtendedProperty property can only contain items of type \StructType\EwsExtendedPropertyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExtendedProperty[] = $item;
        
        return $this;
    }
    /**
     * Get ManagedFolderInformation value
     * @return \StructType\EwsManagedFolderInformationType|null
     */
    public function getManagedFolderInformation(): ?\StructType\EwsManagedFolderInformationType
    {
        return $this->ManagedFolderInformation;
    }
    /**
     * Set ManagedFolderInformation value
     * @param \StructType\EwsManagedFolderInformationType $managedFolderInformation
     * @return \StructType\EwsBaseFolderType
     */
    public function setManagedFolderInformation(?\StructType\EwsManagedFolderInformationType $managedFolderInformation = null): self
    {
        $this->ManagedFolderInformation = $managedFolderInformation;
        
        return $this;
    }
    /**
     * Get EffectiveRights value
     * @return \StructType\EwsEffectiveRightsType|null
     */
    public function getEffectiveRights(): ?\StructType\EwsEffectiveRightsType
    {
        return $this->EffectiveRights;
    }
    /**
     * Set EffectiveRights value
     * @param \StructType\EwsEffectiveRightsType $effectiveRights
     * @return \StructType\EwsBaseFolderType
     */
    public function setEffectiveRights(?\StructType\EwsEffectiveRightsType $effectiveRights = null): self
    {
        $this->EffectiveRights = $effectiveRights;
        
        return $this;
    }
    /**
     * Get DistinguishedFolderId value
     * @return string|null
     */
    public function getDistinguishedFolderId(): ?string
    {
        return $this->DistinguishedFolderId;
    }
    /**
     * Set DistinguishedFolderId value
     * @uses \EnumType\EwsDistinguishedFolderIdNameType::valueIsValid()
     * @uses \EnumType\EwsDistinguishedFolderIdNameType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $distinguishedFolderId
     * @return \StructType\EwsBaseFolderType
     */
    public function setDistinguishedFolderId(?string $distinguishedFolderId = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDistinguishedFolderIdNameType::valueIsValid($distinguishedFolderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDistinguishedFolderIdNameType', is_array($distinguishedFolderId) ? implode(', ', $distinguishedFolderId) : var_export($distinguishedFolderId, true), implode(', ', \EnumType\EwsDistinguishedFolderIdNameType::getValidValues())), __LINE__);
        }
        $this->DistinguishedFolderId = $distinguishedFolderId;
        
        return $this;
    }
    /**
     * Get PolicyTag value
     * @return \StructType\EwsRetentionTagType|null
     */
    public function getPolicyTag(): ?\StructType\EwsRetentionTagType
    {
        return $this->PolicyTag;
    }
    /**
     * Set PolicyTag value
     * @param \StructType\EwsRetentionTagType $policyTag
     * @return \StructType\EwsBaseFolderType
     */
    public function setPolicyTag(?\StructType\EwsRetentionTagType $policyTag = null): self
    {
        $this->PolicyTag = $policyTag;
        
        return $this;
    }
    /**
     * Get ArchiveTag value
     * @return \StructType\EwsRetentionTagType|null
     */
    public function getArchiveTag(): ?\StructType\EwsRetentionTagType
    {
        return $this->ArchiveTag;
    }
    /**
     * Set ArchiveTag value
     * @param \StructType\EwsRetentionTagType $archiveTag
     * @return \StructType\EwsBaseFolderType
     */
    public function setArchiveTag(?\StructType\EwsRetentionTagType $archiveTag = null): self
    {
        $this->ArchiveTag = $archiveTag;
        
        return $this;
    }
    /**
     * Get ReplicaList value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getReplicaList(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->ReplicaList;
    }
    /**
     * Set ReplicaList value
     * @param \ArrayType\EwsArrayOfStringsType $replicaList
     * @return \StructType\EwsBaseFolderType
     */
    public function setReplicaList(?\ArrayType\EwsArrayOfStringsType $replicaList = null): self
    {
        $this->ReplicaList = $replicaList;
        
        return $this;
    }
}
