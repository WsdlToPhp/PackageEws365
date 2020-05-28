<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $ReturnFullContactData;
    /**
     * The ParentFolderIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;
    /**
     * The UnresolvedEntry
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string
     */
    public $UnresolvedEntry;
    /**
     * The SearchScope
     * Meta information extracted from the WSDL
     * - default: ActiveDirectoryContacts
     * @var string
     */
    public $SearchScope;
    /**
     * The ContactDataShape
     * @var string
     */
    public $ContactDataShape;
    /**
     * Constructor method for ResolveNamesType
     * @uses EwsResolveNamesType::setReturnFullContactData()
     * @uses EwsResolveNamesType::setParentFolderIds()
     * @uses EwsResolveNamesType::setUnresolvedEntry()
     * @uses EwsResolveNamesType::setSearchScope()
     * @uses EwsResolveNamesType::setContactDataShape()
     * @param bool $returnFullContactData
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds
     * @param string $unresolvedEntry
     * @param string $searchScope
     * @param string $contactDataShape
     */
    public function __construct($returnFullContactData = null, \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null, $unresolvedEntry = null, $searchScope = 'ActiveDirectoryContacts', $contactDataShape = null)
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
    public function getReturnFullContactData()
    {
        return $this->ReturnFullContactData;
    }
    /**
     * Set ReturnFullContactData value
     * @param bool $returnFullContactData
     * @return \Ews\StructType\EwsResolveNamesType
     */
    public function setReturnFullContactData($returnFullContactData = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnFullContactData) && !is_bool($returnFullContactData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnFullContactData, true), gettype($returnFullContactData)), __LINE__);
        }
        $this->ReturnFullContactData = $returnFullContactData;
        return $this;
    }
    /**
     * Get ParentFolderIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getParentFolderIds()
    {
        return $this->ParentFolderIds;
    }
    /**
     * Set ParentFolderIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds
     * @return \Ews\StructType\EwsResolveNamesType
     */
    public function setParentFolderIds(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null)
    {
        $this->ParentFolderIds = $parentFolderIds;
        return $this;
    }
    /**
     * Get UnresolvedEntry value
     * @return string|null
     */
    public function getUnresolvedEntry()
    {
        return $this->UnresolvedEntry;
    }
    /**
     * Set UnresolvedEntry value
     * @param string $unresolvedEntry
     * @return \Ews\StructType\EwsResolveNamesType
     */
    public function setUnresolvedEntry($unresolvedEntry = null)
    {
        // validation for constraint: string
        if (!is_null($unresolvedEntry) && !is_string($unresolvedEntry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unresolvedEntry, true), gettype($unresolvedEntry)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($unresolvedEntry) && mb_strlen($unresolvedEntry) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($unresolvedEntry)), __LINE__);
        }
        $this->UnresolvedEntry = $unresolvedEntry;
        return $this;
    }
    /**
     * Get SearchScope value
     * @return string|null
     */
    public function getSearchScope()
    {
        return $this->SearchScope;
    }
    /**
     * Set SearchScope value
     * @uses \Ews\EnumType\EwsResolveNamesSearchScopeType::valueIsValid()
     * @uses \Ews\EnumType\EwsResolveNamesSearchScopeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchScope
     * @return \Ews\StructType\EwsResolveNamesType
     */
    public function setSearchScope($searchScope = 'ActiveDirectoryContacts')
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsResolveNamesSearchScopeType::valueIsValid($searchScope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsResolveNamesSearchScopeType', is_array($searchScope) ? implode(', ', $searchScope) : var_export($searchScope, true), implode(', ', \Ews\EnumType\EwsResolveNamesSearchScopeType::getValidValues())), __LINE__);
        }
        $this->SearchScope = $searchScope;
        return $this;
    }
    /**
     * Get ContactDataShape value
     * @return string|null
     */
    public function getContactDataShape()
    {
        return $this->ContactDataShape;
    }
    /**
     * Set ContactDataShape value
     * @uses \Ews\EnumType\EwsDefaultShapeNamesType::valueIsValid()
     * @uses \Ews\EnumType\EwsDefaultShapeNamesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $contactDataShape
     * @return \Ews\StructType\EwsResolveNamesType
     */
    public function setContactDataShape($contactDataShape = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDefaultShapeNamesType::valueIsValid($contactDataShape)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDefaultShapeNamesType', is_array($contactDataShape) ? implode(', ', $contactDataShape) : var_export($contactDataShape, true), implode(', ', \Ews\EnumType\EwsDefaultShapeNamesType::getValidValues())), __LINE__);
        }
        $this->ContactDataShape = $contactDataShape;
        return $this;
    }
}
