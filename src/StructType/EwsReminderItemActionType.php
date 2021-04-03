<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReminderItemActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReminderItemActionType extends AbstractStructBase
{
    /**
     * The ActionType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ActionType;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ItemId;
    /**
     * The NewReminderTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NewReminderTime = null;
    /**
     * Constructor method for ReminderItemActionType
     * @uses EwsReminderItemActionType::setActionType()
     * @uses EwsReminderItemActionType::setItemId()
     * @uses EwsReminderItemActionType::setNewReminderTime()
     * @param string $actionType
     * @param \StructType\EwsItemIdType $itemId
     * @param string $newReminderTime
     */
    public function __construct(string $actionType, \StructType\EwsItemIdType $itemId, ?string $newReminderTime = null)
    {
        $this
            ->setActionType($actionType)
            ->setItemId($itemId)
            ->setNewReminderTime($newReminderTime);
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
     * @uses \EnumType\EwsReminderActionType::valueIsValid()
     * @uses \EnumType\EwsReminderActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $actionType
     * @return \StructType\EwsReminderItemActionType
     */
    public function setActionType(string $actionType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsReminderActionType::valueIsValid($actionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsReminderActionType', is_array($actionType) ? implode(', ', $actionType) : var_export($actionType, true), implode(', ', \EnumType\EwsReminderActionType::getValidValues())), __LINE__);
        }
        $this->ActionType = $actionType;
        
        return $this;
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getItemId(): \StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsReminderItemActionType
     */
    public function setItemId(\StructType\EwsItemIdType $itemId): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get NewReminderTime value
     * @return string|null
     */
    public function getNewReminderTime(): ?string
    {
        return $this->NewReminderTime;
    }
    /**
     * Set NewReminderTime value
     * @param string $newReminderTime
     * @return \StructType\EwsReminderItemActionType
     */
    public function setNewReminderTime(?string $newReminderTime = null): self
    {
        // validation for constraint: string
        if (!is_null($newReminderTime) && !is_string($newReminderTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newReminderTime, true), gettype($newReminderTime)), __LINE__);
        }
        $this->NewReminderTime = $newReminderTime;
        
        return $this;
    }
}
