<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $ServiceId = null;
    /**
     * The StaffIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfItemIdsType|null
     */
    protected ?\ArrayType\EwsArrayOfItemIdsType $StaffIds = null;
    /**
     * The CustomerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomerName = null;
    /**
     * The CustomerEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomerEmail = null;
    /**
     * The CustomerPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomerPhone = null;
    /**
     * Constructor method for BookingItemType
     * @uses EwsBookingItemType::setServiceId()
     * @uses EwsBookingItemType::setStaffIds()
     * @uses EwsBookingItemType::setCustomerName()
     * @uses EwsBookingItemType::setCustomerEmail()
     * @uses EwsBookingItemType::setCustomerPhone()
     * @param string $serviceId
     * @param \ArrayType\EwsArrayOfItemIdsType $staffIds
     * @param string $customerName
     * @param string $customerEmail
     * @param string $customerPhone
     */
    public function __construct(?string $serviceId = null, ?\ArrayType\EwsArrayOfItemIdsType $staffIds = null, ?string $customerName = null, ?string $customerEmail = null, ?string $customerPhone = null)
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
    public function getServiceId(): ?string
    {
        return $this->ServiceId;
    }
    /**
     * Set ServiceId value
     * @param string $serviceId
     * @return \StructType\EwsBookingItemType
     */
    public function setServiceId(?string $serviceId = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceId) && !is_string($serviceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceId, true), gettype($serviceId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($serviceId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $serviceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($serviceId, true)), __LINE__);
        }
        $this->ServiceId = $serviceId;
        
        return $this;
    }
    /**
     * Get StaffIds value
     * @return \ArrayType\EwsArrayOfItemIdsType|null
     */
    public function getStaffIds(): ?\ArrayType\EwsArrayOfItemIdsType
    {
        return $this->StaffIds;
    }
    /**
     * Set StaffIds value
     * @param \ArrayType\EwsArrayOfItemIdsType $staffIds
     * @return \StructType\EwsBookingItemType
     */
    public function setStaffIds(?\ArrayType\EwsArrayOfItemIdsType $staffIds = null): self
    {
        $this->StaffIds = $staffIds;
        
        return $this;
    }
    /**
     * Get CustomerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->CustomerName;
    }
    /**
     * Set CustomerName value
     * @param string $customerName
     * @return \StructType\EwsBookingItemType
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->CustomerName = $customerName;
        
        return $this;
    }
    /**
     * Get CustomerEmail value
     * @return string|null
     */
    public function getCustomerEmail(): ?string
    {
        return $this->CustomerEmail;
    }
    /**
     * Set CustomerEmail value
     * @param string $customerEmail
     * @return \StructType\EwsBookingItemType
     */
    public function setCustomerEmail(?string $customerEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($customerEmail) && !is_string($customerEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerEmail, true), gettype($customerEmail)), __LINE__);
        }
        $this->CustomerEmail = $customerEmail;
        
        return $this;
    }
    /**
     * Get CustomerPhone value
     * @return string|null
     */
    public function getCustomerPhone(): ?string
    {
        return $this->CustomerPhone;
    }
    /**
     * Set CustomerPhone value
     * @param string $customerPhone
     * @return \StructType\EwsBookingItemType
     */
    public function setCustomerPhone(?string $customerPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($customerPhone) && !is_string($customerPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerPhone, true), gettype($customerPhone)), __LINE__);
        }
        $this->CustomerPhone = $customerPhone;
        
        return $this;
    }
}
