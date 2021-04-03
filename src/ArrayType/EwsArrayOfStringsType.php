<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStringsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfStringsType extends AbstractStructArrayBase
{
    /**
     * The String
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $String = [];
    /**
     * Constructor method for ArrayOfStringsType
     * @uses EwsArrayOfStringsType::setString()
     * @param string[] $string
     */
    public function __construct(array $string = [])
    {
        $this
            ->setString($string);
    }
    /**
     * Get String value
     * @return string[]
     */
    public function getString(): array
    {
        return $this->String;
    }
    /**
     * This method is responsible for validating the values passed to the setString method
     * This method is willingly generated in order to preserve the one-line inline validation within the setString method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringForArrayConstraintsFromSetString(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStringsTypeStringItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfStringsTypeStringItem)) {
                $invalidValues[] = is_object($arrayOfStringsTypeStringItem) ? get_class($arrayOfStringsTypeStringItem) : sprintf('%s(%s)', gettype($arrayOfStringsTypeStringItem), var_export($arrayOfStringsTypeStringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The String property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set String value
     * @throws InvalidArgumentException
     * @param string[] $string
     * @return \ArrayType\EwsArrayOfStringsType
     */
    public function setString(array $string = []): self
    {
        // validation for constraint: array
        if ('' !== ($stringArrayErrorMessage = self::validateStringForArrayConstraintsFromSetString($string))) {
            throw new InvalidArgumentException($stringArrayErrorMessage, __LINE__);
        }
        $this->String = $string;
        
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
     * @return string String
     */
    public function getAttributeName(): string
    {
        return 'String';
    }
}
