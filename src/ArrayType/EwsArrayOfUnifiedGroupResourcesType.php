<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupResourcesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnifiedGroupResourcesType extends AbstractStructArrayBase
{
    /**
     * The Resource
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsUnifiedGroupResourceType[]
     */
    protected array $Resource = [];
    /**
     * Constructor method for ArrayOfUnifiedGroupResourcesType
     * @uses EwsArrayOfUnifiedGroupResourcesType::setResource()
     * @param \StructType\EwsUnifiedGroupResourceType[] $resource
     */
    public function __construct(array $resource = [])
    {
        $this
            ->setResource($resource);
    }
    /**
     * Get Resource value
     * @return \StructType\EwsUnifiedGroupResourceType[]
     */
    public function getResource(): array
    {
        return $this->Resource;
    }
    /**
     * This method is responsible for validating the values passed to the setResource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResource method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResourceForArrayConstraintsFromSetResource(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupResourcesTypeResourceItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupResourcesTypeResourceItem instanceof \StructType\EwsUnifiedGroupResourceType) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupResourcesTypeResourceItem) ? get_class($arrayOfUnifiedGroupResourcesTypeResourceItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupResourcesTypeResourceItem), var_export($arrayOfUnifiedGroupResourcesTypeResourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Resource property can only contain items of type \StructType\EwsUnifiedGroupResourceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Resource value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupResourceType[] $resource
     * @return \ArrayType\EwsArrayOfUnifiedGroupResourcesType
     */
    public function setResource(array $resource = []): self
    {
        // validation for constraint: array
        if ('' !== ($resourceArrayErrorMessage = self::validateResourceForArrayConstraintsFromSetResource($resource))) {
            throw new InvalidArgumentException($resourceArrayErrorMessage, __LINE__);
        }
        $this->Resource = $resource;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUnifiedGroupResourceType|null
     */
    public function current(): ?\StructType\EwsUnifiedGroupResourceType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUnifiedGroupResourceType|null
     */
    public function item($index): ?\StructType\EwsUnifiedGroupResourceType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUnifiedGroupResourceType|null
     */
    public function first(): ?\StructType\EwsUnifiedGroupResourceType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUnifiedGroupResourceType|null
     */
    public function last(): ?\StructType\EwsUnifiedGroupResourceType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUnifiedGroupResourceType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUnifiedGroupResourceType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupResourceType $item
     * @return \ArrayType\EwsArrayOfUnifiedGroupResourcesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsUnifiedGroupResourceType) {
            throw new InvalidArgumentException(sprintf('The Resource property can only contain items of type \StructType\EwsUnifiedGroupResourceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Resource
     */
    public function getAttributeName(): string
    {
        return 'Resource';
    }
}
