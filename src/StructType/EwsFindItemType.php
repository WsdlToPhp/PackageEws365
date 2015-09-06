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
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: Types of sub-tree traversal for deletion and enumeration
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
     * @var \Ews\StructType\EwsIndexedPageViewType
     */
    public $IndexedPageItemView;
    /**
     * The FractionalPageItemView
     * @var \Ews\StructType\EwsFractionalPageViewType
     */
    public $FractionalPageItemView;
    /**
     * The SeekToConditionPageItemView
     * @var \Ews\StructType\EwsSeekToConditionPageViewType
     */
    public $SeekToConditionPageItemView;
    /**
     * The CalendarView
     * @var \Ews\StructType\EwsCalendarViewType
     */
    public $CalendarView;
    /**
     * The ContactsView
     * @var \Ews\StructType\EwsContactsViewType
     */
    public $ContactsView;
    /**
     * The GroupBy
     * Meta informations extracted from the WSDL
     * - documentation: Allows consumers to specify arbitrary groupings for FindItem queries.
     * @var \Ews\StructType\EwsGroupByType
     */
    public $GroupBy;
    /**
     * The DistinguishedGroupBy
     * Meta informations extracted from the WSDL
     * - documentation: Allows consumers to access standard groupings for FindItem queries. This is in contrast to the arbitrary (custom) groupings available via the t:GroupByType
     * @var \Ews\StructType\EwsDistinguishedGroupByType
     */
    public $DistinguishedGroupBy;
    /**
     * The Restriction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: t:SearchExpression
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $Restriction;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
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
     * @param \Ews\StructType\EwsSeekToConditionPageViewType
     * $seekToConditionPageItemView
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
     * @param string $traversal
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setTraversal($traversal = null)
    {
        if (!\Ews\EnumType\EwsItemQueryTraversalType::valueIsValid($traversal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $traversal, implode(', ', \Ews\EnumType\EwsItemQueryTraversalType::getValidValues())), __LINE__);
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
        return $this->IndexedPageItemView;
    }
    /**
     * Set IndexedPageItemView value
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageItemView
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setIndexedPageItemView(\Ews\StructType\EwsIndexedPageViewType $indexedPageItemView = null)
    {
        $this->IndexedPageItemView = $indexedPageItemView;
        return $this;
    }
    /**
     * Get FractionalPageItemView value
     * @return \Ews\StructType\EwsFractionalPageViewType|null
     */
    public function getFractionalPageItemView()
    {
        return $this->FractionalPageItemView;
    }
    /**
     * Set FractionalPageItemView value
     * @param \Ews\StructType\EwsFractionalPageViewType $fractionalPageItemView
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setFractionalPageItemView(\Ews\StructType\EwsFractionalPageViewType $fractionalPageItemView = null)
    {
        $this->FractionalPageItemView = $fractionalPageItemView;
        return $this;
    }
    /**
     * Get SeekToConditionPageItemView value
     * @return \Ews\StructType\EwsSeekToConditionPageViewType|null
     */
    public function getSeekToConditionPageItemView()
    {
        return $this->SeekToConditionPageItemView;
    }
    /**
     * Set SeekToConditionPageItemView value
     * @param \Ews\StructType\EwsSeekToConditionPageViewType
     * $seekToConditionPageItemView
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setSeekToConditionPageItemView(\Ews\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView = null)
    {
        $this->SeekToConditionPageItemView = $seekToConditionPageItemView;
        return $this;
    }
    /**
     * Get CalendarView value
     * @return \Ews\StructType\EwsCalendarViewType|null
     */
    public function getCalendarView()
    {
        return $this->CalendarView;
    }
    /**
     * Set CalendarView value
     * @param \Ews\StructType\EwsCalendarViewType $calendarView
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setCalendarView(\Ews\StructType\EwsCalendarViewType $calendarView = null)
    {
        $this->CalendarView = $calendarView;
        return $this;
    }
    /**
     * Get ContactsView value
     * @return \Ews\StructType\EwsContactsViewType|null
     */
    public function getContactsView()
    {
        return $this->ContactsView;
    }
    /**
     * Set ContactsView value
     * @param \Ews\StructType\EwsContactsViewType $contactsView
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setContactsView(\Ews\StructType\EwsContactsViewType $contactsView = null)
    {
        $this->ContactsView = $contactsView;
        return $this;
    }
    /**
     * Get GroupBy value
     * @return \Ews\StructType\EwsGroupByType|null
     */
    public function getGroupBy()
    {
        return $this->GroupBy;
    }
    /**
     * Set GroupBy value
     * @param \Ews\StructType\EwsGroupByType $groupBy
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setGroupBy(\Ews\StructType\EwsGroupByType $groupBy = null)
    {
        $this->GroupBy = $groupBy;
        return $this;
    }
    /**
     * Get DistinguishedGroupBy value
     * @return \Ews\StructType\EwsDistinguishedGroupByType|null
     */
    public function getDistinguishedGroupBy()
    {
        return $this->DistinguishedGroupBy;
    }
    /**
     * Set DistinguishedGroupBy value
     * @param \Ews\StructType\EwsDistinguishedGroupByType $distinguishedGroupBy
     * @return \Ews\StructType\EwsFindItemType
     */
    public function setDistinguishedGroupBy(\Ews\StructType\EwsDistinguishedGroupByType $distinguishedGroupBy = null)
    {
        $this->DistinguishedGroupBy = $distinguishedGroupBy;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindItemType
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
