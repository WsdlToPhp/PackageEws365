<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfExtendedFieldURIs ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfExtendedFieldURIs extends AbstractStructArrayBase
{
    /**
     * The ExtendedProperty
     * @var \Ews\StructType\EwsPathToExtendedFieldType
     */
    public $ExtendedProperty;
    /**
     * Constructor method for NonEmptyArrayOfExtendedFieldURIs
     * @uses EwsNonEmptyArrayOfExtendedFieldURIs::setExtendedProperty()
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedProperty
     */
    public function __construct(\Ews\StructType\EwsPathToExtendedFieldType $extendedProperty = null)
    {
        $this
            ->setExtendedProperty($extendedProperty);
    }
    /**
     * Get ExtendedProperty value
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedProperty()
    {
        return $this->ExtendedProperty;
    }
    /**
     * Set ExtendedProperty value
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedProperty
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs
     */
    public function setExtendedProperty(\Ews\StructType\EwsPathToExtendedFieldType $extendedProperty = null)
    {
        $this->ExtendedProperty = $extendedProperty;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtendedProperty
     */
    public function getAttributeName()
    {
        return 'ExtendedProperty';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs
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
