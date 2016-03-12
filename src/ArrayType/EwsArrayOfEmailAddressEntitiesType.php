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
     * Meta informations extracted from the WSDL
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
     * Set EmailAddressEntity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressEntityType[] $emailAddressEntity
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressEntitiesType
     */
    public function setEmailAddressEntity(array $emailAddressEntity = array())
    {
        foreach ($emailAddressEntity as $arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem instanceof \Ews\StructType\EwsEmailAddressEntityType) {
                throw new \InvalidArgumentException(sprintf('The EmailAddressEntity property can only contain items of \Ews\StructType\EwsEmailAddressEntityType, "%s" given', is_object($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem) ? get_class($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem) : gettype($arrayOfEmailAddressEntitiesTypeEmailAddressEntityItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The EmailAddressEntity property can only contain items of \Ews\StructType\EwsEmailAddressEntityType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressEntitiesType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
