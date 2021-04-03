<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfBookingItemType
     */
    protected \ArrayType\EwsArrayOfBookingItemType $Items;
    /**
     * Constructor method for StaffAvailabilityCalendarViewType
     * @uses EwsStaffAvailabilityCalendarViewType::setItems()
     * @param \ArrayType\EwsArrayOfBookingItemType $items
     */
    public function __construct(\ArrayType\EwsArrayOfBookingItemType $items)
    {
        $this
            ->setItems($items);
    }
    /**
     * Get Items value
     * @return \ArrayType\EwsArrayOfBookingItemType
     */
    public function getItems(): \ArrayType\EwsArrayOfBookingItemType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \ArrayType\EwsArrayOfBookingItemType $items
     * @return \StructType\EwsStaffAvailabilityCalendarViewType
     */
    public function setItems(\ArrayType\EwsArrayOfBookingItemType $items): self
    {
        $this->Items = $items;
        
        return $this;
    }
}
