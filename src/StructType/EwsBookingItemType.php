<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBookingItemType extends EwsCalendarItemType
{
    /**
     * The ServiceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $ServiceId;
    /**
     * The StaffIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfItemIdsType
     */
    public $StaffIds;
    /**
     * The CustomerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerName;
    /**
     * The CustomerEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerEmail;
    /**
     * The CustomerPhone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerPhone;
    /**
     * Constructor method for BookingItemType
     * @uses EwsBookingItemType::setServiceId()
     * @uses EwsBookingItemType::setStaffIds()
     * @uses EwsBookingItemType::setCustomerName()
     * @uses EwsBookingItemType::setCustomerEmail()
     * @uses EwsBookingItemType::setCustomerPhone()
     * @param string $serviceId
     * @param \Ews\ArrayType\EwsArrayOfItemIdsType $staffIds
     * @param string $customerName
     * @param string $customerEmail
     * @param string $customerPhone
     */
    public function __construct($serviceId = null, \Ews\ArrayType\EwsArrayOfItemIdsType $staffIds = null, $customerName = null, $customerEmail = null, $customerPhone = null)
    {
        $this
            ->setServiceId($serviceId)
            ->setStaffIds($staffIds)
            ->setCustomerName($customerName)
            ->setCustomerEmail($customerEmail)
            ->setCustomerPhone($customerPhone);
    }
    /**
     * Get ServiceId value
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }
    /**
     * Set ServiceId value
     * @param string $serviceId
     * @return \Ews\StructType\EwsBookingItemType
     */
    public function setServiceId($serviceId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($serviceId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $serviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}", "%s" given', var_export($serviceId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($serviceId) && !is_string($serviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceId)), __LINE__);
        }
        $this->ServiceId = $serviceId;
        return $this;
    }
    /**
     * Get StaffIds value
     * @return \Ews\ArrayType\EwsArrayOfItemIdsType|null
     */
    public function getStaffIds()
    {
        return $this->StaffIds;
    }
    /**
     * Set StaffIds value
     * @param \Ews\ArrayType\EwsArrayOfItemIdsType $staffIds
     * @return \Ews\StructType\EwsBookingItemType
     */
    public function setStaffIds(\Ews\ArrayType\EwsArrayOfItemIdsType $staffIds = null)
    {
        $this->StaffIds = $staffIds;
        return $this;
    }
    /**
     * Get CustomerName value
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->CustomerName;
    }
    /**
     * Set CustomerName value
     * @param string $customerName
     * @return \Ews\StructType\EwsBookingItemType
     */
    public function setCustomerName($customerName = null)
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerName)), __LINE__);
        }
        $this->CustomerName = $customerName;
        return $this;
    }
    /**
     * Get CustomerEmail value
     * @return string|null
     */
    public function getCustomerEmail()
    {
        return $this->CustomerEmail;
    }
    /**
     * Set CustomerEmail value
     * @param string $customerEmail
     * @return \Ews\StructType\EwsBookingItemType
     */
    public function setCustomerEmail($customerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($customerEmail) && !is_string($customerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerEmail)), __LINE__);
        }
        $this->CustomerEmail = $customerEmail;
        return $this;
    }
    /**
     * Get CustomerPhone value
     * @return string|null
     */
    public function getCustomerPhone()
    {
        return $this->CustomerPhone;
    }
    /**
     * Set CustomerPhone value
     * @param string $customerPhone
     * @return \Ews\StructType\EwsBookingItemType
     */
    public function setCustomerPhone($customerPhone = null)
    {
        // validation for constraint: string
        if (!is_null($customerPhone) && !is_string($customerPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerPhone)), __LINE__);
        }
        $this->CustomerPhone = $customerPhone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBookingItemType
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
