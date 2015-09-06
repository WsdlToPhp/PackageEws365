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
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsItemChangeType
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
     * @return \Ews\StructType\EwsItemChangeType
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
     * @return \Ews\StructType\EwsItemChangeType
     */
    public function setRecurringMasterItemId(\Ews\StructType\EwsRecurringMasterItemIdType $recurringMasterItemId = null)
    {
        $this->RecurringMasterItemId = $recurringMasterItemId;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsItemChangeType
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
