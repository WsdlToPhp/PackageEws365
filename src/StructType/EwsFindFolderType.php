<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindFolderType extends EwsBaseRequestType
{
    /**
     * The Traversal
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: Types of sub-tree traversal for deletion and enumeration
     * @var string
     */
    public $Traversal;
    /**
     * The FolderShape
     * @var \Ews\StructType\EwsFolderResponseShapeType
     */
    public $FolderShape;
    /**
     * The IndexedPageFolderView
     * @var \Ews\StructType\EwsIndexedPageViewType
     */
    public $IndexedPageFolderView;
    /**
     * The FractionalPageFolderView
     * @var \Ews\StructType\EwsFractionalPageViewType
     */
    public $FractionalPageFolderView;
    /**
     * The Restriction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: t:SearchExpression
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $Restriction;
    /**
     * The ParentFolderIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;
    /**
     * Constructor method for FindFolderType
     * @uses EwsFindFolderType::setTraversal()
     * @uses EwsFindFolderType::setFolderShape()
     * @uses EwsFindFolderType::setIndexedPageFolderView()
     * @uses EwsFindFolderType::setFractionalPageFolderView()
     * @uses EwsFindFolderType::setRestriction()
     * @uses EwsFindFolderType::setParentFolderIds()
     * @param string $traversal
     * @param \Ews\StructType\EwsFolderResponseShapeType $folderShape
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageFolderView
     * @param \Ews\StructType\EwsFractionalPageViewType $fractionalPageFolderView
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds
     */
    public function __construct($traversal = null, \Ews\StructType\EwsFolderResponseShapeType $folderShape = null, \Ews\StructType\EwsIndexedPageViewType $indexedPageFolderView = null, \Ews\StructType\EwsFractionalPageViewType $fractionalPageFolderView = null, \Ews\StructType\EwsRestrictionType $restriction = null, \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null)
    {
        $this
            ->setTraversal($traversal)
            ->setFolderShape($folderShape)
            ->setIndexedPageFolderView($indexedPageFolderView)
            ->setFractionalPageFolderView($fractionalPageFolderView)
            ->setRestriction($restriction)
            ->setParentFolderIds($parentFolderIds);
    }
    /**
     * Get Traversal value
     * @return string
     */
    public function getTraversal()
    {
        return $this->Traversal;
    }
    /**
     * Set Traversal value
     * @uses \Ews\EnumType\EwsFolderQueryTraversalType::valueIsValid()
     * @uses \Ews\EnumType\EwsFolderQueryTraversalType::getValidValues()
     * @param string $traversal
     * @return \Ews\StructType\EwsFindFolderType
     */
    public function setTraversal($traversal = null)
    {
        if (!\Ews\EnumType\EwsFolderQueryTraversalType::valueIsValid($traversal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $traversal, implode(', ', \Ews\EnumType\EwsFolderQueryTraversalType::getValidValues())), __LINE__);
        }
        $this->Traversal = $traversal;
        return $this;
    }
    /**
     * Get FolderShape value
     * @return \Ews\StructType\EwsFolderResponseShapeType|null
     */
    public function getFolderShape()
    {
        return $this->FolderShape;
    }
    /**
     * Set FolderShape value
     * @param \Ews\StructType\EwsFolderResponseShapeType $folderShape
     * @return \Ews\StructType\EwsFindFolderType
     */
    public function setFolderShape(\Ews\StructType\EwsFolderResponseShapeType $folderShape = null)
    {
        $this->FolderShape = $folderShape;
        return $this;
    }
    /**
     * Get IndexedPageFolderView value
     * @return \Ews\StructType\EwsIndexedPageViewType|null
     */
    public function getIndexedPageFolderView()
    {
        return $this->IndexedPageFolderView;
    }
    /**
     * Set IndexedPageFolderView value
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageFolderView
     * @return \Ews\StructType\EwsFindFolderType
     */
    public function setIndexedPageFolderView(\Ews\StructType\EwsIndexedPageViewType $indexedPageFolderView = null)
    {
        $this->IndexedPageFolderView = $indexedPageFolderView;
        return $this;
    }
    /**
     * Get FractionalPageFolderView value
     * @return \Ews\StructType\EwsFractionalPageViewType|null
     */
    public function getFractionalPageFolderView()
    {
        return $this->FractionalPageFolderView;
    }
    /**
     * Set FractionalPageFolderView value
     * @param \Ews\StructType\EwsFractionalPageViewType $fractionalPageFolderView
     * @return \Ews\StructType\EwsFindFolderType
     */
    public function setFractionalPageFolderView(\Ews\StructType\EwsFractionalPageViewType $fractionalPageFolderView = null)
    {
        $this->FractionalPageFolderView = $fractionalPageFolderView;
        return $this;
    }
    /**
     * Get Restriction value
     * @return \Ews\StructType\EwsRestrictionType|null
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @return \Ews\StructType\EwsFindFolderType
     */
    public function setRestriction(\Ews\StructType\EwsRestrictionType $restriction = null)
    {
        $this->Restriction = $restriction;
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
     * @return \Ews\StructType\EwsFindFolderType
     */
    public function setParentFolderIds(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null)
    {
        $this->ParentFolderIds = $parentFolderIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindFolderType
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
