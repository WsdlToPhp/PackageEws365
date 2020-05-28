<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfUseenDataType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfUseenDataType extends AbstractStructArrayBase
{
    /**
     * The Unseen
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUnseenDataType[]
     */
    public $Unseen;
    /**
     * Constructor method for NonEmptyArrayOfUseenDataType
     * @uses EwsNonEmptyArrayOfUseenDataType::setUnseen()
     * @param \Ews\StructType\EwsUnseenDataType[] $unseen
     */
    public function __construct(array $unseen = array())
    {
        $this
            ->setUnseen($unseen);
    }
    /**
     * Get Unseen value
     * @return \Ews\StructType\EwsUnseenDataType[]
     */
    public function getUnseen()
    {
        return $this->Unseen;
    }
    /**
     * This method is responsible for validating the values passed to the setUnseen method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnseen method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnseenForArrayConstraintsFromSetUnseen(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfUseenDataTypeUnseenItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfUseenDataTypeUnseenItem instanceof \Ews\StructType\EwsUnseenDataType) {
                $invalidValues[] = is_object($nonEmptyArrayOfUseenDataTypeUnseenItem) ? get_class($nonEmptyArrayOfUseenDataTypeUnseenItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfUseenDataTypeUnseenItem), var_export($nonEmptyArrayOfUseenDataTypeUnseenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Unseen property can only contain items of type \Ews\StructType\EwsUnseenDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Unseen value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnseenDataType[] $unseen
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUseenDataType
     */
    public function setUnseen(array $unseen = array())
    {
        // validation for constraint: array
        if ('' !== ($unseenArrayErrorMessage = self::validateUnseenForArrayConstraintsFromSetUnseen($unseen))) {
            throw new \InvalidArgumentException($unseenArrayErrorMessage, __LINE__);
        }
        $this->Unseen = $unseen;
        return $this;
    }
    /**
     * Add item to Unseen value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnseenDataType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUseenDataType
     */
    public function addToUnseen(\Ews\StructType\EwsUnseenDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnseenDataType) {
            throw new \InvalidArgumentException(sprintf('The Unseen property can only contain items of type \Ews\StructType\EwsUnseenDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Unseen[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnseenDataType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Unseen
     */
    public function getAttributeName()
    {
        return 'Unseen';
    }
}
