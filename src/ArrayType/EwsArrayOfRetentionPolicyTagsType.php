<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRetentionPolicyTagsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of retention policy tags.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRetentionPolicyTagsType extends AbstractStructArrayBase
{
    /**
     * The RetentionPolicyTag
     * Meta informations extracted from the WSDL
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
     * Set RetentionPolicyTag value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRetentionPolicyTagType[] $retentionPolicyTag
     * @return \Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType
     */
    public function setRetentionPolicyTag(array $retentionPolicyTag = array())
    {
        foreach ($retentionPolicyTag as $arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem) {
            // validation for constraint: itemType
            if (!$arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem instanceof \Ews\StructType\EwsRetentionPolicyTagType) {
                throw new \InvalidArgumentException(sprintf('The RetentionPolicyTag property can only contain items of \Ews\StructType\EwsRetentionPolicyTagType, "%s" given', is_object($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem) ? get_class($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem) : gettype($arrayOfRetentionPolicyTagsTypeRetentionPolicyTagItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The RetentionPolicyTag property can only contain items of \Ews\StructType\EwsRetentionPolicyTagType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType
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
