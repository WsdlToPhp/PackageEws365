<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindConversationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindConversationType extends EwsBaseRequestType
{
    /**
     * The ParentFolderId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ParentFolderId;
    /**
     * The IndexedPageItemView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | SeekToConditionPageItemView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsIndexedPageViewType
     */
    public $IndexedPageItemView;
    /**
     * The SeekToConditionPageItemView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | SeekToConditionPageItemView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsSeekToConditionPageViewType
     */
    public $SeekToConditionPageItemView;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
     */
    public $SortOrder;
    /**
     * The MailboxScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MailboxScope;
    /**
     * The QueryString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsQueryStringType
     */
    public $QueryString;
    /**
     * The ConversationShape
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsConversationResponseShapeType
     */
    public $ConversationShape;
    /**
     * The Traversal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Traversal;
    /**
     * The ViewFilter
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ViewFilter;
    /**
     * Constructor method for FindConversationType
     * @uses EwsFindConversationType::setParentFolderId()
     * @uses EwsFindConversationType::setIndexedPageItemView()
     * @uses EwsFindConversationType::setSeekToConditionPageItemView()
     * @uses EwsFindConversationType::setSortOrder()
     * @uses EwsFindConversationType::setMailboxScope()
     * @uses EwsFindConversationType::setQueryString()
     * @uses EwsFindConversationType::setConversationShape()
     * @uses EwsFindConversationType::setTraversal()
     * @uses EwsFindConversationType::setViewFilter()
     * @param \Ews\StructType\EwsTargetFolderIdType $parentFolderId
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageItemView
     * @param \Ews\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @param string $mailboxScope
     * @param \Ews\StructType\EwsQueryStringType $queryString
     * @param \Ews\StructType\EwsConversationResponseShapeType $conversationShape
     * @param string $traversal
     * @param string $viewFilter
     */
    public function __construct(\Ews\StructType\EwsTargetFolderIdType $parentFolderId = null, \Ews\StructType\EwsIndexedPageViewType $indexedPageItemView = null, \Ews\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView = null, \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null, $mailboxScope = null, \Ews\StructType\EwsQueryStringType $queryString = null, \Ews\StructType\EwsConversationResponseShapeType $conversationShape = null, $traversal = null, $viewFilter = null)
    {
        $this
            ->setParentFolderId($parentFolderId)
            ->setIndexedPageItemView($indexedPageItemView)
            ->setSeekToConditionPageItemView($seekToConditionPageItemView)
            ->setSortOrder($sortOrder)
            ->setMailboxScope($mailboxScope)
            ->setQueryString($queryString)
            ->setConversationShape($conversationShape)
            ->setTraversal($traversal)
            ->setViewFilter($viewFilter);
    }
    /**
     * Get ParentFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function getParentFolderId()
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $parentFolderId
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setParentFolderId(\Ews\StructType\EwsTargetFolderIdType $parentFolderId = null)
    {
        $this->ParentFolderId = $parentFolderId;
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
            'SeekToConditionPageItemView',
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
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setIndexedPageItemView(\Ews\StructType\EwsIndexedPageViewType $indexedPageItemView = null)
    {
        // validation for constraint: choice(IndexedPageItemView, SeekToConditionPageItemView)
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
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setSeekToConditionPageItemView(\Ews\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView = null)
    {
        // validation for constraint: choice(IndexedPageItemView, SeekToConditionPageItemView)
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
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setSortOrder(\Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null)
    {
        $this->SortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get MailboxScope value
     * @return string|null
     */
    public function getMailboxScope()
    {
        return $this->MailboxScope;
    }
    /**
     * Set MailboxScope value
     * @uses \Ews\EnumType\EwsMailboxSearchLocationType::valueIsValid()
     * @uses \Ews\EnumType\EwsMailboxSearchLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mailboxScope
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setMailboxScope($mailboxScope = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMailboxSearchLocationType::valueIsValid($mailboxScope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMailboxSearchLocationType', is_array($mailboxScope) ? implode(', ', $mailboxScope) : var_export($mailboxScope, true), implode(', ', \Ews\EnumType\EwsMailboxSearchLocationType::getValidValues())), __LINE__);
        }
        $this->MailboxScope = $mailboxScope;
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
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setQueryString(\Ews\StructType\EwsQueryStringType $queryString = null)
    {
        $this->QueryString = $queryString;
        return $this;
    }
    /**
     * Get ConversationShape value
     * @return \Ews\StructType\EwsConversationResponseShapeType|null
     */
    public function getConversationShape()
    {
        return $this->ConversationShape;
    }
    /**
     * Set ConversationShape value
     * @param \Ews\StructType\EwsConversationResponseShapeType $conversationShape
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setConversationShape(\Ews\StructType\EwsConversationResponseShapeType $conversationShape = null)
    {
        $this->ConversationShape = $conversationShape;
        return $this;
    }
    /**
     * Get Traversal value
     * @return string|null
     */
    public function getTraversal()
    {
        return $this->Traversal;
    }
    /**
     * Set Traversal value
     * @uses \Ews\EnumType\EwsConversationQueryTraversalType::valueIsValid()
     * @uses \Ews\EnumType\EwsConversationQueryTraversalType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $traversal
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setTraversal($traversal = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsConversationQueryTraversalType::valueIsValid($traversal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsConversationQueryTraversalType', is_array($traversal) ? implode(', ', $traversal) : var_export($traversal, true), implode(', ', \Ews\EnumType\EwsConversationQueryTraversalType::getValidValues())), __LINE__);
        }
        $this->Traversal = $traversal;
        return $this;
    }
    /**
     * Get ViewFilter value
     * @return string|null
     */
    public function getViewFilter()
    {
        return $this->ViewFilter;
    }
    /**
     * Set ViewFilter value
     * @uses \Ews\EnumType\EwsViewFilterType::valueIsValid()
     * @uses \Ews\EnumType\EwsViewFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $viewFilter
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setViewFilter($viewFilter = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsViewFilterType::valueIsValid($viewFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsViewFilterType', is_array($viewFilter) ? implode(', ', $viewFilter) : var_export($viewFilter, true), implode(', ', \Ews\EnumType\EwsViewFilterType::getValidValues())), __LINE__);
        }
        $this->ViewFilter = $viewFilter;
        return $this;
    }
}
