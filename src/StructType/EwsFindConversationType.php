<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsTargetFolderIdType
     */
    protected \StructType\EwsTargetFolderIdType $ParentFolderId;
    /**
     * The IndexedPageItemView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | SeekToConditionPageItemView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsIndexedPageViewType|null
     */
    protected ?\StructType\EwsIndexedPageViewType $IndexedPageItemView = null;
    /**
     * The SeekToConditionPageItemView
     * Meta information extracted from the WSDL
     * - choice: IndexedPageItemView | SeekToConditionPageItemView
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsSeekToConditionPageViewType|null
     */
    protected ?\StructType\EwsSeekToConditionPageViewType $SeekToConditionPageItemView = null;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfFieldOrdersType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $SortOrder = null;
    /**
     * The MailboxScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MailboxScope = null;
    /**
     * The QueryString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsQueryStringType|null
     */
    protected ?\StructType\EwsQueryStringType $QueryString = null;
    /**
     * The ConversationShape
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsConversationResponseShapeType|null
     */
    protected ?\StructType\EwsConversationResponseShapeType $ConversationShape = null;
    /**
     * The Traversal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Traversal = null;
    /**
     * The ViewFilter
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ViewFilter = null;
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
     * @param \StructType\EwsTargetFolderIdType $parentFolderId
     * @param \StructType\EwsIndexedPageViewType $indexedPageItemView
     * @param \StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView
     * @param \ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder
     * @param string $mailboxScope
     * @param \StructType\EwsQueryStringType $queryString
     * @param \StructType\EwsConversationResponseShapeType $conversationShape
     * @param string $traversal
     * @param string $viewFilter
     */
    public function __construct(\StructType\EwsTargetFolderIdType $parentFolderId, ?\StructType\EwsIndexedPageViewType $indexedPageItemView = null, ?\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView = null, ?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null, ?string $mailboxScope = null, ?\StructType\EwsQueryStringType $queryString = null, ?\StructType\EwsConversationResponseShapeType $conversationShape = null, ?string $traversal = null, ?string $viewFilter = null)
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
     * @return \StructType\EwsTargetFolderIdType
     */
    public function getParentFolderId(): \StructType\EwsTargetFolderIdType
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \StructType\EwsTargetFolderIdType $parentFolderId
     * @return \StructType\EwsFindConversationType
     */
    public function setParentFolderId(\StructType\EwsTargetFolderIdType $parentFolderId): self
    {
        $this->ParentFolderId = $parentFolderId;
        
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
            'SeekToConditionPageItemView',
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
     * @return \StructType\EwsFindConversationType
     */
    public function setIndexedPageItemView(?\StructType\EwsIndexedPageViewType $indexedPageItemView = null): self
    {
        // validation for constraint: choice(IndexedPageItemView, SeekToConditionPageItemView)
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
     * @return \StructType\EwsFindConversationType
     */
    public function setSeekToConditionPageItemView(?\StructType\EwsSeekToConditionPageViewType $seekToConditionPageItemView = null): self
    {
        // validation for constraint: choice(IndexedPageItemView, SeekToConditionPageItemView)
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
     * @return \StructType\EwsFindConversationType
     */
    public function setSortOrder(?\ArrayType\EwsNonEmptyArrayOfFieldOrdersType $sortOrder = null): self
    {
        $this->SortOrder = $sortOrder;
        
        return $this;
    }
    /**
     * Get MailboxScope value
     * @return string|null
     */
    public function getMailboxScope(): ?string
    {
        return $this->MailboxScope;
    }
    /**
     * Set MailboxScope value
     * @uses \EnumType\EwsMailboxSearchLocationType::valueIsValid()
     * @uses \EnumType\EwsMailboxSearchLocationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mailboxScope
     * @return \StructType\EwsFindConversationType
     */
    public function setMailboxScope(?string $mailboxScope = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMailboxSearchLocationType::valueIsValid($mailboxScope)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMailboxSearchLocationType', is_array($mailboxScope) ? implode(', ', $mailboxScope) : var_export($mailboxScope, true), implode(', ', \EnumType\EwsMailboxSearchLocationType::getValidValues())), __LINE__);
        }
        $this->MailboxScope = $mailboxScope;
        
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
     * @return \StructType\EwsFindConversationType
     */
    public function setQueryString(?\StructType\EwsQueryStringType $queryString = null): self
    {
        $this->QueryString = $queryString;
        
        return $this;
    }
    /**
     * Get ConversationShape value
     * @return \StructType\EwsConversationResponseShapeType|null
     */
    public function getConversationShape(): ?\StructType\EwsConversationResponseShapeType
    {
        return $this->ConversationShape;
    }
    /**
     * Set ConversationShape value
     * @param \StructType\EwsConversationResponseShapeType $conversationShape
     * @return \StructType\EwsFindConversationType
     */
    public function setConversationShape(?\StructType\EwsConversationResponseShapeType $conversationShape = null): self
    {
        $this->ConversationShape = $conversationShape;
        
        return $this;
    }
    /**
     * Get Traversal value
     * @return string|null
     */
    public function getTraversal(): ?string
    {
        return $this->Traversal;
    }
    /**
     * Set Traversal value
     * @uses \EnumType\EwsConversationQueryTraversalType::valueIsValid()
     * @uses \EnumType\EwsConversationQueryTraversalType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $traversal
     * @return \StructType\EwsFindConversationType
     */
    public function setTraversal(?string $traversal = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsConversationQueryTraversalType::valueIsValid($traversal)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsConversationQueryTraversalType', is_array($traversal) ? implode(', ', $traversal) : var_export($traversal, true), implode(', ', \EnumType\EwsConversationQueryTraversalType::getValidValues())), __LINE__);
        }
        $this->Traversal = $traversal;
        
        return $this;
    }
    /**
     * Get ViewFilter value
     * @return string|null
     */
    public function getViewFilter(): ?string
    {
        return $this->ViewFilter;
    }
    /**
     * Set ViewFilter value
     * @uses \EnumType\EwsViewFilterType::valueIsValid()
     * @uses \EnumType\EwsViewFilterType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $viewFilter
     * @return \StructType\EwsFindConversationType
     */
    public function setViewFilter(?string $viewFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsViewFilterType::valueIsValid($viewFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsViewFilterType', is_array($viewFilter) ? implode(', ', $viewFilter) : var_export($viewFilter, true), implode(', ', \EnumType\EwsViewFilterType::getValidValues())), __LINE__);
        }
        $this->ViewFilter = $viewFilter;
        
        return $this;
    }
}
