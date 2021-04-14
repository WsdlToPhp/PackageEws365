<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClientExtensionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfClientExtensionsType extends AbstractStructArrayBase
{
    /**
     * The ClientExtension
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsClientExtensionType[]
     */
    protected array $ClientExtension = [];
    /**
     * Constructor method for ArrayOfClientExtensionsType
     * @uses EwsArrayOfClientExtensionsType::setClientExtension()
     * @param \StructType\EwsClientExtensionType[] $clientExtension
     */
    public function __construct(array $clientExtension = [])
    {
        $this
            ->setClientExtension($clientExtension);
    }
    /**
     * Get ClientExtension value
     * @return \StructType\EwsClientExtensionType[]
     */
    public function getClientExtension(): array
    {
        return $this->ClientExtension;
    }
    /**
     * This method is responsible for validating the values passed to the setClientExtension method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClientExtension method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClientExtensionForArrayConstraintsFromSetClientExtension(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClientExtensionsTypeClientExtensionItem) {
            // validation for constraint: itemType
            if (!$arrayOfClientExtensionsTypeClientExtensionItem instanceof \StructType\EwsClientExtensionType) {
                $invalidValues[] = is_object($arrayOfClientExtensionsTypeClientExtensionItem) ? get_class($arrayOfClientExtensionsTypeClientExtensionItem) : sprintf('%s(%s)', gettype($arrayOfClientExtensionsTypeClientExtensionItem), var_export($arrayOfClientExtensionsTypeClientExtensionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClientExtension property can only contain items of type \StructType\EwsClientExtensionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClientExtension value
     * @throws InvalidArgumentException
     * @param \StructType\EwsClientExtensionType[] $clientExtension
     * @return \ArrayType\EwsArrayOfClientExtensionsType
     */
    public function setClientExtension(array $clientExtension = []): self
    {
        // validation for constraint: array
        if ('' !== ($clientExtensionArrayErrorMessage = self::validateClientExtensionForArrayConstraintsFromSetClientExtension($clientExtension))) {
            throw new InvalidArgumentException($clientExtensionArrayErrorMessage, __LINE__);
        }
        $this->ClientExtension = $clientExtension;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsClientExtensionType|null
     */
    public function current(): ?\StructType\EwsClientExtensionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsClientExtensionType|null
     */
    public function item($index): ?\StructType\EwsClientExtensionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsClientExtensionType|null
     */
    public function first(): ?\StructType\EwsClientExtensionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsClientExtensionType|null
     */
    public function last(): ?\StructType\EwsClientExtensionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsClientExtensionType|null
     */
    public function offsetGet($offset): ?\StructType\EwsClientExtensionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsClientExtensionType $item
     * @return \ArrayType\EwsArrayOfClientExtensionsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsClientExtensionType) {
            throw new InvalidArgumentException(sprintf('The ClientExtension property can only contain items of type \StructType\EwsClientExtensionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClientExtension
     */
    public function getAttributeName(): string
    {
        return 'ClientExtension';
    }
}
