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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchSessionId;
    /**
     * The SearchRequestId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SearchRequestId;
    /**
     * The ResultType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $ResultType;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfItemsType
     */
    public $Items;
    /**
     * The Conversations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfConversationsType
     */
    public $Conversations;
    /**
     * The CalendarItems
     * Meta information extracted from the WSDL
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
     * @param int $searchRequestId
     * @param string[] $resultType
     * @param \Ews\ArrayType\EwsArrayOfItemsType $items
     * @param \Ews\ArrayType\EwsArrayOfConversationsType $conversations
     * @param \Ews\ArrayType\EwsArrayOfCalendarItemsType $calendarItems
     */
    public function __construct($searchSessionId = null, $searchRequestId = null, array $resultType = array(), \Ews\ArrayType\EwsArrayOfItemsType $items = null, \Ews\ArrayType\EwsArrayOfConversationsType $conversations = null, \Ews\ArrayType\EwsArrayOfCalendarItemsType $calendarItems = null)
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
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchSessionId, true), gettype($searchSessionId)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        return $this;
    }
    /**
     * Get SearchRequestId value
     * @return int
     */
    public function getSearchRequestId()
    {
        return $this->SearchRequestId;
    }
    /**
     * Set SearchRequestId value
     * @param int $searchRequestId
     * @return \Ews\StructType\EwsInstantSearchPayloadType
     */
    public function setSearchRequestId($searchRequestId = null)
    {
        // validation for constraint: int
        if (!is_null($searchRequestId) && !(is_int($searchRequestId) || ctype_digit($searchRequestId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searchRequestId, true), gettype($searchRequestId)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setResultType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResultType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultTypeForArrayConstraintsFromSetResultType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $instantSearchPayloadTypeResultTypeItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsInstantSearchResultType::valueIsValid($instantSearchPayloadTypeResultTypeItem)) {
                $invalidValues[] = is_object($instantSearchPayloadTypeResultTypeItem) ? get_class($instantSearchPayloadTypeResultTypeItem) : sprintf('%s(%s)', gettype($instantSearchPayloadTypeResultTypeItem), var_export($instantSearchPayloadTypeResultTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsInstantSearchResultType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsInstantSearchResultType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ResultType value
     * @uses \Ews\EnumType\EwsInstantSearchResultType::valueIsValid()
     * @uses \Ews\EnumType\EwsInstantSearchResultType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $resultType
     * @return \Ews\StructType\EwsInstantSearchPayloadType
     */
    public function setResultType(array $resultType = array())
    {
        // validation for constraint: list
        if ('' !== ($resultTypeArrayErrorMessage = self::validateResultTypeForArrayConstraintsFromSetResultType($resultType))) {
            throw new \InvalidArgumentException($resultTypeArrayErrorMessage, __LINE__);
        }
        $this->ResultType = is_array($resultType) ? implode(' ', $resultType) : null;
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
}
