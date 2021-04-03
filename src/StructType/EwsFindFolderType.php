<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $Traversal;
    /**
     * The FolderShape
     * @var \StructType\EwsFolderResponseShapeType|null
     */
    protected ?\StructType\EwsFolderResponseShapeType $FolderShape = null;
    /**
     * The IndexedPageFolderView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageFolderView | FractionalPageFolderView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsIndexedPageViewType|null
     */
    protected ?\StructType\EwsIndexedPageViewType $IndexedPageFolderView = null;
    /**
     * The FractionalPageFolderView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageFolderView | FractionalPageFolderView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsFractionalPageViewType|null
     */
    protected ?\StructType\EwsFractionalPageViewType $FractionalPageFolderView = null;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsRestrictionType|null
     */
    protected ?\StructType\EwsRestrictionType $Restriction = null;
    /**
     * The ParentFolderIds
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $ParentFolderIds = null;
    /**
     * Constructor method for FindFolderType
     * @uses EwsFindFolderType::setTraversal()
     * @uses EwsFindFolderType::setFolderShape()
     * @uses EwsFindFolderType::setIndexedPageFolderView()
     * @uses EwsFindFolderType::setFractionalPageFolderView()
     * @uses EwsFindFolderType::setRestriction()
     * @uses EwsFindFolderType::setParentFolderIds()
     * @param string $traversal
     * @param \StructType\EwsFolderResponseShapeType $folderShape
     * @param \StructType\EwsIndexedPageViewType $indexedPageFolderView
     * @param \StructType\EwsFractionalPageViewType $fractionalPageFolderView
     * @param \StructType\EwsRestrictionType $restriction
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds
     */
    public function __construct(string $traversal, ?\StructType\EwsFolderResponseShapeType $folderShape = null, ?\StructType\EwsIndexedPageViewType $indexedPageFolderView = null, ?\StructType\EwsFractionalPageViewType $fractionalPageFolderView = null, ?\StructType\EwsRestrictionType $restriction = null, ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null)
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
    public function getTraversal(): string
    {
        return $this->Traversal;
    }
    /**
     * Set Traversal value
     * @uses \EnumType\EwsFolderQueryTraversalType::valueIsValid()
     * @uses \EnumType\EwsFolderQueryTraversalType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $traversal
     * @return \StructType\EwsFindFolderType
     */
    public function setTraversal(string $traversal): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsFolderQueryTraversalType::valueIsValid($traversal)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsFolderQueryTraversalType', is_array($traversal) ? implode(', ', $traversal) : var_export($traversal, true), implode(', ', \EnumType\EwsFolderQueryTraversalType::getValidValues())), __LINE__);
        }
        $this->Traversal = $traversal;
        
        return $this;
    }
    /**
     * Get FolderShape value
     * @return \StructType\EwsFolderResponseShapeType|null
     */
    public function getFolderShape(): ?\StructType\EwsFolderResponseShapeType
    {
        return $this->FolderShape;
    }
    /**
     * Set FolderShape value
     * @param \StructType\EwsFolderResponseShapeType $folderShape
     * @return \StructType\EwsFindFolderType
     */
    public function setFolderShape(?\StructType\EwsFolderResponseShapeType $folderShape = null): self
    {
        $this->FolderShape = $folderShape;
        
        return $this;
    }
    /**
     * Get IndexedPageFolderView value
     * @return \StructType\EwsIndexedPageViewType|null
     */
    public function getIndexedPageFolderView(): ?\StructType\EwsIndexedPageViewType
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
    public function validateIndexedPageFolderViewForChoiceConstraintsFromSetIndexedPageFolderView($value): string
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
                    throw new InvalidArgumentException(sprintf('The property IndexedPageFolderView can\'t be set as the property %s is already set. Only one property must be set among these properties: IndexedPageFolderView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set IndexedPageFolderView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsIndexedPageViewType $indexedPageFolderView
     * @return \StructType\EwsFindFolderType
     */
    public function setIndexedPageFolderView(?\StructType\EwsIndexedPageViewType $indexedPageFolderView = null): self
    {
        // validation for constraint: choice(IndexedPageFolderView, FractionalPageFolderView)
        if ('' !== ($indexedPageFolderViewChoiceErrorMessage = self::validateIndexedPageFolderViewForChoiceConstraintsFromSetIndexedPageFolderView($indexedPageFolderView))) {
            throw new InvalidArgumentException($indexedPageFolderViewChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsFractionalPageViewType|null
     */
    public function getFractionalPageFolderView(): ?\StructType\EwsFractionalPageViewType
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
    public function validateFractionalPageFolderViewForChoiceConstraintsFromSetFractionalPageFolderView($value): string
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
                    throw new InvalidArgumentException(sprintf('The property FractionalPageFolderView can\'t be set as the property %s is already set. Only one property must be set among these properties: FractionalPageFolderView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FractionalPageFolderView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsFractionalPageViewType $fractionalPageFolderView
     * @return \StructType\EwsFindFolderType
     */
    public function setFractionalPageFolderView(?\StructType\EwsFractionalPageViewType $fractionalPageFolderView = null): self
    {
        // validation for constraint: choice(IndexedPageFolderView, FractionalPageFolderView)
        if ('' !== ($fractionalPageFolderViewChoiceErrorMessage = self::validateFractionalPageFolderViewForChoiceConstraintsFromSetFractionalPageFolderView($fractionalPageFolderView))) {
            throw new InvalidArgumentException($fractionalPageFolderViewChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsRestrictionType|null
     */
    public function getRestriction(): ?\StructType\EwsRestrictionType
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \StructType\EwsRestrictionType $restriction
     * @return \StructType\EwsFindFolderType
     */
    public function setRestriction(?\StructType\EwsRestrictionType $restriction = null): self
    {
        $this->Restriction = $restriction;
        
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
     * @return \StructType\EwsFindFolderType
     */
    public function setParentFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null): self
    {
        $this->ParentFolderIds = $parentFolderIds;
        
        return $this;
    }
}
