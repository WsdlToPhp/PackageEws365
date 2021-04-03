<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStaffAvailabilityResponseType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfStaffAvailabilityResponseType extends AbstractStructArrayBase
{
    /**
     * The Response
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsStaffAvailabilityResponseType[]
     */
    protected array $Response = [];
    /**
     * Constructor method for ArrayOfStaffAvailabilityResponseType
     * @uses EwsArrayOfStaffAvailabilityResponseType::setResponse()
     * @param \StructType\EwsStaffAvailabilityResponseType[] $response
     */
    public function __construct(array $response = [])
    {
        $this
            ->setResponse($response);
    }
    /**
     * Get Response value
     * @return \StructType\EwsStaffAvailabilityResponseType[]
     */
    public function getResponse(): array
    {
        return $this->Response;
    }
    /**
     * This method is responsible for validating the values passed to the setResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponseForArrayConstraintsFromSetResponse(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStaffAvailabilityResponseTypeResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfStaffAvailabilityResponseTypeResponseItem instanceof \StructType\EwsStaffAvailabilityResponseType) {
                $invalidValues[] = is_object($arrayOfStaffAvailabilityResponseTypeResponseItem) ? get_class($arrayOfStaffAvailabilityResponseTypeResponseItem) : sprintf('%s(%s)', gettype($arrayOfStaffAvailabilityResponseTypeResponseItem), var_export($arrayOfStaffAvailabilityResponseTypeResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response property can only contain items of type \StructType\EwsStaffAvailabilityResponseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Response value
     * @throws InvalidArgumentException
     * @param \StructType\EwsStaffAvailabilityResponseType[] $response
     * @return \ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public function setResponse(array $response = []): self
    {
        // validation for constraint: array
        if ('' !== ($responseArrayErrorMessage = self::validateResponseForArrayConstraintsFromSetResponse($response))) {
            throw new InvalidArgumentException($responseArrayErrorMessage, __LINE__);
        }
        $this->Response = $response;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsStaffAvailabilityResponseType|null
     */
    public function current(): ?\StructType\EwsStaffAvailabilityResponseType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsStaffAvailabilityResponseType|null
     */
    public function item($index): ?\StructType\EwsStaffAvailabilityResponseType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsStaffAvailabilityResponseType|null
     */
    public function first(): ?\StructType\EwsStaffAvailabilityResponseType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsStaffAvailabilityResponseType|null
     */
    public function last(): ?\StructType\EwsStaffAvailabilityResponseType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsStaffAvailabilityResponseType|null
     */
    public function offsetGet($offset): ?\StructType\EwsStaffAvailabilityResponseType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsStaffAvailabilityResponseType $item
     * @return \ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public function add(\StructType\EwsStaffAvailabilityResponseType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Response
     */
    public function getAttributeName(): string
    {
        return 'Response';
    }
}
