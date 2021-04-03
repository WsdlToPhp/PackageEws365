<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $SearchSessionId;
    /**
     * The SearchRequestId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $SearchRequestId;
    /**
     * The ResultType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ResultType;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfItemsType|null
     */
    protected ?\ArrayType\EwsArrayOfItemsType $Items = null;
    /**
     * The Conversations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfConversationsType|null
     */
    protected ?\ArrayType\EwsArrayOfConversationsType $Conversations = null;
    /**
     * The CalendarItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfCalendarItemsType|null
     */
    protected ?\ArrayType\EwsArrayOfCalendarItemsType $CalendarItems = null;
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
     * @param array|string $resultType
     * @param \ArrayType\EwsArrayOfItemsType $items
     * @param \ArrayType\EwsArrayOfConversationsType $conversations
     * @param \ArrayType\EwsArrayOfCalendarItemsType $calendarItems
     */
    public function __construct(string $searchSessionId, int $searchRequestId, $resultType, ?\ArrayType\EwsArrayOfItemsType $items = null, ?\ArrayType\EwsArrayOfConversationsType $conversations = null, ?\ArrayType\EwsArrayOfCalendarItemsType $calendarItems = null)
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
    public function getSearchSessionId(): string
    {
        return $this->SearchSessionId;
    }
    /**
     * Set SearchSessionId value
     * @param string $searchSessionId
     * @return \StructType\EwsInstantSearchPayloadType
     */
    public function setSearchSessionId(string $searchSessionId): self
    {
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchSessionId, true), gettype($searchSessionId)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        
        return $this;
    }
    /**
     * Get SearchRequestId value
     * @return int
     */
    public function getSearchRequestId(): int
    {
        return $this->SearchRequestId;
    }
    /**
     * Set SearchRequestId value
     * @param int $searchRequestId
     * @return \StructType\EwsInstantSearchPayloadType
     */
    public function setSearchRequestId(int $searchRequestId): self
    {
        // validation for constraint: int
        if (!is_null($searchRequestId) && !(is_int($searchRequestId) || ctype_digit($searchRequestId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searchRequestId, true), gettype($searchRequestId)), __LINE__);
        }
        $this->SearchRequestId = $searchRequestId;
        
        return $this;
    }
    /**
     * Get ResultType value
     * @return string
     */
    public function getResultType(): string
    {
        return $this->ResultType;
    }
    /**
     * This method is responsible for validating the values passed to the setResultType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResultType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultTypeForArrayConstraintsFromSetResultType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $instantSearchPayloadTypeResultTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsInstantSearchResultType::valueIsValid($instantSearchPayloadTypeResultTypeItem)) {
                $invalidValues[] = is_object($instantSearchPayloadTypeResultTypeItem) ? get_class($instantSearchPayloadTypeResultTypeItem) : sprintf('%s(%s)', gettype($instantSearchPayloadTypeResultTypeItem), var_export($instantSearchPayloadTypeResultTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsInstantSearchResultType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsInstantSearchResultType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ResultType value
     * @uses \EnumType\EwsInstantSearchResultType::valueIsValid()
     * @uses \EnumType\EwsInstantSearchResultType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $resultType
     * @return \StructType\EwsInstantSearchPayloadType
     */
    public function setResultType($resultType): self
    {
        // validation for constraint: list
        if ('' !== ($resultTypeArrayErrorMessage = self::validateResultTypeForArrayConstraintsFromSetResultType(is_string($resultType) ? explode(' ', $resultType) : $resultType))) {
            throw new InvalidArgumentException($resultTypeArrayErrorMessage, __LINE__);
        }
        $this->ResultType = is_array($resultType) ? implode(' ', $resultType) : $resultType;
        
        return $this;
    }
    /**
     * Get Items value
     * @return \ArrayType\EwsArrayOfItemsType|null
     */
    public function getItems(): ?\ArrayType\EwsArrayOfItemsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \ArrayType\EwsArrayOfItemsType $items
     * @return \StructType\EwsInstantSearchPayloadType
     */
    public function setItems(?\ArrayType\EwsArrayOfItemsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
    /**
     * Get Conversations value
     * @return \ArrayType\EwsArrayOfConversationsType|null
     */
    public function getConversations(): ?\ArrayType\EwsArrayOfConversationsType
    {
        return $this->Conversations;
    }
    /**
     * Set Conversations value
     * @param \ArrayType\EwsArrayOfConversationsType $conversations
     * @return \StructType\EwsInstantSearchPayloadType
     */
    public function setConversations(?\ArrayType\EwsArrayOfConversationsType $conversations = null): self
    {
        $this->Conversations = $conversations;
        
        return $this;
    }
    /**
     * Get CalendarItems value
     * @return \ArrayType\EwsArrayOfCalendarItemsType|null
     */
    public function getCalendarItems(): ?\ArrayType\EwsArrayOfCalendarItemsType
    {
        return $this->CalendarItems;
    }
    /**
     * Set CalendarItems value
     * @param \ArrayType\EwsArrayOfCalendarItemsType $calendarItems
     * @return \StructType\EwsInstantSearchPayloadType
     */
    public function setCalendarItems(?\ArrayType\EwsArrayOfCalendarItemsType $calendarItems = null): self
    {
        $this->CalendarItems = $calendarItems;
        
        return $this;
    }
}
