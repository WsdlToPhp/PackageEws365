<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $Traversal;
    /**
     * The ItemShape
     * @var \Ews\StructType\EwsItemResponseShapeType
     */
    public $ItemShape;
    /**
     * The IndexedPageItemView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | FractionalPageItemView | SeekToConditionPageItemView | CalendarView | ContactsView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsIndexedPageViewType
     */
    public $IndexedPageItemView;
    /**
     * The FractionalPageItemView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | FractionalPageItemView | SeekToConditionPageItemView | CalendarView | ContactsView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsFractionalPageViewType
     */
    public $FractionalPageItemView;
    /**
     * The SeekToConditionPageItemView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | FractionalPageItemView | SeekToConditionPageItemView | CalendarView | ContactsView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsSeekToConditionPageViewType
     */
    public $SeekToConditionPageItemView;
    /**
     * The CalendarView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | FractionalPageItemView | SeekToConditionPageItemView | CalendarView | ContactsView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsCalendarViewType
     */
    public $CalendarView;
    /**
     * The ContactsView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | FractionalPageItemView | SeekToConditionPageItemView | CalendarView | ContactsView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsContactsViewType
     */
    public $ContactsView;
    /**
     * The GroupBy
     * Meta information extracted from the WSDL
     * - choice: GroupBy | DistinguishedGroupBy
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsGroupByType
     */
    public $GroupBy;
    /**
     * The DistinguishedGroupBy
     * Meta information extracted from the WSDL
     * - choice: GroupBy | DistinguishedGroupBy
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsDistinguishedGroupByType
     */
    public $DistinguishedGroupBy;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $Restriction;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
     */
    public $SortOrder;
    /**
     * The ParentFolderIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;
    /**
     * The QueryString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsQueryStringType
     */
    public $QueryString;
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
     * @param \Ews\StructType\EwsItemResponseShapeType $itemShape
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageItemView
     * @param \Ews\StructType\EwsFractionalPageViewType $fractionalPageItemView
     * @param \Ews\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView
     * @param \Ews\StructType\EwsCalendarViewType $calendarView
     * @param \Ews\StructType\EwsContactsViewType $contactsView
     * @param \Ews\StructType\EwsGroupByType $groupBy
     * @param \Ews\StructType\EwsDistinguishedGroupByType $distinguishedGroupBy
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds
     * @param \Ews\StructType\EwsQueryStringType $queryString
     */
    public function __construct($traversal = null, \Ews\StructType\EwsItemResponseShapeType $itemShape = null, \Ews\StructType\EwsIndexedPageViewType $indexedPageItemView = null, \Ews\StructType\EwsFractionalPageViewType $fractionalPageItemView = null, \Ews\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView = null, \Ews\StructType\EwsCalendarViewType $calendarView = null, \Ews\StructType\EwsContactsViewType $contactsView = null, \Ews\StructType\EwsGroupByType $groupBy = null, \Ews\StructType\EwsDistinguishedGroupByType $distinguishedGroupBy = null, \Ews\StructType\EwsRestrictionType $restriction = null, \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null, \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null, \Ews\StructType\EwsQueryStringType $queryString = null)
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
    public function getTraversal()
    {
        return $this->Traversal;
    }
    /**
     * Set Traversal value
     * @uses \Ews\EnumType\EwsItemQueryTraversalType::valueIsValid()
     * @uses \Ews\EnumType\EwsItemQueryTraversalType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $traversal
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setTraversal($traversal = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsItemQueryTraversalType::valueIsValid($traversal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsItemQueryTraversalType', is_array($traversal) ? implode(', ', $traversal) : var_export($traversal, true), implode(', ', \Ews\EnumType\EwsItemQueryTraversalType::getValidValues())), __LINE__);
        }
        $this->Traversal = $traversal;
        return $this;
    }
    /**
     * Get ItemShape value
     * @return \Ews\StructType\EwsItemResponseShapeType|null
     */
    public function getItemShape()
    {
        return $this->ItemShape;
    }
    /**
     * Set ItemShape value
     * @param \Ews\StructType\EwsItemResponseShapeType $itemShape
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setItemShape(\Ews\StructType\EwsItemResponseShapeType $itemShape = null)
    {
        $this->ItemShape = $itemShape;
        return $this;
    }
    /**
     * Get IndexedPageItemView value
     * @return \Ews\StructType\EwsIndexedPageViewType|null
     */
    public function getIndexedPageItemView()
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
    public function validateIndexedPageItemViewForChoiceConstraintsFromSetIndexedPageItemView($value)
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
                    throw new \InvalidArgumentException(sprintf('The property IndexedPageItemView can\'t be set as the property %s is already set. Only one property must be set among these properties: IndexedPageItemView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set IndexedPageItemView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageItemView
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setIndexedPageItemView(\Ews\StructType\EwsIndexedPageViewType $indexedPageItemView = null)
    {
        // validation for constraint: choice(IndexedPageItemView, FractionalPageItemView, SeekToConditionPageItemView, CalendarView, ContactsView)
        if ('' !== ($indexedPageItemViewChoiceErrorMessage = self::validateIndexedPageItemViewForChoiceConstraintsFromSetIndexedPageItemView($indexedPageItemView))) {
            throw new \InvalidArgumentException($indexedPageItemViewChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsFractionalPageViewType|null
     */
    public function getFractionalPageItemView()
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
    public function validateFractionalPageItemViewForChoiceConstraintsFromSetFractionalPageItemView($value)
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
                    throw new \InvalidArgumentException(sprintf('The property FractionalPageItemView can\'t be set as the property %s is already set. Only one property must be set among these properties: FractionalPageItemView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set FractionalPageItemView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFractionalPageViewType $fractionalPageItemView
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setFractionalPageItemView(\Ews\StructType\EwsFractionalPageViewType $fractionalPageItemView = null)
    {
        // validation for constraint: choice(IndexedPageItemView, FractionalPageItemView, SeekToConditionPageItemView, CalendarView, ContactsView)
        if ('' !== ($fractionalPageItemViewChoiceErrorMessage = self::validateFractionalPageItemViewForChoiceConstraintsFromSetFractionalPageItemView($fractionalPageItemView))) {
            throw new \InvalidArgumentException($fractionalPageItemViewChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsSeekToConditionPageViewType|null
     */
    public function getSeekToConditionPageItemView()
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
    public function validateSeekToConditionPageItemViewForChoiceConstraintsFromSetSeekToConditionPageItemView($value)
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
                    throw new \InvalidArgumentException(sprintf('The property SeekToConditionPageItemView can\'t be set as the property %s is already set. Only one property must be set among these properties: SeekToConditionPageItemView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SeekToConditionPageItemView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setSeekToConditionPageItemView(\Ews\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView = null)
    {
        // validation for constraint: choice(IndexedPageItemView, FractionalPageItemView, SeekToConditionPageItemView, CalendarView, ContactsView)
        if ('' !== ($seekToConditionPageItemViewChoiceErrorMessage = self::validateSeekToConditionPageItemViewForChoiceConstraintsFromSetSeekToConditionPageItemView($seekToConditionPageItemView))) {
            throw new \InvalidArgumentException($seekToConditionPageItemViewChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsCalendarViewType|null
     */
    public function getCalendarView()
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
    public function validateCalendarViewForChoiceConstraintsFromSetCalendarView($value)
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
                    throw new \InvalidArgumentException(sprintf('The property CalendarView can\'t be set as the property %s is already set. Only one property must be set among these properties: CalendarView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CalendarView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCalendarViewType $calendarView
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setCalendarView(\Ews\StructType\EwsCalendarViewType $calendarView = null)
    {
        // validation for constraint: choice(IndexedPageItemView, FractionalPageItemView, SeekToConditionPageItemView, CalendarView, ContactsView)
        if ('' !== ($calendarViewChoiceErrorMessage = self::validateCalendarViewForChoiceConstraintsFromSetCalendarView($calendarView))) {
            throw new \InvalidArgumentException($calendarViewChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsContactsViewType|null
     */
    public function getContactsView()
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
    public function validateContactsViewForChoiceConstraintsFromSetContactsView($value)
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
                    throw new \InvalidArgumentException(sprintf('The property ContactsView can\'t be set as the property %s is already set. Only one property must be set among these properties: ContactsView, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ContactsView value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContactsViewType $contactsView
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setContactsView(\Ews\StructType\EwsContactsViewType $contactsView = null)
    {
        // validation for constraint: choice(IndexedPageItemView, FractionalPageItemView, SeekToConditionPageItemView, CalendarView, ContactsView)
        if ('' !== ($contactsViewChoiceErrorMessage = self::validateContactsViewForChoiceConstraintsFromSetContactsView($contactsView))) {
            throw new \InvalidArgumentException($contactsViewChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsGroupByType|null
     */
    public function getGroupBy()
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
    public function validateGroupByForChoiceConstraintsFromSetGroupBy($value)
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
                    throw new \InvalidArgumentException(sprintf('The property GroupBy can\'t be set as the property %s is already set. Only one property must be set among these properties: GroupBy, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GroupBy value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGroupByType $groupBy
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setGroupBy(\Ews\StructType\EwsGroupByType $groupBy = null)
    {
        // validation for constraint: choice(GroupBy, DistinguishedGroupBy)
        if ('' !== ($groupByChoiceErrorMessage = self::validateGroupByForChoiceConstraintsFromSetGroupBy($groupBy))) {
            throw new \InvalidArgumentException($groupByChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsDistinguishedGroupByType|null
     */
    public function getDistinguishedGroupBy()
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
    public function validateDistinguishedGroupByForChoiceConstraintsFromSetDistinguishedGroupBy($value)
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
                    throw new \InvalidArgumentException(sprintf('The property DistinguishedGroupBy can\'t be set as the property %s is already set. Only one property must be set among these properties: DistinguishedGroupBy, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DistinguishedGroupBy value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDistinguishedGroupByType $distinguishedGroupBy
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setDistinguishedGroupBy(\Ews\StructType\EwsDistinguishedGroupByType $distinguishedGroupBy = null)
    {
        // validation for constraint: choice(GroupBy, DistinguishedGroupBy)
        if ('' !== ($distinguishedGroupByChoiceErrorMessage = self::validateDistinguishedGroupByForChoiceConstraintsFromSetDistinguishedGroupBy($distinguishedGroupBy))) {
            throw new \InvalidArgumentException($distinguishedGroupByChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsRestrictionType|null
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setRestriction(\Ews\StructType\EwsRestrictionType $restriction = null)
    {
        $this->Restriction = $restriction;
        return $this;
    }
    /**
     * Get SortOrder value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType|null
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setSortOrder(\Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null)
    {
        $this->SortOrder = $sortOrder;
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
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setParentFolderIds(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $parentFolderIds = null)
    {
        $this->ParentFolderIds = $parentFolderIds;
        return $this;
    }
    /**
     * Get QueryString value
     * @return \Ews\StructType\EwsQueryStringType|null
     */
    public function getQueryString()
    {
        return $this->QueryString;
    }
    /**
     * Set QueryString value
     * @param \Ews\StructType\EwsQueryStringType $queryString
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setQueryString(\Ews\StructType\EwsQueryStringType $queryString = null)
    {
        $this->QueryString = $queryString;
        return $this;
    }
}
