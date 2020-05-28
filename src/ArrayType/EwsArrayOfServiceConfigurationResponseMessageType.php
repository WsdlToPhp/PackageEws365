<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceConfigurationResponseMessageType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfServiceConfigurationResponseMessageType extends AbstractStructArrayBase
{
    /**
     * The ServiceConfigurationResponseMessageType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsServiceConfigurationResponseMessageType[]
     */
    public $ServiceConfigurationResponseMessageType;
    /**
     * Constructor method for ArrayOfServiceConfigurationResponseMessageType
     * @uses EwsArrayOfServiceConfigurationResponseMessageType::setServiceConfigurationResponseMessageType()
     * @param \Ews\StructType\EwsServiceConfigurationResponseMessageType[] $serviceConfigurationResponseMessageType
     */
    public function __construct(array $serviceConfigurationResponseMessageType = array())
    {
        $this
            ->setServiceConfigurationResponseMessageType($serviceConfigurationResponseMessageType);
    }
    /**
     * Get ServiceConfigurationResponseMessageType value
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType[]
     */
    public function getServiceConfigurationResponseMessageType()
    {
        return $this->ServiceConfigurationResponseMessageType;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceConfigurationResponseMessageType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceConfigurationResponseMessageType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceConfigurationResponseMessageTypeForArrayConstraintsFromSetServiceConfigurationResponseMessageType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem instanceof \Ews\StructType\EwsServiceConfigurationResponseMessageType) {
                $invalidValues[] = is_object($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem) ? get_class($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem) : sprintf('%s(%s)', gettype($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem), var_export($arrayOfServiceConfigurationResponseMessageTypeServiceConfigurationResponseMessageTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceConfigurationResponseMessageType property can only contain items of type \Ews\StructType\EwsServiceConfigurationResponseMessageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ServiceConfigurationResponseMessageType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsServiceConfigurationResponseMessageType[] $serviceConfigurationResponseMessageType
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     */
    public function setServiceConfigurationResponseMessageType(array $serviceConfigurationResponseMessageType = array())
    {
        // validation for constraint: array
        if ('' !== ($serviceConfigurationResponseMessageTypeArrayErrorMessage = self::validateServiceConfigurationResponseMessageTypeForArrayConstraintsFromSetServiceConfigurationResponseMessageType($serviceConfigurationResponseMessageType))) {
            throw new \InvalidArgumentException($serviceConfigurationResponseMessageTypeArrayErrorMessage, __LINE__);
        }
        $this->ServiceConfigurationResponseMessageType = $serviceConfigurationResponseMessageType;
        return $this;
    }
    /**
     * Add item to ServiceConfigurationResponseMessageType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsServiceConfigurationResponseMessageType $item
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     */
    public function addToServiceConfigurationResponseMessageType(\Ews\StructType\EwsServiceConfigurationResponseMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsServiceConfigurationResponseMessageType) {
            throw new \InvalidArgumentException(sprintf('The ServiceConfigurationResponseMessageType property can only contain items of type \Ews\StructType\EwsServiceConfigurationResponseMessageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ServiceConfigurationResponseMessageType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsServiceConfigurationResponseMessageType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServiceConfigurationResponseMessageType
     */
    public function getAttributeName()
    {
        return 'ServiceConfigurationResponseMessageType';
    }
}
