<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFlightReservationsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFlightReservationsType extends AbstractStructArrayBase
{
    /**
     * The FlightReservation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsFlightReservationEntityType[]
     */
    protected array $FlightReservation = [];
    /**
     * Constructor method for ArrayOfFlightReservationsType
     * @uses EwsArrayOfFlightReservationsType::setFlightReservation()
     * @param \StructType\EwsFlightReservationEntityType[] $flightReservation
     */
    public function __construct(array $flightReservation = [])
    {
        $this
            ->setFlightReservation($flightReservation);
    }
    /**
     * Get FlightReservation value
     * @return \StructType\EwsFlightReservationEntityType[]
     */
    public function getFlightReservation(): array
    {
        return $this->FlightReservation;
    }
    /**
     * This method is responsible for validating the values passed to the setFlightReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightReservationForArrayConstraintsFromSetFlightReservation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFlightReservationsTypeFlightReservationItem) {
            // validation for constraint: itemType
            if (!$arrayOfFlightReservationsTypeFlightReservationItem instanceof \StructType\EwsFlightReservationEntityType) {
                $invalidValues[] = is_object($arrayOfFlightReservationsTypeFlightReservationItem) ? get_class($arrayOfFlightReservationsTypeFlightReservationItem) : sprintf('%s(%s)', gettype($arrayOfFlightReservationsTypeFlightReservationItem), var_export($arrayOfFlightReservationsTypeFlightReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightReservation property can only contain items of type \StructType\EwsFlightReservationEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightReservation value
     * @throws InvalidArgumentException
     * @param \StructType\EwsFlightReservationEntityType[] $flightReservation
     * @return \ArrayType\EwsArrayOfFlightReservationsType
     */
    public function setFlightReservation(array $flightReservation = []): self
    {
        // validation for constraint: array
        if ('' !== ($flightReservationArrayErrorMessage = self::validateFlightReservationForArrayConstraintsFromSetFlightReservation($flightReservation))) {
            throw new InvalidArgumentException($flightReservationArrayErrorMessage, __LINE__);
        }
        $this->FlightReservation = $flightReservation;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsFlightReservationEntityType|null
     */
    public function current(): ?\StructType\EwsFlightReservationEntityType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsFlightReservationEntityType|null
     */
    public function item($index): ?\StructType\EwsFlightReservationEntityType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsFlightReservationEntityType|null
     */
    public function first(): ?\StructType\EwsFlightReservationEntityType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsFlightReservationEntityType|null
     */
    public function last(): ?\StructType\EwsFlightReservationEntityType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsFlightReservationEntityType|null
     */
    public function offsetGet($offset): ?\StructType\EwsFlightReservationEntityType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsFlightReservationEntityType $item
     * @return \ArrayType\EwsArrayOfFlightReservationsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsFlightReservationEntityType) {
            throw new InvalidArgumentException(sprintf('The FlightReservation property can only contain items of type \StructType\EwsFlightReservationEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FlightReservation
     */
    public function getAttributeName(): string
    {
        return 'FlightReservation';
    }
}
