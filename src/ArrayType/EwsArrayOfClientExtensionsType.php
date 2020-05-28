<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClientExtensionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfClientExtensionsType extends AbstractStructArrayBase
{
    /**
     * The ClientExtension
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsClientExtensionType[]
     */
    public $ClientExtension;
    /**
     * Constructor method for ArrayOfClientExtensionsType
     * @uses EwsArrayOfClientExtensionsType::setClientExtension()
     * @param \Ews\StructType\EwsClientExtensionType[] $clientExtension
     */
    public function __construct(array $clientExtension = array())
    {
        $this
            ->setClientExtension($clientExtension);
    }
    /**
     * Get ClientExtension value
     * @return \Ews\StructType\EwsClientExtensionType[]|null
     */
    public function getClientExtension()
    {
        return $this->ClientExtension;
    }
    /**
     * This method is responsible for validating the values passed to the setClientExtension method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClientExtension method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClientExtensionForArrayConstraintsFromSetClientExtension(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClientExtensionsTypeClientExtensionItem) {
            // validation for constraint: itemType
            if (!$arrayOfClientExtensionsTypeClientExtensionItem instanceof \Ews\StructType\EwsClientExtensionType) {
                $invalidValues[] = is_object($arrayOfClientExtensionsTypeClientExtensionItem) ? get_class($arrayOfClientExtensionsTypeClientExtensionItem) : sprintf('%s(%s)', gettype($arrayOfClientExtensionsTypeClientExtensionItem), var_export($arrayOfClientExtensionsTypeClientExtensionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClientExtension property can only contain items of type \Ews\StructType\EwsClientExtensionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ClientExtension value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsClientExtensionType[] $clientExtension
     * @return \Ews\ArrayType\EwsArrayOfClientExtensionsType
     */
    public function setClientExtension(array $clientExtension = array())
    {
        // validation for constraint: array
        if ('' !== ($clientExtensionArrayErrorMessage = self::validateClientExtensionForArrayConstraintsFromSetClientExtension($clientExtension))) {
            throw new \InvalidArgumentException($clientExtensionArrayErrorMessage, __LINE__);
        }
        $this->ClientExtension = $clientExtension;
        return $this;
    }
    /**
     * Add item to ClientExtension value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsClientExtensionType $item
     * @return \Ews\ArrayType\EwsArrayOfClientExtensionsType
     */
    public function addToClientExtension(\Ews\StructType\EwsClientExtensionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsClientExtensionType) {
            throw new \InvalidArgumentException(sprintf('The ClientExtension property can only contain items of type \Ews\StructType\EwsClientExtensionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ClientExtension[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClientExtension
     */
    public function getAttributeName()
    {
        return 'ClientExtension';
    }
}
