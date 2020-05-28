<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailAddressEntitiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEmailAddressEntitiesType extends AbstractStructArrayBase
{
    /**
     * The EmailAddressEntity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressEntityType[]
     */
    public $EmailAddressEntity;
    /**
     * Constructor method for ArrayOfEmailAddressEntitiesType
     * @uses EwsArrayOfEmailAddressEntitiesType::setEmailAddressEntity()
     * @param \Ews\StructType\EwsEmailAddressEntityType[] $emailAddressEntity
     */
    public function __construct(array $emailAddressEntity = array())
    {
        $this
            ->setEmailAddressEntity($emailAddressEntity);
    }
    /**
     * Get EmailAddressEntity value
     * @return \Ews\StructType\EwsEmailAddressEntityType[]|null
     */
    public function getEmailAddressEntity()
    {
        return $this->EmailAddressEntity;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailAddressEntity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailAddressEntity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailAddressEntityForArrayConstraintsFromSetEmailAddressEntity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem instanceof \Ews\StructType\EwsEmailAddressEntityType) {
                $invalidValues[] = is_object($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem) ? get_class($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem) : sprintf('%s(%s)', gettype($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem), var_export($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailAddressEntity property can only contain items of type \Ews\StructType\EwsEmailAddressEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EmailAddressEntity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressEntityType[] $emailAddressEntity
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressEntitiesType
     */
    public function setEmailAddressEntity(array $emailAddressEntity = array())
    {
        // validation for constraint: array
        if ('' !== ($emailAddressEntityArrayErrorMessage = self::validateEmailAddressEntityForArrayConstraintsFromSetEmailAddressEntity($emailAddressEntity))) {
            throw new \InvalidArgumentException($emailAddressEntityArrayErrorMessage, __LINE__);
        }
        $this->EmailAddressEntity = $emailAddressEntity;
        return $this;
    }
    /**
     * Add item to EmailAddressEntity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressEntityType $item
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressEntitiesType
     */
    public function addToEmailAddressEntity(\Ews\StructType\EwsEmailAddressEntityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsEmailAddressEntityType) {
            throw new \InvalidArgumentException(sprintf('The EmailAddressEntity property can only contain items of type \Ews\StructType\EwsEmailAddressEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EmailAddressEntity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsEmailAddressEntityType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsEmailAddressEntityType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsEmailAddressEntityType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsEmailAddressEntityType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsEmailAddressEntityType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailAddressEntity
     */
    public function getAttributeName()
    {
        return 'EmailAddressEntity';
    }
}
