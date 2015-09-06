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
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The OccurrenceItemId
     * @var \Ews\StructType\EwsOccurrenceItemIdType
     */
    public $OccurrenceItemId;
    /**
     * The RecurringMasterItemId
     * @var \Ews\StructType\EwsRecurringMasterItemIdType
     */
    public $RecurringMasterItemId;
    /**
     * The RecurringMasterItemIdRanges
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
     * @param \Ews\StructType\EwsRecurringMasterItemIdRangesType
     * $recurringMasterItemIdRanges
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
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get OccurrenceItemId value
     * @return \Ews\StructType\EwsOccurrenceItemIdType|null
     */
    public function getOccurrenceItemId()
    {
        return $this->OccurrenceItemId;
    }
    /**
     * Set OccurrenceItemId value
     * @param \Ews\StructType\EwsOccurrenceItemIdType $occurrenceItemId
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public function setOccurrenceItemId(\Ews\StructType\EwsOccurrenceItemIdType $occurrenceItemId = null)
    {
        $this->OccurrenceItemId = $occurrenceItemId;
        return $this;
    }
    /**
     * Get RecurringMasterItemId value
     * @return \Ews\StructType\EwsRecurringMasterItemIdType|null
     */
    public function getRecurringMasterItemId()
    {
        return $this->RecurringMasterItemId;
    }
    /**
     * Set RecurringMasterItemId value
     * @param \Ews\StructType\EwsRecurringMasterItemIdType $recurringMasterItemId
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public function setRecurringMasterItemId(\Ews\StructType\EwsRecurringMasterItemIdType $recurringMasterItemId = null)
    {
        $this->RecurringMasterItemId = $recurringMasterItemId;
        return $this;
    }
    /**
     * Get RecurringMasterItemIdRanges value
     * @return \Ews\StructType\EwsRecurringMasterItemIdRangesType|null
     */
    public function getRecurringMasterItemIdRanges()
    {
        return $this->RecurringMasterItemIdRanges;
    }
    /**
     * Set RecurringMasterItemIdRanges value
     * @param \Ews\StructType\EwsRecurringMasterItemIdRangesType
     * $recurringMasterItemIdRanges
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public function setRecurringMasterItemIdRanges(\Ews\StructType\EwsRecurringMasterItemIdRangesType $recurringMasterItemIdRanges = null)
    {
        $this->RecurringMasterItemIdRanges = $recurringMasterItemIdRanges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
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
