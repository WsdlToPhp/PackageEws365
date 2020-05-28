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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setFileContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFileContext method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFileContextForArrayConstraintsFromSetFileContext(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFileItemContextsTypeFileContextItem) {
            // validation for constraint: itemType
            if (!$arrayOfFileItemContextsTypeFileContextItem instanceof \Ews\StructType\EwsFileItemContext) {
                $invalidValues[] = is_object($arrayOfFileItemContextsTypeFileContextItem) ? get_class($arrayOfFileItemContextsTypeFileContextItem) : sprintf('%s(%s)', gettype($arrayOfFileItemContextsTypeFileContextItem), var_export($arrayOfFileItemContextsTypeFileContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FileContext property can only contain items of type \Ews\StructType\EwsFileItemContext, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FileContext value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFileItemContext[] $fileContext
     * @return \Ews\ArrayType\EwsArrayOfFileItemContextsType
     */
    public function setFileContext(array $fileContext = array())
    {
        // validation for constraint: array
        if ('' !== ($fileContextArrayErrorMessage = self::validateFileContextForArrayConstraintsFromSetFileContext($fileContext))) {
            throw new \InvalidArgumentException($fileContextArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The FileContext property can only contain items of type \Ews\StructType\EwsFileItemContext, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
