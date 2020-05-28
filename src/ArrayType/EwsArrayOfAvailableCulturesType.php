<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailableCulturesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAvailableCulturesType extends AbstractStructArrayBase
{
    /**
     * The AvailableCulture
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCultureInfoDataType[]
     */
    public $AvailableCulture;
    /**
     * Constructor method for ArrayOfAvailableCulturesType
     * @uses EwsArrayOfAvailableCulturesType::setAvailableCulture()
     * @param \Ews\StructType\EwsCultureInfoDataType[] $availableCulture
     */
    public function __construct(array $availableCulture = array())
    {
        $this
            ->setAvailableCulture($availableCulture);
    }
    /**
     * Get AvailableCulture value
     * @return \Ews\StructType\EwsCultureInfoDataType[]|null
     */
    public function getAvailableCulture()
    {
        return $this->AvailableCulture;
    }
    /**
     * This method is responsible for validating the values passed to the setAvailableCulture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvailableCulture method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAvailableCultureForArrayConstraintsFromSetAvailableCulture(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAvailableCulturesTypeAvailableCultureItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailableCulturesTypeAvailableCultureItem instanceof \Ews\StructType\EwsCultureInfoDataType) {
                $invalidValues[] = is_object($arrayOfAvailableCulturesTypeAvailableCultureItem) ? get_class($arrayOfAvailableCulturesTypeAvailableCultureItem) : sprintf('%s(%s)', gettype($arrayOfAvailableCulturesTypeAvailableCultureItem), var_export($arrayOfAvailableCulturesTypeAvailableCultureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AvailableCulture property can only contain items of type \Ews\StructType\EwsCultureInfoDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AvailableCulture value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCultureInfoDataType[] $availableCulture
     * @return \Ews\ArrayType\EwsArrayOfAvailableCulturesType
     */
    public function setAvailableCulture(array $availableCulture = array())
    {
        // validation for constraint: array
        if ('' !== ($availableCultureArrayErrorMessage = self::validateAvailableCultureForArrayConstraintsFromSetAvailableCulture($availableCulture))) {
            throw new \InvalidArgumentException($availableCultureArrayErrorMessage, __LINE__);
        }
        $this->AvailableCulture = $availableCulture;
        return $this;
    }
    /**
     * Add item to AvailableCulture value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCultureInfoDataType $item
     * @return \Ews\ArrayType\EwsArrayOfAvailableCulturesType
     */
    public function addToAvailableCulture(\Ews\StructType\EwsCultureInfoDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsCultureInfoDataType) {
            throw new \InvalidArgumentException(sprintf('The AvailableCulture property can only contain items of type \Ews\StructType\EwsCultureInfoDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AvailableCulture[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsCultureInfoDataType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AvailableCulture
     */
    public function getAttributeName()
    {
        return 'AvailableCulture';
    }
}
