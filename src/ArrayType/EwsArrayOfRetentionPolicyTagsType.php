<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsRetentionPolicyTagType[]
     */
    public $RetentionPolicyTag;
    /**
     * Constructor method for ArrayOfRetentionPolicyTagsType
     * @uses EwsArrayOfRetentionPolicyTagsType::setRetentionPolicyTag()
     * @param \Ews\StructType\EwsRetentionPolicyTagType[] $retentionPolicyTag
     */
    public function __construct(array $retentionPolicyTag = array())
    {
        $this
            ->setRetentionPolicyTag($retentionPolicyTag);
    }
    /**
     * Get RetentionPolicyTag value
     * @return \Ews\StructType\EwsRetentionPolicyTagType[]|null
     */
    public function getRetentionPolicyTag()
    {
        return $this->RetentionPolicyTag;
    }
    /**
     * This method is responsible for validating the values passed to the setRetentionPolicyTag method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRetentionPolicyTag method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRetentionPolicyTagForArrayConstraintsFromSetRetentionPolicyTag(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem) {
            // validation for constraint: itemType
            if (!$arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem instanceof \Ews\StructType\EwsRetentionPolicyTagType) {
                $invalidValues[] = is_object($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem) ? get_class($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem) : sprintf('%s(%s)', gettype($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem), var_export($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RetentionPolicyTag property can only contain items of type \Ews\StructType\EwsRetentionPolicyTagType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RetentionPolicyTag value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRetentionPolicyTagType[] $retentionPolicyTag
     * @return \Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType
     */
    public function setRetentionPolicyTag(array $retentionPolicyTag = array())
    {
        // validation for constraint: array
        if ('' !== ($retentionPolicyTagArrayErrorMessage = self::validateRetentionPolicyTagForArrayConstraintsFromSetRetentionPolicyTag($retentionPolicyTag))) {
            throw new \InvalidArgumentException($retentionPolicyTagArrayErrorMessage, __LINE__);
        }
        $this->RetentionPolicyTag = $retentionPolicyTag;
        return $this;
    }
    /**
     * Add item to RetentionPolicyTag value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRetentionPolicyTagType $item
     * @return \Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType
     */
    public function addToRetentionPolicyTag(\Ews\StructType\EwsRetentionPolicyTagType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsRetentionPolicyTagType) {
            throw new \InvalidArgumentException(sprintf('The RetentionPolicyTag property can only contain items of type \Ews\StructType\EwsRetentionPolicyTagType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RetentionPolicyTag[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRetentionPolicyTagType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRetentionPolicyTagType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRetentionPolicyTagType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRetentionPolicyTagType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRetentionPolicyTagType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RetentionPolicyTag
     */
    public function getAttributeName()
    {
        return 'RetentionPolicyTag';
    }
}
