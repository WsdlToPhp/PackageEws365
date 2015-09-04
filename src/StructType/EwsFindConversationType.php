<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindConversationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFindConversationType extends EwsBaseRequestType
{
    /**
     * The ParentFolderId
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ParentFolderId;
    /**
     * The IndexedPageItemView
     * @var \Ews\StructType\EwsIndexedPageViewType
     */
    public $IndexedPageItemView;
    /**
     * The SeekToConditionPageItemView
     * @var \Ews\StructType\EwsSeekToConditionPageViewType
     */
    public $SeekToConditionPageItemView;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
     */
    public $SortOrder;
    /**
     * The MailboxScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MailboxScope;
    /**
     * The QueryString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsQueryStringType
     */
    public $QueryString;
    /**
     * The ConversationShape
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsConversationResponseShapeType
     */
    public $ConversationShape;
    /**
     * The Traversal
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Types of sub-tree traversal for conversations
     * @var string
     */
    public $Traversal;
    /**
     * The ViewFilter
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Types of view filters for finding items/conversations
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
     * @param \Ews\StructType\EwsSeekToConditionPageViewType
     * $seekToConditionPageItemView
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
        return $this->IndexedPageItemView;
    }
    /**
     * Set IndexedPageItemView value
     * @param \Ews\StructType\EwsIndexedPageViewType $indexedPageItemView
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setIndexedPageItemView(\Ews\StructType\EwsIndexedPageViewType $indexedPageItemView = null)
    {
        $this->IndexedPageItemView = $indexedPageItemView;
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
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setSeekToConditionPageItemView(\Ews\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView = null)
    {
        $this->SeekToConditionPageItemView = $seekToConditionPageItemView;
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
     * @param string $mailboxScope
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setMailboxScope($mailboxScope = null)
    {
        if (!\Ews\EnumType\EwsMailboxSearchLocationType::valueIsValid($mailboxScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mailboxScope, implode(', ', \Ews\EnumType\EwsMailboxSearchLocationType::getValidValues())), __LINE__);
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
     * @param string $traversal
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setTraversal($traversal = null)
    {
        if (!\Ews\EnumType\EwsConversationQueryTraversalType::valueIsValid($traversal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $traversal, implode(', ', \Ews\EnumType\EwsConversationQueryTraversalType::getValidValues())), __LINE__);
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
     * @param string $viewFilter
     * @return \Ews\StructType\EwsFindConversationType
     */
    public function setViewFilter($viewFilter = null)
    {
        if (!\Ews\EnumType\EwsViewFilterType::valueIsValid($viewFilter)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $viewFilter, implode(', ', \Ews\EnumType\EwsViewFilterType::getValidValues())), __LINE__);
        }
        $this->ViewFilter = $viewFilter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindConversationType
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
