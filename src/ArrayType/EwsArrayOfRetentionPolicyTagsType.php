<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRetentionPolicyTagsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of retention policy tags.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRetentionPolicyTagsType extends AbstractStructArrayBase
{
    /**
     * The RetentionPolicyTag
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsRetentionPolicyTagType[]
     */
    protected array $RetentionPolicyTag = [];
    /**
     * Constructor method for ArrayOfRetentionPolicyTagsType
     * @uses EwsArrayOfRetentionPolicyTagsType::setRetentionPolicyTag()
     * @param \StructType\EwsRetentionPolicyTagType[] $retentionPolicyTag
     */
    public function __construct(array $retentionPolicyTag = [])
    {
        $this
            ->setRetentionPolicyTag($retentionPolicyTag);
    }
    /**
     * Get RetentionPolicyTag value
     * @return \StructType\EwsRetentionPolicyTagType[]
     */
    public function getRetentionPolicyTag(): array
    {
        return $this->RetentionPolicyTag;
    }
    /**
     * This method is responsible for validating the values passed to the setRetentionPolicyTag method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRetentionPolicyTag method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRetentionPolicyTagForArrayConstraintsFromSetRetentionPolicyTag(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem) {
            // validation for constraint: itemType
            if (!$arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem instanceof \StructType\EwsRetentionPolicyTagType) {
                $invalidValues[] = is_object($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem) ? get_class($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem) : sprintf('%s(%s)', gettype($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem), var_export($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RetentionPolicyTag property can only contain items of type \StructType\EwsRetentionPolicyTagType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RetentionPolicyTag value
     * @throws InvalidArgumentException
     * @param \StructType\EwsRetentionPolicyTagType[] $retentionPolicyTag
     * @return \ArrayType\EwsArrayOfRetentionPolicyTagsType
     */
    public function setRetentionPolicyTag(array $retentionPolicyTag = []): self
    {
        // validation for constraint: array
        if ('' !== ($retentionPolicyTagArrayErrorMessage = self::validateRetentionPolicyTagForArrayConstraintsFromSetRetentionPolicyTag($retentionPolicyTag))) {
            throw new InvalidArgumentException($retentionPolicyTagArrayErrorMessage, __LINE__);
        }
        $this->RetentionPolicyTag = $retentionPolicyTag;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsRetentionPolicyTagType|null
     */
    public function current(): ?\StructType\EwsRetentionPolicyTagType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsRetentionPolicyTagType|null
     */
    public function item($index): ?\StructType\EwsRetentionPolicyTagType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsRetentionPolicyTagType|null
     */
    public function first(): ?\StructType\EwsRetentionPolicyTagType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsRetentionPolicyTagType|null
     */
    public function last(): ?\StructType\EwsRetentionPolicyTagType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsRetentionPolicyTagType|null
     */
    public function offsetGet($offset): ?\StructType\EwsRetentionPolicyTagType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsRetentionPolicyTagType $item
     * @return \ArrayType\EwsArrayOfRetentionPolicyTagsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsRetentionPolicyTagType) {
            throw new InvalidArgumentException(sprintf('The RetentionPolicyTag property can only contain items of type \StructType\EwsRetentionPolicyTagType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RetentionPolicyTag
     */
    public function getAttributeName(): string
    {
        return 'RetentionPolicyTag';
    }
}
