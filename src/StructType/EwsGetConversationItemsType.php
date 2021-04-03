<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConversationItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetConversationItemsType extends EwsBaseRequestType
{
    /**
     * The ItemShape
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemResponseShapeType
     */
    protected \StructType\EwsItemResponseShapeType $ItemShape;
    /**
     * The Conversations
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfConversationRequestsType
     */
    protected \ArrayType\EwsArrayOfConversationRequestsType $Conversations;
    /**
     * The FoldersToIgnore
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $FoldersToIgnore = null;
    /**
     * The MaxItemsToReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxItemsToReturn = null;
    /**
     * The SortOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SortOrder = null;
    /**
     * The MailboxScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MailboxScope = null;
    /**
     * Constructor method for GetConversationItemsType
     * @uses EwsGetConversationItemsType::setItemShape()
     * @uses EwsGetConversationItemsType::setConversations()
     * @uses EwsGetConversationItemsType::setFoldersToIgnore()
     * @uses EwsGetConversationItemsType::setMaxItemsToReturn()
     * @uses EwsGetConversationItemsType::setSortOrder()
     * @uses EwsGetConversationItemsType::setMailboxScope()
     * @param \StructType\EwsItemResponseShapeType $itemShape
     * @param \ArrayType\EwsArrayOfConversationRequestsType $conversations
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $foldersToIgnore
     * @param int $maxItemsToReturn
     * @param string $sortOrder
     * @param string $mailboxScope
     */
    public function __construct(\StructType\EwsItemResponseShapeType $itemShape, \ArrayType\EwsArrayOfConversationRequestsType $conversations, ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $foldersToIgnore = null, ?int $maxItemsToReturn = null, ?string $sortOrder = null, ?string $mailboxScope = null)
    {
        $this
            ->setItemShape($itemShape)
            ->setConversations($conversations)
            ->setFoldersToIgnore($foldersToIgnore)
            ->setMaxItemsToReturn($maxItemsToReturn)
            ->setSortOrder($sortOrder)
            ->setMailboxScope($mailboxScope);
    }
    /**
     * Get ItemShape value
     * @return \StructType\EwsItemResponseShapeType
     */
    public function getItemShape(): \StructType\EwsItemResponseShapeType
    {
        return $this->ItemShape;
    }
    /**
     * Set ItemShape value
     * @param \StructType\EwsItemResponseShapeType $itemShape
     * @return \StructType\EwsGetConversationItemsType
     */
    public function setItemShape(\StructType\EwsItemResponseShapeType $itemShape): self
    {
        $this->ItemShape = $itemShape;
        
        return $this;
    }
    /**
     * Get Conversations value
     * @return \ArrayType\EwsArrayOfConversationRequestsType
     */
    public function getConversations(): \ArrayType\EwsArrayOfConversationRequestsType
    {
        return $this->Conversations;
    }
    /**
     * Set Conversations value
     * @param \ArrayType\EwsArrayOfConversationRequestsType $conversations
     * @return \StructType\EwsGetConversationItemsType
     */
    public function setConversations(\ArrayType\EwsArrayOfConversationRequestsType $conversations): self
    {
        $this->Conversations = $conversations;
        
        return $this;
    }
    /**
     * Get FoldersToIgnore value
     * @return \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getFoldersToIgnore(): ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
    {
        return $this->FoldersToIgnore;
    }
    /**
     * Set FoldersToIgnore value
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $foldersToIgnore
     * @return \StructType\EwsGetConversationItemsType
     */
    public function setFoldersToIgnore(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $foldersToIgnore = null): self
    {
        $this->FoldersToIgnore = $foldersToIgnore;
        
        return $this;
    }
    /**
     * Get MaxItemsToReturn value
     * @return int|null
     */
    public function getMaxItemsToReturn(): ?int
    {
        return $this->MaxItemsToReturn;
    }
    /**
     * Set MaxItemsToReturn value
     * @param int $maxItemsToReturn
     * @return \StructType\EwsGetConversationItemsType
     */
    public function setMaxItemsToReturn(?int $maxItemsToReturn = null): self
    {
        // validation for constraint: int
        if (!is_null($maxItemsToReturn) && !(is_int($maxItemsToReturn) || ctype_digit($maxItemsToReturn))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxItemsToReturn, true), gettype($maxItemsToReturn)), __LINE__);
        }
        $this->MaxItemsToReturn = $maxItemsToReturn;
        
        return $this;
    }
    /**
     * Get SortOrder value
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @uses \EnumType\EwsConversationNodeSortOrder::valueIsValid()
     * @uses \EnumType\EwsConversationNodeSortOrder::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortOrder
     * @return \StructType\EwsGetConversationItemsType
     */
    public function setSortOrder(?string $sortOrder = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsConversationNodeSortOrder::valueIsValid($sortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsConversationNodeSortOrder', is_array($sortOrder) ? implode(', ', $sortOrder) : var_export($sortOrder, true), implode(', ', \EnumType\EwsConversationNodeSortOrder::getValidValues())), __LINE__);
        }
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
     * @return \StructType\EwsGetConversationItemsType
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
}
