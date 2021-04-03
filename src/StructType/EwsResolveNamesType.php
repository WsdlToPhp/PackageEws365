<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResolveNamesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResolveNamesType extends EwsBaseRequestType
{
    /**
     * The ReturnFullContactData
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $ReturnFullContactData;
    /**
     * The ParentFolderIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $ParentFolderIds = null;
    /**
     * The UnresolvedEntry
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $UnresolvedEntry = null;
    /**
     * The SearchScope
     * Meta information extracted from the WSDL
     * - default: ActiveDirectoryContacts
     * @var string|null
     */
    protected ?string $SearchScope = null;
    /**
     * The ContactDataShape
     * @var string|null
     */
    protected ?string $ContactDataShape = null;
    /**
     * Constructor method for ResolveNamesType
     * @uses EwsResolveNamesType::setReturnFullContactData()
     * @uses EwsResolveNamesType::setParentFolderIds()
     * @uses EwsResolveNamesType::setUnresolvedEntry()
     * @uses EwsResolveNamesType::setSearchScope()
     * @uses EwsResolveNamesType::setContactDataShape()
     * @param bool $returnFullContactData
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds
     * @param string $unresolvedEntry
     * @param string $searchScope
     * @param string $contactDataShape
     */
    public function __construct(bool $returnFullContactData, ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null, ?string $unresolvedEntry = null, ?string $searchScope = null, ?string $contactDataShape = null)
    {
        $this
            ->setReturnFullContactData($returnFullContactData)
            ->setParentFolderIds($parentFolderIds)
            ->setUnresolvedEntry($unresolvedEntry)
            ->setSearchScope($searchScope)
            ->setContactDataShape($contactDataShape);
    }
    /**
     * Get ReturnFullContactData value
     * @return bool
     */
    public function getReturnFullContactData(): bool
    {
        return $this->ReturnFullContactData;
    }
    /**
     * Set ReturnFullContactData value
     * @param bool $returnFullContactData
     * @return \StructType\EwsResolveNamesType
     */
    public function setReturnFullContactData(bool $returnFullContactData): self
    {
        // validation for constraint: boolean
        if (!is_null($returnFullContactData) && !is_bool($returnFullContactData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnFullContactData, true), gettype($returnFullContactData)), __LINE__);
        }
        $this->ReturnFullContactData = $returnFullContactData;
        
        return $this;
    }
    /**
     * Get ParentFolderIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getParentFolderIds(): ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
    {
        return $this->ParentFolderIds;
    }
    /**
     * Set ParentFolderIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds
     * @return \StructType\EwsResolveNamesType
     */
    public function setParentFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null): self
    {
        $this->ParentFolderIds = $parentFolderIds;
        
        return $this;
    }
    /**
     * Get UnresolvedEntry value
     * @return string|null
     */
    public function getUnresolvedEntry(): ?string
    {
        return $this->UnresolvedEntry;
    }
    /**
     * Set UnresolvedEntry value
     * @param string $unresolvedEntry
     * @return \StructType\EwsResolveNamesType
     */
    public function setUnresolvedEntry(?string $unresolvedEntry = null): self
    {
        // validation for constraint: string
        if (!is_null($unresolvedEntry) && !is_string($unresolvedEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unresolvedEntry, true), gettype($unresolvedEntry)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($unresolvedEntry) && mb_strlen((string) $unresolvedEntry) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $unresolvedEntry)), __LINE__);
        }
        $this->UnresolvedEntry = $unresolvedEntry;
        
        return $this;
    }
    /**
     * Get SearchScope value
     * @return string|null
     */
    public function getSearchScope(): ?string
    {
        return $this->SearchScope;
    }
    /**
     * Set SearchScope value
     * @uses \EnumType\EwsResolveNamesSearchScopeType::valueIsValid()
     * @uses \EnumType\EwsResolveNamesSearchScopeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $searchScope
     * @return \StructType\EwsResolveNamesType
     */
    public function setSearchScope(?string $searchScope = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsResolveNamesSearchScopeType::valueIsValid($searchScope)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsResolveNamesSearchScopeType', is_array($searchScope) ? implode(', ', $searchScope) : var_export($searchScope, true), implode(', ', \EnumType\EwsResolveNamesSearchScopeType::getValidValues())), __LINE__);
        }
        $this->SearchScope = $searchScope;
        
        return $this;
    }
    /**
     * Get ContactDataShape value
     * @return string|null
     */
    public function getContactDataShape(): ?string
    {
        return $this->ContactDataShape;
    }
    /**
     * Set ContactDataShape value
     * @uses \EnumType\EwsDefaultShapeNamesType::valueIsValid()
     * @uses \EnumType\EwsDefaultShapeNamesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $contactDataShape
     * @return \StructType\EwsResolveNamesType
     */
    public function setContactDataShape(?string $contactDataShape = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDefaultShapeNamesType::valueIsValid($contactDataShape)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDefaultShapeNamesType', is_array($contactDataShape) ? implode(', ', $contactDataShape) : var_export($contactDataShape, true), implode(', ', \EnumType\EwsDefaultShapeNamesType::getValidValues())), __LINE__);
        }
        $this->ContactDataShape = $contactDataShape;
        
        return $this;
    }
}
