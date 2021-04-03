<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPeopleQuerySource ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPeopleQuerySource extends AbstractStructArrayBase
{
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Source = [];
    /**
     * Constructor method for ArrayOfPeopleQuerySource
     * @uses EwsArrayOfPeopleQuerySource::setSource()
     * @param string[] $source
     */
    public function __construct(array $source)
    {
        $this
            ->setSource($source);
    }
    /**
     * Get Source value
     * @return string[]
     */
    public function getSource(): array
    {
        return $this->Source;
    }
    /**
     * This method is responsible for validating the values passed to the setSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSource method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSourceForArrayConstraintsFromSetSource(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPeopleQuerySourceSourceItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfPeopleQuerySourceSourceItem)) {
                $invalidValues[] = is_object($arrayOfPeopleQuerySourceSourceItem) ? get_class($arrayOfPeopleQuerySourceSourceItem) : sprintf('%s(%s)', gettype($arrayOfPeopleQuerySourceSourceItem), var_export($arrayOfPeopleQuerySourceSourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Source property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Source value
     * @throws InvalidArgumentException
     * @param string[] $source
     * @return \ArrayType\EwsArrayOfPeopleQuerySource
     */
    public function setSource(array $source): self
    {
        // validation for constraint: array
        if ('' !== ($sourceArrayErrorMessage = self::validateSourceForArrayConstraintsFromSetSource($source))) {
            throw new InvalidArgumentException($sourceArrayErrorMessage, __LINE__);
        }
        $this->Source = $source;
        
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
     * @return string Source
     */
    public function getAttributeName(): string
    {
        return 'Source';
    }
}
