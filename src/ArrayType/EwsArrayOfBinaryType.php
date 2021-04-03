<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBinaryType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBinaryType extends AbstractStructArrayBase
{
    /**
     * The Base64Binary
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Base64Binary = [];
    /**
     * Constructor method for ArrayOfBinaryType
     * @uses EwsArrayOfBinaryType::setBase64Binary()
     * @param string[] $base64Binary
     */
    public function __construct(array $base64Binary = [])
    {
        $this
            ->setBase64Binary($base64Binary);
    }
    /**
     * Get Base64Binary value
     * @return string[]
     */
    public function getBase64Binary(): array
    {
        return $this->Base64Binary;
    }
    /**
     * This method is responsible for validating the values passed to the setBase64Binary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBase64Binary method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBase64BinaryForArrayConstraintsFromSetBase64Binary(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBinaryTypeBase64BinaryItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfBinaryTypeBase64BinaryItem)) {
                $invalidValues[] = is_object($arrayOfBinaryTypeBase64BinaryItem) ? get_class($arrayOfBinaryTypeBase64BinaryItem) : sprintf('%s(%s)', gettype($arrayOfBinaryTypeBase64BinaryItem), var_export($arrayOfBinaryTypeBase64BinaryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Base64Binary property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Base64Binary value
     * @throws InvalidArgumentException
     * @param string[] $base64Binary
     * @return \ArrayType\EwsArrayOfBinaryType
     */
    public function setBase64Binary(array $base64Binary = []): self
    {
        // validation for constraint: array
        if ('' !== ($base64BinaryArrayErrorMessage = self::validateBase64BinaryForArrayConstraintsFromSetBase64Binary($base64Binary))) {
            throw new InvalidArgumentException($base64BinaryArrayErrorMessage, __LINE__);
        }
        $this->Base64Binary = $base64Binary;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Base64Binary
     */
    public function getAttributeName(): string
    {
        return 'Base64Binary';
    }
}
