<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemChangeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsItemChangeType extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - choice: ItemId | OccurrenceItemId | RecurringMasterItemId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The OccurrenceItemId
     * Meta information extracted from the WSDL
     * - choice: ItemId | OccurrenceItemId | RecurringMasterItemId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsOccurrenceItemIdType
     */
    public $OccurrenceItemId;
    /**
     * The RecurringMasterItemId
     * Meta information extracted from the WSDL
     * - choice: ItemId | OccurrenceItemId | RecurringMasterItemId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsRecurringMasterItemIdType
     */
    public $RecurringMasterItemId;
    /**
     * The Updates
     * @var \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType
     */
    public $Updates;
    /**
     * Constructor method for ItemChangeType
     * @uses EwsItemChangeType::setItemId()
     * @uses EwsItemChangeType::setOccurrenceItemId()
     * @uses EwsItemChangeType::setRecurringMasterItemId()
     * @uses EwsItemChangeType::setUpdates()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param \Ews\StructType\EwsOccurrenceItemIdType $occurrenceItemId
     * @param \Ews\StructType\EwsRecurringMasterItemIdType $recurringMasterItemId
     * @param \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsOccurrenceItemIdType $occurrenceItemId = null, \Ews\StructType\EwsRecurringMasterItemIdType $recurringMasterItemId = null, \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates = null)
    {
        $this
            ->setItemId($itemId)
            ->setOccurrenceItemId($occurrenceItemId)
            ->setRecurringMasterItemId($recurringMasterItemId)
            ->setUpdates($updates);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return isset($this->ItemId) ? $this->ItemId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemIdForChoiceConstraintsFromSetItemId($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'OccurrenceItemId',
            'RecurringMasterItemId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ItemId can\'t be set as the property %s is already set. Only one property must be set among these properties: ItemId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ItemId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsItemChangeType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        // validation for constraint: choice(ItemId, OccurrenceItemId, RecurringMasterItemId)
        if ('' !== ($itemIdChoiceErrorMessage = self::validateItemIdForChoiceConstraintsFromSetItemId($itemId))) {
            throw new \InvalidArgumentException($itemIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($itemId) || (is_array($itemId) && empty($itemId))) {
            unset($this->ItemId);
        } else {
            $this->ItemId = $itemId;
        }
        return $this;
    }
    /**
     * Get OccurrenceItemId value
     * @return \Ews\StructType\EwsOccurrenceItemIdType|null
     */
    public function getOccurrenceItemId()
    {
        return isset($this->OccurrenceItemId) ? $this->OccurrenceItemId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setOccurrenceItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOccurrenceItemId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOccurrenceItemIdForChoiceConstraintsFromSetOccurrenceItemId($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ItemId',
            'RecurringMasterItemId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property OccurrenceItemId can\'t be set as the property %s is already set. Only one property must be set among these properties: OccurrenceItemId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set OccurrenceItemId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsOccurrenceItemIdType $occurrenceItemId
     * @return \Ews\StructType\EwsItemChangeType
     */
    public function setOccurrenceItemId(\Ews\StructType\EwsOccurrenceItemIdType $occurrenceItemId = null)
    {
        // validation for constraint: choice(ItemId, OccurrenceItemId, RecurringMasterItemId)
        if ('' !== ($occurrenceItemIdChoiceErrorMessage = self::validateOccurrenceItemIdForChoiceConstraintsFromSetOccurrenceItemId($occurrenceItemId))) {
            throw new \InvalidArgumentException($occurrenceItemIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($occurrenceItemId) || (is_array($occurrenceItemId) && empty($occurrenceItemId))) {
            unset($this->OccurrenceItemId);
        } else {
            $this->OccurrenceItemId = $occurrenceItemId;
        }
        return $this;
    }
    /**
     * Get RecurringMasterItemId value
     * @return \Ews\StructType\EwsRecurringMasterItemIdType|null
     */
    public function getRecurringMasterItemId()
    {
        return isset($this->RecurringMasterItemId) ? $this->RecurringMasterItemId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRecurringMasterItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecurringMasterItemId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRecurringMasterItemIdForChoiceConstraintsFromSetRecurringMasterItemId($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ItemId',
            'OccurrenceItemId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property RecurringMasterItemId can\'t be set as the property %s is already set. Only one property must be set among these properties: RecurringMasterItemId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set RecurringMasterItemId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRecurringMasterItemIdType $recurringMasterItemId
     * @return \Ews\StructType\EwsItemChangeType
     */
    public function setRecurringMasterItemId(\Ews\StructType\EwsRecurringMasterItemIdType $recurringMasterItemId = null)
    {
        // validation for constraint: choice(ItemId, OccurrenceItemId, RecurringMasterItemId)
        if ('' !== ($recurringMasterItemIdChoiceErrorMessage = self::validateRecurringMasterItemIdForChoiceConstraintsFromSetRecurringMasterItemId($recurringMasterItemId))) {
            throw new \InvalidArgumentException($recurringMasterItemIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($recurringMasterItemId) || (is_array($recurringMasterItemId) && empty($recurringMasterItemId))) {
            unset($this->RecurringMasterItemId);
        } else {
            $this->RecurringMasterItemId = $recurringMasterItemId;
        }
        return $this;
    }
    /**
     * Get Updates value
     * @return \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType|null
     */
    public function getUpdates()
    {
        return $this->Updates;
    }
    /**
     * Set Updates value
     * @param \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates
     * @return \Ews\StructType\EwsItemChangeType
     */
    public function setUpdates(\Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates = null)
    {
        $this->Updates = $updates;
        return $this;
    }
}
