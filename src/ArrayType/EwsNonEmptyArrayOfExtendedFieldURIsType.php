<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfExtendedFieldURIsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfExtendedFieldURIsType extends AbstractStructArrayBase
{
    /**
     * The ExtendedFieldURI
     * Meta informations extracted from the WSDL
     * - documentation: Represents an extended property. Note that there are only a couple of valid attribute combinations. Note that all occurances require the PropertyType attribute. 1. (DistinguishedPropertySetId || PropertySetId) + (PropertyName ||
     * Property Id) 2. PropertyTag
     * @var array
     */
    public $ExtendedFieldURI;
    /**
     * Constructor method for NonEmptyArrayOfExtendedFieldURIsType
     * @uses EwsNonEmptyArrayOfExtendedFieldURIsType::setExtendedFieldURI()
     * @param array $extendedFieldURI
     */
    public function __construct(array $extendedFieldURI = array())
    {
        $this
            ->setExtendedFieldURI($extendedFieldURI);
    }
    /**
     * Get ExtendedFieldURI value
     * @return array
     */
    public function getExtendedFieldURI()
    {
        return $this->ExtendedFieldURI;
    }
    /**
     * Set ExtendedFieldURI value
     * @param array $extendedFieldURI
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType
     */
    public function setExtendedFieldURI(array $extendedFieldURI = array())
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
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
     * @return string ExtendedFieldURI
     */
    public function getAttributeName()
    {
        return 'ExtendedFieldURI';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType
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
