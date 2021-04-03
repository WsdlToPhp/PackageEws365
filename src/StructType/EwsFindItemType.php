<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindItemType extends EwsBaseRequestType
{
    /**
     * The Traversal
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Traversal;
    /**
     * The ItemShape
     * @var \StructType\EwsItemResponseShapeType|null
     */
    protected ?\StructType\EwsItemResponseShapeType $ItemShape = null;
    /**
     * The IndexedPageItemView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | FractionalPageItemView | SeekToConditionPageItemView | CalendarView | ContactsView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsIndexedPageViewType|null
     */
    protected ?\StructType\EwsIndexedPageViewType $IndexedPageItemView = null;
    /**
     * The FractionalPageItemView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | FractionalPageItemView | SeekToConditionPageItemView | CalendarView | ContactsView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsFractionalPageViewType|null
     */
    protected ?\StructType\EwsFractionalPageViewType $FractionalPageItemView = null;
    /**
     * The SeekToConditionPageItemView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | FractionalPageItemView | SeekToConditionPageItemView | CalendarView | ContactsView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsSeekToConditionPageViewType|null
     */
    protected ?\StructType\EwsSeekToConditionPageViewType $SeekToConditionPageItemView = null;
    /**
     * The CalendarView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | FractionalPageItemView | SeekToConditionPageItemView | CalendarView | ContactsView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsCalendarViewType|null
     */
    protected ?\StructType\EwsCalendarViewType $CalendarView = null;
    /**
     * The ContactsView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | FractionalPageItemView | SeekToConditionPageItemView | CalendarView | ContactsView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsContactsViewType|null
     */
    protected ?\StructType\EwsContactsViewType $ContactsView = null;
    /**
     * The GroupBy
     * Meta information extracted from the WSDL
     * - choice: GroupBy | DistinguishedGroupBy
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsGroupByType|null
     */
    protected ?\StructType\EwsGroupByType $GroupBy = null;
    /**
     * The DistinguishedGroupBy
     * Meta information extracted from the WSDL
     * - choice: GroupBy | DistinguishedGroupBy
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsDistinguishedGroupByType|null
     */
    protected ?\StructType\EwsDistinguishedGroupByType $DistinguishedGroupBy = null;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsRestrictionType|null
     */
    protected ?\StructType\EwsRestrictionType $Restriction = null;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfFieldOrdersType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $SortOrder = null;
    /**
     * The ParentFolderIds
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $ParentFolderIds = null;
    /**
     * The QueryString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsQueryStringType|null
     */
    protected ?\StructType\EwsQueryStringType $QueryString = null;
    /**
     * Constructor method for FindItemType
     * @uses EwsFindItemType::setTraversal()
     * @uses EwsFindItemType::setItemShape()
     * @uses EwsFindItemType::setIndexedPageItemView()
     * @uses EwsFindItemType::setFractionalPageItemView()
     * @uses EwsFindItemType::setSeekToConditionPageItemView()
     * @uses EwsFindItemType::setCalendarView()
     * @uses EwsFindItemType::setContactsView()
     * @uses EwsFindItemType::setGroupBy()
     * @uses EwsFindItemType::setDistinguishedGroupBy()
     * @uses EwsFindItemType::setRestriction()
     * @uses EwsFindItemType::setSortOrder()
     * @uses EwsFindItemType::setParentFolderIds()
     * @uses EwsFindItemType::setQueryString()
     * @param string $traversal
     * @param \StructType\EwsItemResponseShapeType $itemShape
     * @param \StructType\EwsIndexedPageViewType $indexedPageItemView
     * @param \StructType\EwsFractionalPageViewType $fractionalPageItemView
     * @param \StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView
     * @param \StructType\EwsCalendarViewType $calendarView
     * @param \StructType\EwsContactsViewType $contactsView
     * @param \StructType\EwsGroupByType $groupBy
     * @param \StructType\EwsDistinguishedGroupByType $distinguishedGroupBy
     * @param \StructType\EwsRestrictionType $restriction
     * @param \ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds
     * @param \StructType\EwsQueryStringType $queryString
     */
    public function __construct(string $traversal, ?\StructType\EwsItemResponseShapeType $itemShape = null, ?\StructType\EwsIndexedPageViewType $indexedPageItemView = null, ?\StructType\EwsFractionalPageViewType $fractionalPageItemView = null, ?\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView = null, ?\StructType\EwsCalendarViewType $calendarView = null, ?\StructType\EwsContactsViewType $contactsView = null, ?\StructType\EwsGroupByType $groupBy = null, ?\StructType\EwsDistinguishedGroupByType $distinguishedGroupBy = null, ?\StructType\EwsRestrictionType $restriction = null, ?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null, ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null, ?\StructType\EwsQueryStringType $queryString = null)
    {
        $this
            ->setTraversal($traversal)
            ->setItemShape($itemShape)
            ->setIndexedPageItemView($indexedPageItemView)
            ->setFractionalPageItemView($fractionalPageItemView)
            ->setSeekToConditionPageItemView($seekToConditionPageItemView)
            ->setCalendarView($calendarView)
            ->setContactsView($contactsView)
            ->setGroupBy($groupBy)
            ->setDistinguishedGroupBy($distinguishedGroupBy)
            ->setRestriction($restriction)
            ->setSortOrder($sortOrder)
            ->setParentFolderIds($parentFolderIds)
            ->setQueryString($queryString);
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
     * @uses \EnumType\EwsItemQueryTraversalType::valueIsValid()
     * @uses \EnumType\EwsItemQueryTraversalType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $traversal
     * @return \StructType\EwsFindItemType
     */
    public function setTraversal(string $traversal): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsItemQueryTraversalType::valueIsValid($traversal)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsItemQueryTraversalType', is_array($traversal) ? implode(', ', $traversal) : var_export($traversal, true), implode(', ', \EnumType\EwsItemQueryTraversalType::getValidValues())), __LINE__);
        }
        $this->Traversal = $traversal;
        
        return $this;
    }
    /**
     * Get ItemShape value
     * @return \StructType\EwsItemResponseShapeType|null
     */
    public function getItemShape(): ?\StructType\EwsItemResponseShapeType
    {
        return $this->ItemShape;
    }
    /**
     * Set ItemShape value
     * @param \StructType\EwsItemResponseShapeType $itemShape
     * @return \StructType\EwsFindItemType
     */
    public function setItemShape(?\StructType\EwsItemResponseShapeType $itemShape = null): self
    {
        $this->ItemShape = $itemShape;
        
        return $this;
    }
    /**
     * Get IndexedPageItemView value
     * @return \StructType\EwsIndexedPageViewType|null
     */
    public function getIndexedPageItemView(): ?\StructType\EwsIndexedPageViewType
    {
        return isset($this->IndexedPageItemView) ? $this->IndexedPageItemView : null;
    }
    /**
     * This method is responsible for validating the value passed to the setIndexedPageItemView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIndexedPageItemView method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateIndexedPageItemViewForChoiceConstraintsFromSetIndexedPageItemView($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FractionalPageItemView',
            'SeekToConditionPageItemView',
            'CalendarView',
            'ContactsView',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property IndexedPageItemView can\'t be set as the property %s is already set. Only one property must be set among these properties: IndexedPageItemView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set IndexedPageItemView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsIndexedPageViewType $indexedPageItemView
     * @return \StructType\EwsFindItemType
     */
    public function setIndexedPageItemView(?\StructType\EwsIndexedPageViewType $indexedPageItemView = null): self
    {
        // validation for constraint: choice(IndexedPageItemView, FractionalPageItemView, SeekToConditionPageItemView, CalendarView, ContactsView)
        if ('' !== ($indexedPageItemViewChoiceErrorMessage = self::validateIndexedPageItemViewForChoiceConstraintsFromSetIndexedPageItemView($indexedPageItemView))) {
            throw new InvalidArgumentException($indexedPageItemViewChoiceErrorMessage, __LINE__);
        }
        if (is_null($indexedPageItemView) || (is_array($indexedPageItemView) && empty($indexedPageItemView))) {
            unset($this->IndexedPageItemView);
        } else {
            $this->IndexedPageItemView = $indexedPageItemView;
        }
        
        return $this;
    }
    /**
     * Get FractionalPageItemView value
     * @return \StructType\EwsFractionalPageViewType|null
     */
    public function getFractionalPageItemView(): ?\StructType\EwsFractionalPageViewType
    {
        return isset($this->FractionalPageItemView) ? $this->FractionalPageItemView : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFractionalPageItemView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFractionalPageItemView method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFractionalPageItemViewForChoiceConstraintsFromSetFractionalPageItemView($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'IndexedPageItemView',
            'SeekToConditionPageItemView',
            'CalendarView',
            'ContactsView',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FractionalPageItemView can\'t be set as the property %s is already set. Only one property must be set among these properties: FractionalPageItemView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FractionalPageItemView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsFractionalPageViewType $fractionalPageItemView
     * @return \StructType\EwsFindItemType
     */
    public function setFractionalPageItemView(?\StructType\EwsFractionalPageViewType $fractionalPageItemView = null): self
    {
        // validation for constraint: choice(IndexedPageItemView, FractionalPageItemView, SeekToConditionPageItemView, CalendarView, ContactsView)
        if ('' !== ($fractionalPageItemViewChoiceErrorMessage = self::validateFractionalPageItemViewForChoiceConstraintsFromSetFractionalPageItemView($fractionalPageItemView))) {
            throw new InvalidArgumentException($fractionalPageItemViewChoiceErrorMessage, __LINE__);
        }
        if (is_null($fractionalPageItemView) || (is_array($fractionalPageItemView) && empty($fractionalPageItemView))) {
            unset($this->FractionalPageItemView);
        } else {
            $this->FractionalPageItemView = $fractionalPageItemView;
        }
        
        return $this;
    }
    /**
     * Get SeekToConditionPageItemView value
     * @return \StructType\EwsSeekToConditionPageViewType|null
     */
    public function getSeekToConditionPageItemView(): ?\StructType\EwsSeekToConditionPageViewType
    {
        return isset($this->SeekToConditionPageItemView) ? $this->SeekToConditionPageItemView : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSeekToConditionPageItemView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSeekToConditionPageItemView method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSeekToConditionPageItemViewForChoiceConstraintsFromSetSeekToConditionPageItemView($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'IndexedPageItemView',
            'FractionalPageItemView',
            'CalendarView',
            'ContactsView',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SeekToConditionPageItemView can\'t be set as the property %s is already set. Only one property must be set among these properties: SeekToConditionPageItemView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SeekToConditionPageItemView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView
     * @return \StructType\EwsFindItemType
     */
    public function setSeekToConditionPageItemView(?\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView = null): self
    {
        // validation for constraint: choice(IndexedPageItemView, FractionalPageItemView, SeekToConditionPageItemView, CalendarView, ContactsView)
        if ('' !== ($seekToConditionPageItemViewChoiceErrorMessage = self::validateSeekToConditionPageItemViewForChoiceConstraintsFromSetSeekToConditionPageItemView($seekToConditionPageItemView))) {
            throw new InvalidArgumentException($seekToConditionPageItemViewChoiceErrorMessage, __LINE__);
        }
        if (is_null($seekToConditionPageItemView) || (is_array($seekToConditionPageItemView) && empty($seekToConditionPageItemView))) {
            unset($this->SeekToConditionPageItemView);
        } else {
            $this->SeekToConditionPageItemView = $seekToConditionPageItemView;
        }
        
        return $this;
    }
    /**
     * Get CalendarView value
     * @return \StructType\EwsCalendarViewType|null
     */
    public function getCalendarView(): ?\StructType\EwsCalendarViewType
    {
        return isset($this->CalendarView) ? $this->CalendarView : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCalendarView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalendarView method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCalendarViewForChoiceConstraintsFromSetCalendarView($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'IndexedPageItemView',
            'FractionalPageItemView',
            'SeekToConditionPageItemView',
            'ContactsView',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CalendarView can\'t be set as the property %s is already set. Only one property must be set among these properties: CalendarView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CalendarView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsCalendarViewType $calendarView
     * @return \StructType\EwsFindItemType
     */
    public function setCalendarView(?\StructType\EwsCalendarViewType $calendarView = null): self
    {
        // validation for constraint: choice(IndexedPageItemView, FractionalPageItemView, SeekToConditionPageItemView, CalendarView, ContactsView)
        if ('' !== ($calendarViewChoiceErrorMessage = self::validateCalendarViewForChoiceConstraintsFromSetCalendarView($calendarView))) {
            throw new InvalidArgumentException($calendarViewChoiceErrorMessage, __LINE__);
        }
        if (is_null($calendarView) || (is_array($calendarView) && empty($calendarView))) {
            unset($this->CalendarView);
        } else {
            $this->CalendarView = $calendarView;
        }
        
        return $this;
    }
    /**
     * Get ContactsView value
     * @return \StructType\EwsContactsViewType|null
     */
    public function getContactsView(): ?\StructType\EwsContactsViewType
    {
        return isset($this->ContactsView) ? $this->ContactsView : null;
    }
    /**
     * This method is responsible for validating the value passed to the setContactsView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContactsView method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateContactsViewForChoiceConstraintsFromSetContactsView($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'IndexedPageItemView',
            'FractionalPageItemView',
            'SeekToConditionPageItemView',
            'CalendarView',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ContactsView can\'t be set as the property %s is already set. Only one property must be set among these properties: ContactsView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ContactsView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsContactsViewType $contactsView
     * @return \StructType\EwsFindItemType
     */
    public function setContactsView(?\StructType\EwsContactsViewType $contactsView = null): self
    {
        // validation for constraint: choice(IndexedPageItemView, FractionalPageItemView, SeekToConditionPageItemView, CalendarView, ContactsView)
        if ('' !== ($contactsViewChoiceErrorMessage = self::validateContactsViewForChoiceConstraintsFromSetContactsView($contactsView))) {
            throw new InvalidArgumentException($contactsViewChoiceErrorMessage, __LINE__);
        }
        if (is_null($contactsView) || (is_array($contactsView) && empty($contactsView))) {
            unset($this->ContactsView);
        } else {
            $this->ContactsView = $contactsView;
        }
        
        return $this;
    }
    /**
     * Get GroupBy value
     * @return \StructType\EwsGroupByType|null
     */
    public function getGroupBy(): ?\StructType\EwsGroupByType
    {
        return isset($this->GroupBy) ? $this->GroupBy : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGroupBy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupBy method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGroupByForChoiceConstraintsFromSetGroupBy($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DistinguishedGroupBy',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GroupBy can\'t be set as the property %s is already set. Only one property must be set among these properties: GroupBy, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set GroupBy value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsGroupByType $groupBy
     * @return \StructType\EwsFindItemType
     */
    public function setGroupBy(?\StructType\EwsGroupByType $groupBy = null): self
    {
        // validation for constraint: choice(GroupBy, DistinguishedGroupBy)
        if ('' !== ($groupByChoiceErrorMessage = self::validateGroupByForChoiceConstraintsFromSetGroupBy($groupBy))) {
            throw new InvalidArgumentException($groupByChoiceErrorMessage, __LINE__);
        }
        if (is_null($groupBy) || (is_array($groupBy) && empty($groupBy))) {
            unset($this->GroupBy);
        } else {
            $this->GroupBy = $groupBy;
        }
        
        return $this;
    }
    /**
     * Get DistinguishedGroupBy value
     * @return \StructType\EwsDistinguishedGroupByType|null
     */
    public function getDistinguishedGroupBy(): ?\StructType\EwsDistinguishedGroupByType
    {
        return isset($this->DistinguishedGroupBy) ? $this->DistinguishedGroupBy : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDistinguishedGroupBy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDistinguishedGroupBy method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDistinguishedGroupByForChoiceConstraintsFromSetDistinguishedGroupBy($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'GroupBy',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DistinguishedGroupBy can\'t be set as the property %s is already set. Only one property must be set among these properties: DistinguishedGroupBy, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DistinguishedGroupBy value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsDistinguishedGroupByType $distinguishedGroupBy
     * @return \StructType\EwsFindItemType
     */
    public function setDistinguishedGroupBy(?\StructType\EwsDistinguishedGroupByType $distinguishedGroupBy = null): self
    {
        // validation for constraint: choice(GroupBy, DistinguishedGroupBy)
        if ('' !== ($distinguishedGroupByChoiceErrorMessage = self::validateDistinguishedGroupByForChoiceConstraintsFromSetDistinguishedGroupBy($distinguishedGroupBy))) {
            throw new InvalidArgumentException($distinguishedGroupByChoiceErrorMessage, __LINE__);
        }
        if (is_null($distinguishedGroupBy) || (is_array($distinguishedGroupBy) && empty($distinguishedGroupBy))) {
            unset($this->DistinguishedGroupBy);
        } else {
            $this->DistinguishedGroupBy = $distinguishedGroupBy;
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
     * @return \StructType\EwsFindItemType
     */
    public function setRestriction(?\StructType\EwsRestrictionType $restriction = null): self
    {
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Get SortOrder value
     * @return \ArrayType\EwsNonEmptyArrayOfFieldOrdersType|null
     */
    public function getSortOrder(): ?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @param \ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @return \StructType\EwsFindItemType
     */
    public function setSortOrder(?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null): self
    {
        $this->SortOrder = $sortOrder;
        
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
     * @return \StructType\EwsFindItemType
     */
    public function setParentFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null): self
    {
        $this->ParentFolderIds = $parentFolderIds;
        
        return $this;
    }
    /**
     * Get QueryString value
     * @return \StructType\EwsQueryStringType|null
     */
    public function getQueryString(): ?\StructType\EwsQueryStringType
    {
        return $this->QueryString;
    }
    /**
     * Set QueryString value
     * @param \StructType\EwsQueryStringType $queryString
     * @return \StructType\EwsFindItemType
     */
    public function setQueryString(?\StructType\EwsQueryStringType $queryString = null): self
    {
        $this->QueryString = $queryString;
        
        return $this;
    }
}
