<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemResponseShapeType
     */
    public $ItemShape;
    /**
     * The Conversations
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfConversationRequestsType
     */
    public $Conversations;
    /**
     * The FoldersToIgnore
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public $FoldersToIgnore;
    /**
     * The MaxItemsToReturn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxItemsToReturn;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
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
     * Constructor method for GetConversationItemsType
     * @uses EwsGetConversationItemsType::setItemShape()
     * @uses EwsGetConversationItemsType::setConversations()
     * @uses EwsGetConversationItemsType::setFoldersToIgnore()
     * @uses EwsGetConversationItemsType::setMaxItemsToReturn()
     * @uses EwsGetConversationItemsType::setSortOrder()
     * @uses EwsGetConversationItemsType::setMailboxScope()
     * @param \Ews\StructType\EwsItemResponseShapeType $itemShape
     * @param \Ews\ArrayType\EwsArrayOfConversationRequestsType $conversations
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $foldersToIgnore
     * @param int $maxItemsToReturn
     * @param string $sortOrder
     * @param string $mailboxScope
     */
    public function __construct(\Ews\StructType\EwsItemResponseShapeType $itemShape = null, \Ews\ArrayType\EwsArrayOfConversationRequestsType $conversations = null, \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $foldersToIgnore = null, $maxItemsToReturn = null, $sortOrder = null, $mailboxScope = null)
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
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function getItemShape()
    {
        return $this->ItemShape;
    }
    /**
     * Set ItemShape value
     * @param \Ews\StructType\EwsItemResponseShapeType $itemShape
     * @return \Ews\StructType\EwsGetConversationItemsType
     */
    public function setItemShape(\Ews\StructType\EwsItemResponseShapeType $itemShape = null)
    {
        $this->ItemShape = $itemShape;
        return $this;
    }
    /**
     * Get Conversations value
     * @return \Ews\ArrayType\EwsArrayOfConversationRequestsType
     */
    public function getConversations()
    {
        return $this->Conversations;
    }
    /**
     * Set Conversations value
     * @param \Ews\ArrayType\EwsArrayOfConversationRequestsType $conversations
     * @return \Ews\StructType\EwsGetConversationItemsType
     */
    public function setConversations(\Ews\ArrayType\EwsArrayOfConversationRequestsType $conversations = null)
    {
        $this->Conversations = $conversations;
        return $this;
    }
    /**
     * Get FoldersToIgnore value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getFoldersToIgnore()
    {
        return $this->FoldersToIgnore;
    }
    /**
     * Set FoldersToIgnore value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $foldersToIgnore
     * @return \Ews\StructType\EwsGetConversationItemsType
     */
    public function setFoldersToIgnore(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $foldersToIgnore = null)
    {
        $this->FoldersToIgnore = $foldersToIgnore;
        return $this;
    }
    /**
     * Get MaxItemsToReturn value
     * @return int|null
     */
    public function getMaxItemsToReturn()
    {
        return $this->MaxItemsToReturn;
    }
    /**
     * Set MaxItemsToReturn value
     * @param int $maxItemsToReturn
     * @return \Ews\StructType\EwsGetConversationItemsType
     */
    public function setMaxItemsToReturn($maxItemsToReturn = null)
    {
        // validation for constraint: int
        if (!is_null($maxItemsToReturn) && !is_numeric($maxItemsToReturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxItemsToReturn)), __LINE__);
        }
        $this->MaxItemsToReturn = $maxItemsToReturn;
        return $this;
    }
    /**
     * Get SortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @uses \Ews\EnumType\EwsConversationNodeSortOrder::valueIsValid()
     * @uses \Ews\EnumType\EwsConversationNodeSortOrder::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortOrder
     * @return \Ews\StructType\EwsGetConversationItemsType
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsConversationNodeSortOrder::valueIsValid($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortOrder, implode(', ', \Ews\EnumType\EwsConversationNodeSortOrder::getValidValues())), __LINE__);
        }
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
     * @return \Ews\StructType\EwsGetConversationItemsType
     */
    public function setMailboxScope($mailboxScope = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMailboxSearchLocationType::valueIsValid($mailboxScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mailboxScope, implode(', ', \Ews\EnumType\EwsMailboxSearchLocationType::getValidValues())), __LINE__);
        }
        $this->MailboxScope = $mailboxScope;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetConversationItemsType
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
