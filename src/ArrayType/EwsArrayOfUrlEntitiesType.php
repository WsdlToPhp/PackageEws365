<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsUrlEntityType[]
     */
    public $UrlEntity;
    /**
     * Constructor method for ArrayOfUrlEntitiesType
     * @uses EwsArrayOfUrlEntitiesType::setUrlEntity()
     * @param \Ews\StructType\EwsUrlEntityType[] $urlEntity
     */
    public function __construct(array $urlEntity = array())
    {
        $this
            ->setUrlEntity($urlEntity);
    }
    /**
     * Get UrlEntity value
     * @return \Ews\StructType\EwsUrlEntityType[]|null
     */
    public function getUrlEntity()
    {
        return $this->UrlEntity;
    }
    /**
     * This method is responsible for validating the values passed to the setUrlEntity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrlEntity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUrlEntityForArrayConstraintsFromSetUrlEntity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUrlEntitiesTypeUrlEntityItem) {
            // validation for constraint: itemType
            if (!$arrayOfUrlEntitiesTypeUrlEntityItem instanceof \Ews\StructType\EwsUrlEntityType) {
                $invalidValues[] = is_object($arrayOfUrlEntitiesTypeUrlEntityItem) ? get_class($arrayOfUrlEntitiesTypeUrlEntityItem) : sprintf('%s(%s)', gettype($arrayOfUrlEntitiesTypeUrlEntityItem), var_export($arrayOfUrlEntitiesTypeUrlEntityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UrlEntity property can only contain items of type \Ews\StructType\EwsUrlEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UrlEntity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUrlEntityType[] $urlEntity
     * @return \Ews\ArrayType\EwsArrayOfUrlEntitiesType
     */
    public function setUrlEntity(array $urlEntity = array())
    {
        // validation for constraint: array
        if ('' !== ($urlEntityArrayErrorMessage = self::validateUrlEntityForArrayConstraintsFromSetUrlEntity($urlEntity))) {
            throw new \InvalidArgumentException($urlEntityArrayErrorMessage, __LINE__);
        }
        $this->UrlEntity = $urlEntity;
        return $this;
    }
    /**
     * Add item to UrlEntity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUrlEntityType $item
     * @return \Ews\ArrayType\EwsArrayOfUrlEntitiesType
     */
    public function addToUrlEntity(\Ews\StructType\EwsUrlEntityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUrlEntityType) {
            throw new \InvalidArgumentException(sprintf('The UrlEntity property can only contain items of type \Ews\StructType\EwsUrlEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UrlEntity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUrlEntityType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUrlEntityType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUrlEntityType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUrlEntityType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUrlEntityType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UrlEntity
     */
    public function getAttributeName()
    {
        return 'UrlEntity';
    }
}
