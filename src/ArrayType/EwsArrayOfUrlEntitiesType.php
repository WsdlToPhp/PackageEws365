<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUrlEntitiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUrlEntitiesType extends AbstractStructArrayBase
{
    /**
     * The UrlEntity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsUrlEntityType[]
     */
    protected array $UrlEntity = [];
    /**
     * Constructor method for ArrayOfUrlEntitiesType
     * @uses EwsArrayOfUrlEntitiesType::setUrlEntity()
     * @param \StructType\EwsUrlEntityType[] $urlEntity
     */
    public function __construct(array $urlEntity = [])
    {
        $this
            ->setUrlEntity($urlEntity);
    }
    /**
     * Get UrlEntity value
     * @return \StructType\EwsUrlEntityType[]
     */
    public function getUrlEntity(): array
    {
        return $this->UrlEntity;
    }
    /**
     * This method is responsible for validating the values passed to the setUrlEntity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrlEntity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUrlEntityForArrayConstraintsFromSetUrlEntity(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUrlEntitiesTypeUrlEntityItem) {
            // validation for constraint: itemType
            if (!$arrayOfUrlEntitiesTypeUrlEntityItem instanceof \StructType\EwsUrlEntityType) {
                $invalidValues[] = is_object($arrayOfUrlEntitiesTypeUrlEntityItem) ? get_class($arrayOfUrlEntitiesTypeUrlEntityItem) : sprintf('%s(%s)', gettype($arrayOfUrlEntitiesTypeUrlEntityItem), var_export($arrayOfUrlEntitiesTypeUrlEntityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UrlEntity property can only contain items of type \StructType\EwsUrlEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UrlEntity value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUrlEntityType[] $urlEntity
     * @return \ArrayType\EwsArrayOfUrlEntitiesType
     */
    public function setUrlEntity(array $urlEntity = []): self
    {
        // validation for constraint: array
        if ('' !== ($urlEntityArrayErrorMessage = self::validateUrlEntityForArrayConstraintsFromSetUrlEntity($urlEntity))) {
            throw new InvalidArgumentException($urlEntityArrayErrorMessage, __LINE__);
        }
        $this->UrlEntity = $urlEntity;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUrlEntityType|null
     */
    public function current(): ?\StructType\EwsUrlEntityType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUrlEntityType|null
     */
    public function item($index): ?\StructType\EwsUrlEntityType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUrlEntityType|null
     */
    public function first(): ?\StructType\EwsUrlEntityType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUrlEntityType|null
     */
    public function last(): ?\StructType\EwsUrlEntityType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUrlEntityType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUrlEntityType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUrlEntityType $item
     * @return \ArrayType\EwsArrayOfUrlEntitiesType
     */
    public function add(\StructType\EwsUrlEntityType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UrlEntity
     */
    public function getAttributeName(): string
    {
        return 'UrlEntity';
    }
}
