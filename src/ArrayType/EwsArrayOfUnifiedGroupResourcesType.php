<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsUnifiedGroupResourceType[]
     */
    public $Resource;
    /**
     * Constructor method for ArrayOfUnifiedGroupResourcesType
     * @uses EwsArrayOfUnifiedGroupResourcesType::setResource()
     * @param \Ews\StructType\EwsUnifiedGroupResourceType[] $resource
     */
    public function __construct(array $resource = array())
    {
        $this
            ->setResource($resource);
    }
    /**
     * Get Resource value
     * @return \Ews\StructType\EwsUnifiedGroupResourceType[]|null
     */
    public function getResource()
    {
        return $this->Resource;
    }
    /**
     * This method is responsible for validating the values passed to the setResource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResource method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResourceForArrayConstraintsFromSetResource(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupResourcesTypeResourceItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupResourcesTypeResourceItem instanceof \Ews\StructType\EwsUnifiedGroupResourceType) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupResourcesTypeResourceItem) ? get_class($arrayOfUnifiedGroupResourcesTypeResourceItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupResourcesTypeResourceItem), var_export($arrayOfUnifiedGroupResourcesTypeResourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Resource property can only contain items of type \Ews\StructType\EwsUnifiedGroupResourceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Resource value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupResourceType[] $resource
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType
     */
    public function setResource(array $resource = array())
    {
        // validation for constraint: array
        if ('' !== ($resourceArrayErrorMessage = self::validateResourceForArrayConstraintsFromSetResource($resource))) {
            throw new \InvalidArgumentException($resourceArrayErrorMessage, __LINE__);
        }
        $this->Resource = $resource;
        return $this;
    }
    /**
     * Add item to Resource value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupResourceType $item
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType
     */
    public function addToResource(\Ews\StructType\EwsUnifiedGroupResourceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnifiedGroupResourceType) {
            throw new \InvalidArgumentException(sprintf('The Resource property can only contain items of type \Ews\StructType\EwsUnifiedGroupResourceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Resource[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnifiedGroupResourceType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnifiedGroupResourceType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnifiedGroupResourceType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnifiedGroupResourceType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnifiedGroupResourceType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Resource
     */
    public function getAttributeName()
    {
        return 'Resource';
    }
}
