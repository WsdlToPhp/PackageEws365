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
     * Meta information extracted from the WSDL
     * - use: required
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
     * Meta information extracted from the WSDL
     * - choice: IndexedPageFolderView | FractionalPageFolderView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsIndexedPageViewType
     */
    public $IndexedPageFolderView;
    /**
     * The FractionalPageFolderView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageFolderView | FractionalPageFolderView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsFractionalPageViewType
     */
    public $FractionalPageFolderView;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
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
     * @throws \InvalidArgumentException
     * @param string $traversal
     * @return \Ews\StructType\EwsFindFolderType
     */
    public function setTraversal($traversal = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsFolderQueryTraversalType::valueIsValid($traversal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsFolderQueryTraversalType', is_array($traversal) ? implode(', ', $traversal) : var_export($traversal, true), implode(', ', \Ews\EnumType\EwsFolderQueryTraversalType::getValidValues())), __LINE__);
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
        return isset($this->IndexedPageFolderView) ? $this->IndexedPageFolderView : null;
    }
    /**
     * This method is responsible for validating the value passed to the setIndexedPageFolderView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIndexedPageFolderView method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateIndexedPageFolderViewForChoiceConstraintsFromSetIndexedPageFolderView($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FractionalPageFolderView',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property IndexedPageFolderView can\'t be set as the property %s is already set. Only one property must be set among these properties: IndexedPageFolderView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set IndexedPageFolderView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageFolderView
     * @return \Ews\StructType\EwsFindFolderType
     */
    public function setIndexedPageFolderView(\Ews\StructType\EwsIndexedPageViewType $indexedPageFolderView = null)
    {
        // validation for constraint: choice(IndexedPageFolderView, FractionalPageFolderView)
        if ('' !== ($indexedPageFolderViewChoiceErrorMessage = self::validateIndexedPageFolderViewForChoiceConstraintsFromSetIndexedPageFolderView($indexedPageFolderView))) {
            throw new \InvalidArgumentException($indexedPageFolderViewChoiceErrorMessage, __LINE__);
        }
        if (is_null($indexedPageFolderView) || (is_array($indexedPageFolderView) && empty($indexedPageFolderView))) {
            unset($this->IndexedPageFolderView);
        } else {
            $this->IndexedPageFolderView = $indexedPageFolderView;
        }
        return $this;
    }
    /**
     * Get FractionalPageFolderView value
     * @return \Ews\StructType\EwsFractionalPageViewType|null
     */
    public function getFractionalPageFolderView()
    {
        return isset($this->FractionalPageFolderView) ? $this->FractionalPageFolderView : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFractionalPageFolderView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFractionalPageFolderView method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFractionalPageFolderViewForChoiceConstraintsFromSetFractionalPageFolderView($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'IndexedPageFolderView',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property FractionalPageFolderView can\'t be set as the property %s is already set. Only one property must be set among these properties: FractionalPageFolderView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set FractionalPageFolderView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFractionalPageViewType $fractionalPageFolderView
     * @return \Ews\StructType\EwsFindFolderType
     */
    public function setFractionalPageFolderView(\Ews\StructType\EwsFractionalPageViewType $fractionalPageFolderView = null)
    {
        // validation for constraint: choice(IndexedPageFolderView, FractionalPageFolderView)
        if ('' !== ($fractionalPageFolderViewChoiceErrorMessage = self::validateFractionalPageFolderViewForChoiceConstraintsFromSetFractionalPageFolderView($fractionalPageFolderView))) {
            throw new \InvalidArgumentException($fractionalPageFolderViewChoiceErrorMessage, __LINE__);
        }
        if (is_null($fractionalPageFolderView) || (is_array($fractionalPageFolderView) && empty($fractionalPageFolderView))) {
            unset($this->FractionalPageFolderView);
        } else {
            $this->FractionalPageFolderView = $fractionalPageFolderView;
        }
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
}
