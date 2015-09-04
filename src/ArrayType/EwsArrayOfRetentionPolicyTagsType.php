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
 * @release 1.0.0
 */
class EwsArrayOfRetentionPolicyTagsType extends AbstractStructArrayBase
{
    /**
     * The RetentionPolicyTag
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Retention policy tag.
     * @var array
     */
    public $RetentionPolicyTag;
    /**
     * Constructor method for ArrayOfRetentionPolicyTagsType
     * @uses EwsArrayOfRetentionPolicyTagsType::setRetentionPolicyTag()
     * @param array $retentionPolicyTag
     */
    public function __construct(array $retentionPolicyTag = array())
    {
        $this
            ->setRetentionPolicyTag($retentionPolicyTag);
    }
    /**
     * Get RetentionPolicyTag value
     * @return array
     */
    public function getRetentionPolicyTag()
    {
        return $this->RetentionPolicyTag;
    }
    /**
     * Set RetentionPolicyTag value
     * @param array $retentionPolicyTag
     * @return \Ews\ArrayType\EwsArrayOfRetentionPolicyTagsType
     */
    public function setRetentionPolicyTag(array $retentionPolicyTag = array())
    {
        $this->RetentionPolicyTag = $retentionPolicyTag;
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
