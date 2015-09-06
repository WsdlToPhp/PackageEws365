<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InstantSearchPayloadType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInstantSearchPayloadType extends AbstractStructBase
{
    /**
     * The SearchSessionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchSessionId;
    /**
     * The SearchRequestId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $SearchRequestId;
    /**
     * The ResultType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $ResultType;
    /**
     * The Items
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfItemsType
     */
    public $Items;
    /**
     * The Conversations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfConversationsType
     */
    public $Conversations;
    /**
     * The CalendarItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfCalendarItemsType
     */
    public $CalendarItems;
    /**
     * Constructor method for InstantSearchPayloadType
     * @uses EwsInstantSearchPayloadType::setSearchSessionId()
     * @uses EwsInstantSearchPayloadType::setSearchRequestId()
     * @uses EwsInstantSearchPayloadType::setResultType()
     * @uses EwsInstantSearchPayloadType::setItems()
     * @uses EwsInstantSearchPayloadType::setConversations()
     * @uses EwsInstantSearchPayloadType::setCalendarItems()
     * @param string $searchSessionId
     * @param long $searchRequestId
     * @param string[] $resultType
     * @param \Ews\ArrayType\EwsArrayOfItemsType $items
     * @param \Ews\ArrayType\EwsArrayOfConversationsType $conversations
     * @param \Ews\ArrayType\EwsArrayOfCalendarItemsType $calendarItems
     */
    public function __construct($searchSessionId = null, $searchRequestId = null, $resultType = null, \Ews\ArrayType\EwsArrayOfItemsType $items = null, \Ews\ArrayType\EwsArrayOfConversationsType $conversations = null, \Ews\ArrayType\EwsArrayOfCalendarItemsType $calendarItems = null)
    {
        $this
            ->setSearchSessionId($searchSessionId)
            ->setSearchRequestId($searchRequestId)
            ->setResultType($resultType)
            ->setItems($items)
            ->setConversations($conversations)
            ->setCalendarItems($calendarItems);
    }
    /**
     * Get SearchSessionId value
     * @return string
     */
    public function getSearchSessionId()
    {
        return $this->SearchSessionId;
    }
    /**
     * Set SearchSessionId value
     * @param string $searchSessionId
     * @return \Ews\StructType\EwsInstantSearchPayloadType
     */
    public function setSearchSessionId($searchSessionId = null)
    {
        $this->SearchSessionId = $searchSessionId;
        return $this;
    }
    /**
     * Get SearchRequestId value
     * @return long
     */
    public function getSearchRequestId()
    {
        return $this->SearchRequestId;
    }
    /**
     * Set SearchRequestId value
     * @param long $searchRequestId
     * @return \Ews\StructType\EwsInstantSearchPayloadType
     */
    public function setSearchRequestId($searchRequestId = null)
    {
        $this->SearchRequestId = $searchRequestId;
        return $this;
    }
    /**
     * Get ResultType value
     * @return string[]
     */
    public function getResultType()
    {
        return $this->ResultType;
    }
    /**
     * Set ResultType value
     * @uses \Ews\EnumType\EwsInstantSearchResultType::valueIsValid()
     * @uses \Ews\EnumType\EwsInstantSearchResultType::getValidValues()
     * @param string[] $resultType
     * @return \Ews\StructType\EwsInstantSearchPayloadType
     */
    public function setResultType($resultType = null)
    {
        if (!\Ews\EnumType\EwsInstantSearchResultType::valueIsValid($resultType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $resultType, implode(', ', \Ews\EnumType\EwsInstantSearchResultType::getValidValues())), __LINE__);
        }
        $this->ResultType = $resultType;
        return $this;
    }
    /**
     * Get Items value
     * @return \Ews\ArrayType\EwsArrayOfItemsType|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\ArrayType\EwsArrayOfItemsType $items
     * @return \Ews\StructType\EwsInstantSearchPayloadType
     */
    public function setItems(\Ews\ArrayType\EwsArrayOfItemsType $items = null)
    {
        $this->Items = $items;
        return $this;
    }
    /**
     * Get Conversations value
     * @return \Ews\ArrayType\EwsArrayOfConversationsType|null
     */
    public function getConversations()
    {
        return $this->Conversations;
    }
    /**
     * Set Conversations value
     * @param \Ews\ArrayType\EwsArrayOfConversationsType $conversations
     * @return \Ews\StructType\EwsInstantSearchPayloadType
     */
    public function setConversations(\Ews\ArrayType\EwsArrayOfConversationsType $conversations = null)
    {
        $this->Conversations = $conversations;
        return $this;
    }
    /**
     * Get CalendarItems value
     * @return \Ews\ArrayType\EwsArrayOfCalendarItemsType|null
     */
    public function getCalendarItems()
    {
        return $this->CalendarItems;
    }
    /**
     * Set CalendarItems value
     * @param \Ews\ArrayType\EwsArrayOfCalendarItemsType $calendarItems
     * @return \Ews\StructType\EwsInstantSearchPayloadType
     */
    public function setCalendarItems(\Ews\ArrayType\EwsArrayOfCalendarItemsType $calendarItems = null)
    {
        $this->CalendarItems = $calendarItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsInstantSearchPayloadType
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
