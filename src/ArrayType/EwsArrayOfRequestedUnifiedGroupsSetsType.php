<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRequestedUnifiedGroupsSetsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Represents an array of unified groups sets in a GetUserUnifiedGroup request
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRequestedUnifiedGroupsSetsType extends AbstractStructArrayBase
{
    /**
     * The RequestedUnifiedGroupsSet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRequestedUnifiedGroupsSetType[]
     */
    public $RequestedUnifiedGroupsSet;
    /**
     * Constructor method for ArrayOfRequestedUnifiedGroupsSetsType
     * @uses EwsArrayOfRequestedUnifiedGroupsSetsType::setRequestedUnifiedGroupsSet()
     * @param \Ews\StructType\EwsRequestedUnifiedGroupsSetType[] $requestedUnifiedGroupsSet
     */
    public function __construct(array $requestedUnifiedGroupsSet = array())
    {
        $this
            ->setRequestedUnifiedGroupsSet($requestedUnifiedGroupsSet);
    }
    /**
     * Get RequestedUnifiedGroupsSet value
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType[]|null
     */
    public function getRequestedUnifiedGroupsSet()
    {
        return $this->RequestedUnifiedGroupsSet;
    }
    /**
     * This method is responsible for validating the values passed to the setRequestedUnifiedGroupsSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequestedUnifiedGroupsSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequestedUnifiedGroupsSetForArrayConstraintsFromSetRequestedUnifiedGroupsSet(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem) {
            // validation for constraint: itemType
            if (!$arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem instanceof \Ews\StructType\EwsRequestedUnifiedGroupsSetType) {
                $invalidValues[] = is_object($arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem) ? get_class($arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem) : sprintf('%s(%s)', gettype($arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem), var_export($arrayOfRequestedUnifiedGroupsSetsTypeRequestedUnifiedGroupsSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RequestedUnifiedGroupsSet property can only contain items of type \Ews\StructType\EwsRequestedUnifiedGroupsSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RequestedUnifiedGroupsSet value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRequestedUnifiedGroupsSetType[] $requestedUnifiedGroupsSet
     * @return \Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType
     */
    public function setRequestedUnifiedGroupsSet(array $requestedUnifiedGroupsSet = array())
    {
        // validation for constraint: array
        if ('' !== ($requestedUnifiedGroupsSetArrayErrorMessage = self::validateRequestedUnifiedGroupsSetForArrayConstraintsFromSetRequestedUnifiedGroupsSet($requestedUnifiedGroupsSet))) {
            throw new \InvalidArgumentException($requestedUnifiedGroupsSetArrayErrorMessage, __LINE__);
        }
        $this->RequestedUnifiedGroupsSet = $requestedUnifiedGroupsSet;
        return $this;
    }
    /**
     * Add item to RequestedUnifiedGroupsSet value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRequestedUnifiedGroupsSetType $item
     * @return \Ews\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType
     */
    public function addToRequestedUnifiedGroupsSet(\Ews\StructType\EwsRequestedUnifiedGroupsSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsRequestedUnifiedGroupsSetType) {
            throw new \InvalidArgumentException(sprintf('The RequestedUnifiedGroupsSet property can only contain items of type \Ews\StructType\EwsRequestedUnifiedGroupsSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RequestedUnifiedGroupsSet[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRequestedUnifiedGroupsSetType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RequestedUnifiedGroupsSet
     */
    public function getAttributeName()
    {
        return 'RequestedUnifiedGroupsSet';
    }
}
