<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailableCulturesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAvailableCulturesType extends AbstractStructArrayBase
{
    /**
     * The AvailableCulture
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsCultureInfoDataType[]
     */
    protected array $AvailableCulture = [];
    /**
     * Constructor method for ArrayOfAvailableCulturesType
     * @uses EwsArrayOfAvailableCulturesType::setAvailableCulture()
     * @param \StructType\EwsCultureInfoDataType[] $availableCulture
     */
    public function __construct(array $availableCulture = [])
    {
        $this
            ->setAvailableCulture($availableCulture);
    }
    /**
     * Get AvailableCulture value
     * @return \StructType\EwsCultureInfoDataType[]
     */
    public function getAvailableCulture(): array
    {
        return $this->AvailableCulture;
    }
    /**
     * This method is responsible for validating the values passed to the setAvailableCulture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvailableCulture method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAvailableCultureForArrayConstraintsFromSetAvailableCulture(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAvailableCulturesTypeAvailableCultureItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailableCulturesTypeAvailableCultureItem instanceof \StructType\EwsCultureInfoDataType) {
                $invalidValues[] = is_object($arrayOfAvailableCulturesTypeAvailableCultureItem) ? get_class($arrayOfAvailableCulturesTypeAvailableCultureItem) : sprintf('%s(%s)', gettype($arrayOfAvailableCulturesTypeAvailableCultureItem), var_export($arrayOfAvailableCulturesTypeAvailableCultureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AvailableCulture property can only contain items of type \StructType\EwsCultureInfoDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AvailableCulture value
     * @throws InvalidArgumentException
     * @param \StructType\EwsCultureInfoDataType[] $availableCulture
     * @return \ArrayType\EwsArrayOfAvailableCulturesType
     */
    public function setAvailableCulture(array $availableCulture = []): self
    {
        // validation for constraint: array
        if ('' !== ($availableCultureArrayErrorMessage = self::validateAvailableCultureForArrayConstraintsFromSetAvailableCulture($availableCulture))) {
            throw new InvalidArgumentException($availableCultureArrayErrorMessage, __LINE__);
        }
        $this->AvailableCulture = $availableCulture;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function current(): ?\StructType\EwsCultureInfoDataType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function item($index): ?\StructType\EwsCultureInfoDataType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function first(): ?\StructType\EwsCultureInfoDataType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function last(): ?\StructType\EwsCultureInfoDataType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsCultureInfoDataType|null
     */
    public function offsetGet($offset): ?\StructType\EwsCultureInfoDataType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsCultureInfoDataType $item
     * @return \ArrayType\EwsArrayOfAvailableCulturesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsCultureInfoDataType) {
            throw new InvalidArgumentException(sprintf('The AvailableCulture property can only contain items of type \StructType\EwsCultureInfoDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AvailableCulture
     */
    public function getAttributeName(): string
    {
        return 'AvailableCulture';
    }
}
