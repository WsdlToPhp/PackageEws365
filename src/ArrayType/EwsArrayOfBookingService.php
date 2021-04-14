<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookingService ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBookingService extends AbstractStructArrayBase
{
    /**
     * The Service
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsBookingServiceType[]
     */
    protected array $Service = [];
    /**
     * Constructor method for ArrayOfBookingService
     * @uses EwsArrayOfBookingService::setService()
     * @param \StructType\EwsBookingServiceType[] $service
     */
    public function __construct(array $service = [])
    {
        $this
            ->setService($service);
    }
    /**
     * Get Service value
     * @return \StructType\EwsBookingServiceType[]
     */
    public function getService(): array
    {
        return $this->Service;
    }
    /**
     * This method is responsible for validating the values passed to the setService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceForArrayConstraintsFromSetService(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBookingServiceServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingServiceServiceItem instanceof \StructType\EwsBookingServiceType) {
                $invalidValues[] = is_object($arrayOfBookingServiceServiceItem) ? get_class($arrayOfBookingServiceServiceItem) : sprintf('%s(%s)', gettype($arrayOfBookingServiceServiceItem), var_export($arrayOfBookingServiceServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service property can only contain items of type \StructType\EwsBookingServiceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Service value
     * @throws InvalidArgumentException
     * @param \StructType\EwsBookingServiceType[] $service
     * @return \ArrayType\EwsArrayOfBookingService
     */
    public function setService(array $service = []): self
    {
        // validation for constraint: array
        if ('' !== ($serviceArrayErrorMessage = self::validateServiceForArrayConstraintsFromSetService($service))) {
            throw new InvalidArgumentException($serviceArrayErrorMessage, __LINE__);
        }
        $this->Service = $service;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsBookingServiceType|null
     */
    public function current(): ?\StructType\EwsBookingServiceType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsBookingServiceType|null
     */
    public function item($index): ?\StructType\EwsBookingServiceType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsBookingServiceType|null
     */
    public function first(): ?\StructType\EwsBookingServiceType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsBookingServiceType|null
     */
    public function last(): ?\StructType\EwsBookingServiceType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsBookingServiceType|null
     */
    public function offsetGet($offset): ?\StructType\EwsBookingServiceType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsBookingServiceType $item
     * @return \ArrayType\EwsArrayOfBookingService
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsBookingServiceType) {
            throw new InvalidArgumentException(sprintf('The Service property can only contain items of type \StructType\EwsBookingServiceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Service
     */
    public function getAttributeName(): string
    {
        return 'Service';
    }
}
