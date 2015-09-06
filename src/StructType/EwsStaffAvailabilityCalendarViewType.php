<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StaffAvailabilityCalendarViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStaffAvailabilityCalendarViewType extends EwsBaseAvailabilityCalendarViewType
{
    /**
     * The Items
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfBookingItemType
     */
    public $Items;
    /**
     * Constructor method for StaffAvailabilityCalendarViewType
     * @uses EwsStaffAvailabilityCalendarViewType::setItems()
     * @param \Ews\ArrayType\EwsArrayOfBookingItemType $items
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfBookingItemType $items = null)
    {
        $this
            ->setItems($items);
    }
    /**
     * Get Items value
     * @return \Ews\ArrayType\EwsArrayOfBookingItemType
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Ews\ArrayType\EwsArrayOfBookingItemType $items
     * @return \Ews\StructType\EwsStaffAvailabilityCalendarViewType
     */
    public function setItems(\Ews\ArrayType\EwsArrayOfBookingItemType $items = null)
    {
        $this->Items = $items;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsStaffAvailabilityCalendarViewType
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
