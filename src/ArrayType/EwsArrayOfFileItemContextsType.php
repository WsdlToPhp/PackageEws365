<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsFileItemContext[]
     */
    protected array $FileContext = [];
    /**
     * Constructor method for ArrayOfFileItemContextsType
     * @uses EwsArrayOfFileItemContextsType::setFileContext()
     * @param \StructType\EwsFileItemContext[] $fileContext
     */
    public function __construct(array $fileContext = [])
    {
        $this
            ->setFileContext($fileContext);
    }
    /**
     * Get FileContext value
     * @return \StructType\EwsFileItemContext[]
     */
    public function getFileContext(): array
    {
        return $this->FileContext;
    }
    /**
     * This method is responsible for validating the values passed to the setFileContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFileContext method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFileContextForArrayConstraintsFromSetFileContext(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFileItemContextsTypeFileContextItem) {
            // validation for constraint: itemType
            if (!$arrayOfFileItemContextsTypeFileContextItem instanceof \StructType\EwsFileItemContext) {
                $invalidValues[] = is_object($arrayOfFileItemContextsTypeFileContextItem) ? get_class($arrayOfFileItemContextsTypeFileContextItem) : sprintf('%s(%s)', gettype($arrayOfFileItemContextsTypeFileContextItem), var_export($arrayOfFileItemContextsTypeFileContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FileContext property can only contain items of type \StructType\EwsFileItemContext, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FileContext value
     * @throws InvalidArgumentException
     * @param \StructType\EwsFileItemContext[] $fileContext
     * @return \ArrayType\EwsArrayOfFileItemContextsType
     */
    public function setFileContext(array $fileContext = []): self
    {
        // validation for constraint: array
        if ('' !== ($fileContextArrayErrorMessage = self::validateFileContextForArrayConstraintsFromSetFileContext($fileContext))) {
            throw new InvalidArgumentException($fileContextArrayErrorMessage, __LINE__);
        }
        $this->FileContext = $fileContext;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsFileItemContext|null
     */
    public function current(): ?\StructType\EwsFileItemContext
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsFileItemContext|null
     */
    public function item($index): ?\StructType\EwsFileItemContext
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsFileItemContext|null
     */
    public function first(): ?\StructType\EwsFileItemContext
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsFileItemContext|null
     */
    public function last(): ?\StructType\EwsFileItemContext
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsFileItemContext|null
     */
    public function offsetGet($offset): ?\StructType\EwsFileItemContext
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsFileItemContext $item
     * @return \ArrayType\EwsArrayOfFileItemContextsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsFileItemContext) {
            throw new InvalidArgumentException(sprintf('The FileContext property can only contain items of type \StructType\EwsFileItemContext, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FileContext
     */
    public function getAttributeName(): string
    {
        return 'FileContext';
    }
}
