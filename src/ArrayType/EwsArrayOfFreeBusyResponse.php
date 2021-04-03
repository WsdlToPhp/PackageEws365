<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFreeBusyResponse ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFreeBusyResponse extends AbstractStructArrayBase
{
    /**
     * The FreeBusyResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsFreeBusyResponseType[]
     */
    protected array $FreeBusyResponse = [];
    /**
     * Constructor method for ArrayOfFreeBusyResponse
     * @uses EwsArrayOfFreeBusyResponse::setFreeBusyResponse()
     * @param \StructType\EwsFreeBusyResponseType[] $freeBusyResponse
     */
    public function __construct(array $freeBusyResponse = [])
    {
        $this
            ->setFreeBusyResponse($freeBusyResponse);
    }
    /**
     * Get FreeBusyResponse value
     * @return \StructType\EwsFreeBusyResponseType[]
     */
    public function getFreeBusyResponse(): array
    {
        return $this->FreeBusyResponse;
    }
    /**
     * This method is responsible for validating the values passed to the setFreeBusyResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFreeBusyResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFreeBusyResponseForArrayConstraintsFromSetFreeBusyResponse(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFreeBusyResponseFreeBusyResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfFreeBusyResponseFreeBusyResponseItem instanceof \StructType\EwsFreeBusyResponseType) {
                $invalidValues[] = is_object($arrayOfFreeBusyResponseFreeBusyResponseItem) ? get_class($arrayOfFreeBusyResponseFreeBusyResponseItem) : sprintf('%s(%s)', gettype($arrayOfFreeBusyResponseFreeBusyResponseItem), var_export($arrayOfFreeBusyResponseFreeBusyResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FreeBusyResponse property can only contain items of type \StructType\EwsFreeBusyResponseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FreeBusyResponse value
     * @throws InvalidArgumentException
     * @param \StructType\EwsFreeBusyResponseType[] $freeBusyResponse
     * @return \ArrayType\EwsArrayOfFreeBusyResponse
     */
    public function setFreeBusyResponse(array $freeBusyResponse = []): self
    {
        // validation for constraint: array
        if ('' !== ($freeBusyResponseArrayErrorMessage = self::validateFreeBusyResponseForArrayConstraintsFromSetFreeBusyResponse($freeBusyResponse))) {
            throw new InvalidArgumentException($freeBusyResponseArrayErrorMessage, __LINE__);
        }
        $this->FreeBusyResponse = $freeBusyResponse;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsFreeBusyResponseType|null
     */
    public function current(): ?\StructType\EwsFreeBusyResponseType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsFreeBusyResponseType|null
     */
    public function item($index): ?\StructType\EwsFreeBusyResponseType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsFreeBusyResponseType|null
     */
    public function first(): ?\StructType\EwsFreeBusyResponseType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsFreeBusyResponseType|null
     */
    public function last(): ?\StructType\EwsFreeBusyResponseType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsFreeBusyResponseType|null
     */
    public function offsetGet($offset): ?\StructType\EwsFreeBusyResponseType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsFreeBusyResponseType $item
     * @return \ArrayType\EwsArrayOfFreeBusyResponse
     */
    public function add(\StructType\EwsFreeBusyResponseType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FreeBusyResponse
     */
    public function getAttributeName(): string
    {
        return 'FreeBusyResponse';
    }
}
