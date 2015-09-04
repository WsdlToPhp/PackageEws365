<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfPathsToElementType ArrayType
 * Meta informations extracted from the WSDL
 * - ref: t:Path
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfPathsToElementType extends AbstractStructArrayBase
{
    /**
     * The Path
     * @var array
     */
    public $Path;
    /**
     * Constructor method for NonEmptyArrayOfPathsToElementType
     * @uses EwsNonEmptyArrayOfPathsToElementType::setPath()
     * @param array $path
     */
    public function __construct(array $path = array())
    {
        $this
            ->setPath($path);
    }
    /**
     * Get Path value
     * @return array
     */
    public function getPath()
    {
        return $this->Path;
    }
    /**
     * Set Path value
     * @param array $path
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType
     */
    public function setPath(array $path = array())
    {
        $this->Path = $path;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsBasePathToElementType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsBasePathToElementType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsBasePathToElementType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsBasePathToElementType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsBasePathToElementType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Path
     */
    public function getAttributeName()
    {
        return 'Path';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType
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
