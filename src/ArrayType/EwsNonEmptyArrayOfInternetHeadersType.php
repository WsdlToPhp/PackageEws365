<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfInternetHeadersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfInternetHeadersType extends AbstractStructArrayBase
{
    /**
     * The InternetMessageHeader
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsInternetHeaderType[]
     */
    protected array $InternetMessageHeader = [];
    /**
     * Constructor method for NonEmptyArrayOfInternetHeadersType
     * @uses EwsNonEmptyArrayOfInternetHeadersType::setInternetMessageHeader()
     * @param \StructType\EwsInternetHeaderType[] $internetMessageHeader
     */
    public function __construct(array $internetMessageHeader = [])
    {
        $this
            ->setInternetMessageHeader($internetMessageHeader);
    }
    /**
     * Get InternetMessageHeader value
     * @return \StructType\EwsInternetHeaderType[]
     */
    public function getInternetMessageHeader(): array
    {
        return $this->InternetMessageHeader;
    }
    /**
     * This method is responsible for validating the values passed to the setInternetMessageHeader method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternetMessageHeader method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternetMessageHeaderForArrayConstraintsFromSetInternetMessageHeader(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem instanceof \StructType\EwsInternetHeaderType) {
                $invalidValues[] = is_object($nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem) ? get_class($nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem), var_export($nonEmptyArrayOfInternetHeadersTypeInternetMessageHeaderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InternetMessageHeader property can only contain items of type \StructType\EwsInternetHeaderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InternetMessageHeader value
     * @throws InvalidArgumentException
     * @param \StructType\EwsInternetHeaderType[] $internetMessageHeader
     * @return \ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     */
    public function setInternetMessageHeader(array $internetMessageHeader = []): self
    {
        // validation for constraint: array
        if ('' !== ($internetMessageHeaderArrayErrorMessage = self::validateInternetMessageHeaderForArrayConstraintsFromSetInternetMessageHeader($internetMessageHeader))) {
            throw new InvalidArgumentException($internetMessageHeaderArrayErrorMessage, __LINE__);
        }
        $this->InternetMessageHeader = $internetMessageHeader;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsInternetHeaderType|null
     */
    public function current(): ?\StructType\EwsInternetHeaderType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsInternetHeaderType|null
     */
    public function item($index): ?\StructType\EwsInternetHeaderType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsInternetHeaderType|null
     */
    public function first(): ?\StructType\EwsInternetHeaderType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsInternetHeaderType|null
     */
    public function last(): ?\StructType\EwsInternetHeaderType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsInternetHeaderType|null
     */
    public function offsetGet($offset): ?\StructType\EwsInternetHeaderType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsInternetHeaderType $item
     * @return \ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsInternetHeaderType) {
            throw new InvalidArgumentException(sprintf('The InternetMessageHeader property can only contain items of type \StructType\EwsInternetHeaderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InternetMessageHeader
     */
    public function getAttributeName(): string
    {
        return 'InternetMessageHeader';
    }
}
