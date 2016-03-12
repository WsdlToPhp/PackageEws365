<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFileItemContextsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFileItemContextsType extends AbstractStructArrayBase
{
    /**
     * The FileContext
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFileItemContext[]
     */
    public $FileContext;
    /**
     * Constructor method for ArrayOfFileItemContextsType
     * @uses EwsArrayOfFileItemContextsType::setFileContext()
     * @param \Ews\StructType\EwsFileItemContext[] $fileContext
     */
    public function __construct(array $fileContext = array())
    {
        $this
            ->setFileContext($fileContext);
    }
    /**
     * Get FileContext value
     * @return \Ews\StructType\EwsFileItemContext[]|null
     */
    public function getFileContext()
    {
        return $this->FileContext;
    }
    /**
     * Set FileContext value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFileItemContext[] $fileContext
     * @return \Ews\ArrayType\EwsArrayOfFileItemContextsType
     */
    public function setFileContext(array $fileContext = array())
    {
        foreach ($fileContext as $arrayOfFileItemContextsTypeFileContextItem) {
            // validation for constraint: itemType
            if (!$arrayOfFileItemContextsTypeFileContextItem instanceof \Ews\StructType\EwsFileItemContext) {
                throw new \InvalidArgumentException(sprintf('The FileContext property can only contain items of \Ews\StructType\EwsFileItemContext, "%s" given', is_object($arrayOfFileItemContextsTypeFileContextItem) ? get_class($arrayOfFileItemContextsTypeFileContextItem) : gettype($arrayOfFileItemContextsTypeFileContextItem)), __LINE__);
            }
        }
        $this->FileContext = $fileContext;
        return $this;
    }
    /**
     * Add item to FileContext value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFileItemContext $item
     * @return \Ews\ArrayType\EwsArrayOfFileItemContextsType
     */
    public function addToFileContext(\Ews\StructType\EwsFileItemContext $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsFileItemContext) {
            throw new \InvalidArgumentException(sprintf('The FileContext property can only contain items of \Ews\StructType\EwsFileItemContext, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FileContext[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFileItemContext|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFileItemContext|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFileItemContext|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFileItemContext|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFileItemContext|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FileContext
     */
    public function getAttributeName()
    {
        return 'FileContext';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfFileItemContextsType
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
