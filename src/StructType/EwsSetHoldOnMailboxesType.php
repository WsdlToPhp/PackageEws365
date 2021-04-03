<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetHoldOnMailboxesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request type for the SetHoldOnMailboxes web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetHoldOnMailboxesType extends EwsBaseRequestType
{
    /**
     * The ActionType
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $ActionType;
    /**
     * The HoldId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $HoldId;
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $Query;
    /**
     * The Mailboxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Mailboxes = null;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Language = null;
    /**
     * The IncludeNonIndexableItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeNonIndexableItems = null;
    /**
     * The Deduplication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Deduplication = null;
    /**
     * The InPlaceHoldIdentity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InPlaceHoldIdentity = null;
    /**
     * The ItemHoldPeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemHoldPeriod = null;
    /**
     * Constructor method for SetHoldOnMailboxesType
     * @uses EwsSetHoldOnMailboxesType::setActionType()
     * @uses EwsSetHoldOnMailboxesType::setHoldId()
     * @uses EwsSetHoldOnMailboxesType::setQuery()
     * @uses EwsSetHoldOnMailboxesType::setMailboxes()
     * @uses EwsSetHoldOnMailboxesType::setLanguage()
     * @uses EwsSetHoldOnMailboxesType::setIncludeNonIndexableItems()
     * @uses EwsSetHoldOnMailboxesType::setDeduplication()
     * @uses EwsSetHoldOnMailboxesType::setInPlaceHoldIdentity()
     * @uses EwsSetHoldOnMailboxesType::setItemHoldPeriod()
     * @param string $actionType
     * @param string $holdId
     * @param string $query
     * @param \ArrayType\EwsArrayOfStringsType $mailboxes
     * @param string $language
     * @param bool $includeNonIndexableItems
     * @param bool $deduplication
     * @param string $inPlaceHoldIdentity
     * @param string $itemHoldPeriod
     */
    public function __construct(string $actionType, string $holdId, string $query, ?\ArrayType\EwsArrayOfStringsType $mailboxes = null, ?string $language = null, ?bool $includeNonIndexableItems = null, ?bool $deduplication = null, ?string $inPlaceHoldIdentity = null, ?string $itemHoldPeriod = null)
    {
        $this
            ->setActionType($actionType)
            ->setHoldId($holdId)
            ->setQuery($query)
            ->setMailboxes($mailboxes)
            ->setLanguage($language)
            ->setIncludeNonIndexableItems($includeNonIndexableItems)
            ->setDeduplication($deduplication)
            ->setInPlaceHoldIdentity($inPlaceHoldIdentity)
            ->setItemHoldPeriod($itemHoldPeriod);
    }
    /**
     * Get ActionType value
     * @return string
     */
    public function getActionType(): string
    {
        return $this->ActionType;
    }
    /**
     * Set ActionType value
     * @uses \EnumType\EwsHoldActionType::valueIsValid()
     * @uses \EnumType\EwsHoldActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $actionType
     * @return \StructType\EwsSetHoldOnMailboxesType
     */
    public function setActionType(string $actionType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsHoldActionType::valueIsValid($actionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsHoldActionType', is_array($actionType) ? implode(', ', $actionType) : var_export($actionType, true), implode(', ', \EnumType\EwsHoldActionType::getValidValues())), __LINE__);
        }
        $this->ActionType = $actionType;
        
        return $this;
    }
    /**
     * Get HoldId value
     * @return string
     */
    public function getHoldId(): string
    {
        return $this->HoldId;
    }
    /**
     * Set HoldId value
     * @param string $holdId
     * @return \StructType\EwsSetHoldOnMailboxesType
     */
    public function setHoldId(string $holdId): self
    {
        // validation for constraint: string
        if (!is_null($holdId) && !is_string($holdId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holdId, true), gettype($holdId)), __LINE__);
        }
        $this->HoldId = $holdId;
        
        return $this;
    }
    /**
     * Get Query value
     * @return string
     */
    public function getQuery(): string
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \StructType\EwsSetHoldOnMailboxesType
     */
    public function setQuery(string $query): self
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->Query = $query;
        
        return $this;
    }
    /**
     * Get Mailboxes value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getMailboxes(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Mailboxes;
    }
    /**
     * Set Mailboxes value
     * @param \ArrayType\EwsArrayOfStringsType $mailboxes
     * @return \StructType\EwsSetHoldOnMailboxesType
     */
    public function setMailboxes(?\ArrayType\EwsArrayOfStringsType $mailboxes = null): self
    {
        $this->Mailboxes = $mailboxes;
        
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \StructType\EwsSetHoldOnMailboxesType
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->Language = $language;
        
        return $this;
    }
    /**
     * Get IncludeNonIndexableItems value
     * @return bool|null
     */
    public function getIncludeNonIndexableItems(): ?bool
    {
        return $this->IncludeNonIndexableItems;
    }
    /**
     * Set IncludeNonIndexableItems value
     * @param bool $includeNonIndexableItems
     * @return \StructType\EwsSetHoldOnMailboxesType
     */
    public function setIncludeNonIndexableItems(?bool $includeNonIndexableItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeNonIndexableItems) && !is_bool($includeNonIndexableItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNonIndexableItems, true), gettype($includeNonIndexableItems)), __LINE__);
        }
        $this->IncludeNonIndexableItems = $includeNonIndexableItems;
        
        return $this;
    }
    /**
     * Get Deduplication value
     * @return bool|null
     */
    public function getDeduplication(): ?bool
    {
        return $this->Deduplication;
    }
    /**
     * Set Deduplication value
     * @param bool $deduplication
     * @return \StructType\EwsSetHoldOnMailboxesType
     */
    public function setDeduplication(?bool $deduplication = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deduplication) && !is_bool($deduplication)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deduplication, true), gettype($deduplication)), __LINE__);
        }
        $this->Deduplication = $deduplication;
        
        return $this;
    }
    /**
     * Get InPlaceHoldIdentity value
     * @return string|null
     */
    public function getInPlaceHoldIdentity(): ?string
    {
        return $this->InPlaceHoldIdentity;
    }
    /**
     * Set InPlaceHoldIdentity value
     * @param string $inPlaceHoldIdentity
     * @return \StructType\EwsSetHoldOnMailboxesType
     */
    public function setInPlaceHoldIdentity(?string $inPlaceHoldIdentity = null): self
    {
        // validation for constraint: string
        if (!is_null($inPlaceHoldIdentity) && !is_string($inPlaceHoldIdentity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inPlaceHoldIdentity, true), gettype($inPlaceHoldIdentity)), __LINE__);
        }
        $this->InPlaceHoldIdentity = $inPlaceHoldIdentity;
        
        return $this;
    }
    /**
     * Get ItemHoldPeriod value
     * @return string|null
     */
    public function getItemHoldPeriod(): ?string
    {
        return $this->ItemHoldPeriod;
    }
    /**
     * Set ItemHoldPeriod value
     * @param string $itemHoldPeriod
     * @return \StructType\EwsSetHoldOnMailboxesType
     */
    public function setItemHoldPeriod(?string $itemHoldPeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($itemHoldPeriod) && !is_string($itemHoldPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemHoldPeriod, true), gettype($itemHoldPeriod)), __LINE__);
        }
        $this->ItemHoldPeriod = $itemHoldPeriod;
        
        return $this;
    }
}
