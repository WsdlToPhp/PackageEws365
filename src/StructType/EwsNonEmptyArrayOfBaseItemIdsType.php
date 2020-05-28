<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfBaseItemIdsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfBaseItemIdsType extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - choice: ItemId | OccurrenceItemId | RecurringMasterItemId | RecurringMasterItemIdRanges
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The OccurrenceItemId
     * Meta information extracted from the WSDL
     * - choice: ItemId | OccurrenceItemId | RecurringMasterItemId | RecurringMasterItemIdRanges
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsOccurrenceItemIdType
     */
    public $OccurrenceItemId;
    /**
     * The RecurringMasterItemId
     * Meta information extracted from the WSDL
     * - choice: ItemId | OccurrenceItemId | RecurringMasterItemId | RecurringMasterItemIdRanges
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsRecurringMasterItemIdType
     */
    public $RecurringMasterItemId;
    /**
     * The RecurringMasterItemIdRanges
     * Meta information extracted from the WSDL
     * - choice: ItemId | OccurrenceItemId | RecurringMasterItemId | RecurringMasterItemIdRanges
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsRecurringMasterItemIdRangesType
     */
    public $RecurringMasterItemIdRanges;
    /**
     * Constructor method for NonEmptyArrayOfBaseItemIdsType
     * @uses EwsNonEmptyArrayOfBaseItemIdsType::setItemId()
     * @uses EwsNonEmptyArrayOfBaseItemIdsType::setOccurrenceItemId()
     * @uses EwsNonEmptyArrayOfBaseItemIdsType::setRecurringMasterItemId()
     * @uses EwsNonEmptyArrayOfBaseItemIdsType::setRecurringMasterItemIdRanges()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param \Ews\StructType\EwsOccurrenceItemIdType $occurrenceItemId
     * @param \Ews\StructType\EwsRecurringMasterItemIdType $recurringMasterItemId
     * @param \Ews\StructType\EwsRecurringMasterItemIdRangesType $recurringMasterItemIdRanges
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsOccurrenceItemIdType $occurrenceItemId = null, \Ews\StructType\EwsRecurringMasterItemIdType $recurringMasterItemId = null, \Ews\StructType\EwsRecurringMasterItemIdRangesType $recurringMasterItemIdRanges = null)
    {
        $this
            ->setItemId($itemId)
            ->setOccurrenceItemId($occurrenceItemId)
            ->setRecurringMasterItemId($recurringMasterItemId)
            ->setRecurringMasterItemIdRanges($recurringMasterItemIdRanges);
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
            'RecurringMasterItemIdRanges',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        // validation for constraint: choice(ItemId, OccurrenceItemId, RecurringMasterItemId, RecurringMasterItemIdRanges)
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
            'RecurringMasterItemIdRanges',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public function setOccurrenceItemId(\Ews\StructType\EwsOccurrenceItemIdType $occurrenceItemId = null)
    {
        // validation for constraint: choice(ItemId, OccurrenceItemId, RecurringMasterItemId, RecurringMasterItemIdRanges)
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
            'RecurringMasterItemIdRanges',
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public function setRecurringMasterItemId(\Ews\StructType\EwsRecurringMasterItemIdType $recurringMasterItemId = null)
    {
        // validation for constraint: choice(ItemId, OccurrenceItemId, RecurringMasterItemId, RecurringMasterItemIdRanges)
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
     * Get RecurringMasterItemIdRanges value
     * @return \Ews\StructType\EwsRecurringMasterItemIdRangesType|null
     */
    public function getRecurringMasterItemIdRanges()
    {
        return isset($this->RecurringMasterItemIdRanges) ? $this->RecurringMasterItemIdRanges : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRecurringMasterItemIdRanges method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecurringMasterItemIdRanges method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRecurringMasterItemIdRangesForChoiceConstraintsFromSetRecurringMasterItemIdRanges($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ItemId',
            'OccurrenceItemId',
            'RecurringMasterItemId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property RecurringMasterItemIdRanges can\'t be set as the property %s is already set. Only one property must be set among these properties: RecurringMasterItemIdRanges, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set RecurringMasterItemIdRanges value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRecurringMasterItemIdRangesType $recurringMasterItemIdRanges
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public function setRecurringMasterItemIdRanges(\Ews\StructType\EwsRecurringMasterItemIdRangesType $recurringMasterItemIdRanges = null)
    {
        // validation for constraint: choice(ItemId, OccurrenceItemId, RecurringMasterItemId, RecurringMasterItemIdRanges)
        if ('' !== ($recurringMasterItemIdRangesChoiceErrorMessage = self::validateRecurringMasterItemIdRangesForChoiceConstraintsFromSetRecurringMasterItemIdRanges($recurringMasterItemIdRanges))) {
            throw new \InvalidArgumentException($recurringMasterItemIdRangesChoiceErrorMessage, __LINE__);
        }
        if (is_null($recurringMasterItemIdRanges) || (is_array($recurringMasterItemIdRanges) && empty($recurringMasterItemIdRanges))) {
            unset($this->RecurringMasterItemIdRanges);
        } else {
            $this->RecurringMasterItemIdRanges = $recurringMasterItemIdRanges;
        }
        return $this;
    }
}
