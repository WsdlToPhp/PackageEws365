<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFlightsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFlightsType extends AbstractStructArrayBase
{
    /**
     * The Flight
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsFlightEntityType[]
     */
    protected array $Flight = [];
    /**
     * Constructor method for ArrayOfFlightsType
     * @uses EwsArrayOfFlightsType::setFlight()
     * @param \StructType\EwsFlightEntityType[] $flight
     */
    public function __construct(array $flight = [])
    {
        $this
            ->setFlight($flight);
    }
    /**
     * Get Flight value
     * @return \StructType\EwsFlightEntityType[]
     */
    public function getFlight(): array
    {
        return $this->Flight;
    }
    /**
     * This method is responsible for validating the values passed to the setFlight method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlight method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightForArrayConstraintsFromSetFlight(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFlightsTypeFlightItem) {
            // validation for constraint: itemType
            if (!$arrayOfFlightsTypeFlightItem instanceof \StructType\EwsFlightEntityType) {
                $invalidValues[] = is_object($arrayOfFlightsTypeFlightItem) ? get_class($arrayOfFlightsTypeFlightItem) : sprintf('%s(%s)', gettype($arrayOfFlightsTypeFlightItem), var_export($arrayOfFlightsTypeFlightItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Flight property can only contain items of type \StructType\EwsFlightEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Flight value
     * @throws InvalidArgumentException
     * @param \StructType\EwsFlightEntityType[] $flight
     * @return \ArrayType\EwsArrayOfFlightsType
     */
    public function setFlight(array $flight = []): self
    {
        // validation for constraint: array
        if ('' !== ($flightArrayErrorMessage = self::validateFlightForArrayConstraintsFromSetFlight($flight))) {
            throw new InvalidArgumentException($flightArrayErrorMessage, __LINE__);
        }
        $this->Flight = $flight;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsFlightEntityType|null
     */
    public function current(): ?\StructType\EwsFlightEntityType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsFlightEntityType|null
     */
    public function item($index): ?\StructType\EwsFlightEntityType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsFlightEntityType|null
     */
    public function first(): ?\StructType\EwsFlightEntityType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsFlightEntityType|null
     */
    public function last(): ?\StructType\EwsFlightEntityType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsFlightEntityType|null
     */
    public function offsetGet($offset): ?\StructType\EwsFlightEntityType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsFlightEntityType $item
     * @return \ArrayType\EwsArrayOfFlightsType
     */
    public function add(\StructType\EwsFlightEntityType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Flight
     */
    public function getAttributeName(): string
    {
        return 'Flight';
    }
}
