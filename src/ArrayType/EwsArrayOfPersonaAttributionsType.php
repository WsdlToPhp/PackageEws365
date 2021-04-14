<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPersonaAttributionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPersonaAttributionsType extends AbstractStructArrayBase
{
    /**
     * The Attribution
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsPersonaAttributionType[]
     */
    protected array $Attribution = [];
    /**
     * Constructor method for ArrayOfPersonaAttributionsType
     * @uses EwsArrayOfPersonaAttributionsType::setAttribution()
     * @param \StructType\EwsPersonaAttributionType[] $attribution
     */
    public function __construct(array $attribution)
    {
        $this
            ->setAttribution($attribution);
    }
    /**
     * Get Attribution value
     * @return \StructType\EwsPersonaAttributionType[]
     */
    public function getAttribution(): array
    {
        return $this->Attribution;
    }
    /**
     * This method is responsible for validating the values passed to the setAttribution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribution method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributionForArrayConstraintsFromSetAttribution(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPersonaAttributionsTypeAttributionItem) {
            // validation for constraint: itemType
            if (!$arrayOfPersonaAttributionsTypeAttributionItem instanceof \StructType\EwsPersonaAttributionType) {
                $invalidValues[] = is_object($arrayOfPersonaAttributionsTypeAttributionItem) ? get_class($arrayOfPersonaAttributionsTypeAttributionItem) : sprintf('%s(%s)', gettype($arrayOfPersonaAttributionsTypeAttributionItem), var_export($arrayOfPersonaAttributionsTypeAttributionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attribution property can only contain items of type \StructType\EwsPersonaAttributionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Attribution value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPersonaAttributionType[] $attribution
     * @return \ArrayType\EwsArrayOfPersonaAttributionsType
     */
    public function setAttribution(array $attribution): self
    {
        // validation for constraint: array
        if ('' !== ($attributionArrayErrorMessage = self::validateAttributionForArrayConstraintsFromSetAttribution($attribution))) {
            throw new InvalidArgumentException($attributionArrayErrorMessage, __LINE__);
        }
        $this->Attribution = $attribution;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPersonaAttributionType|null
     */
    public function current(): ?\StructType\EwsPersonaAttributionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPersonaAttributionType|null
     */
    public function item($index): ?\StructType\EwsPersonaAttributionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPersonaAttributionType|null
     */
    public function first(): ?\StructType\EwsPersonaAttributionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPersonaAttributionType|null
     */
    public function last(): ?\StructType\EwsPersonaAttributionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPersonaAttributionType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPersonaAttributionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPersonaAttributionType $item
     * @return \ArrayType\EwsArrayOfPersonaAttributionsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsPersonaAttributionType) {
            throw new InvalidArgumentException(sprintf('The Attribution property can only contain items of type \StructType\EwsPersonaAttributionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Attribution
     */
    public function getAttributeName(): string
    {
        return 'Attribution';
    }
}
