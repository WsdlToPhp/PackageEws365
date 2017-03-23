<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldOrderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFieldOrderType extends AbstractStructBase
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Order;
    /**
     * The FieldURI
     * @var \Ews\StructType\EwsPathToUnindexedFieldType
     */
    public $FieldURI;
    /**
     * The IndexedFieldURI
     * @var \Ews\StructType\EwsPathToIndexedFieldType
     */
    public $IndexedFieldURI;
    /**
     * The ExtendedFieldURI
     * @var \Ews\StructType\EwsPathToExtendedFieldType
     */
    public $ExtendedFieldURI;
    /**
     * Constructor method for FieldOrderType
     * @uses EwsFieldOrderType::setOrder()
     * @uses EwsFieldOrderType::setFieldURI()
     * @uses EwsFieldOrderType::setIndexedFieldURI()
     * @uses EwsFieldOrderType::setExtendedFieldURI()
     * @param string $order
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     */
    public function __construct($order = null, \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null, \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this
            ->setOrder($order)
            ->setFieldURI($fieldURI)
            ->setIndexedFieldURI($indexedFieldURI)
            ->setExtendedFieldURI($extendedFieldURI);
    }
    /**
     * Get Order value
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @uses \Ews\EnumType\EwsSortDirectionType::valueIsValid()
     * @uses \Ews\EnumType\EwsSortDirectionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $order
     * @return \Ews\StructType\EwsFieldOrderType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSortDirectionType::valueIsValid($order)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $order, implode(', ', \Ews\EnumType\EwsSortDirectionType::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get FieldURI value
     * @return \Ews\StructType\EwsPathToUnindexedFieldType|null
     */
    public function getFieldURI()
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @return \Ews\StructType\EwsFieldOrderType
     */
    public function setFieldURI(\Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null)
    {
        $this->FieldURI = $fieldURI;
        return $this;
    }
    /**
     * Get IndexedFieldURI value
     * @return \Ews\StructType\EwsPathToIndexedFieldType|null
     */
    public function getIndexedFieldURI()
    {
        return $this->IndexedFieldURI;
    }
    /**
     * Set IndexedFieldURI value
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @return \Ews\StructType\EwsFieldOrderType
     */
    public function setIndexedFieldURI(\Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null)
    {
        $this->IndexedFieldURI = $indexedFieldURI;
        return $this;
    }
    /**
     * Get ExtendedFieldURI value
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedFieldURI()
    {
        return $this->ExtendedFieldURI;
    }
    /**
     * Set ExtendedFieldURI value
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @return \Ews\StructType\EwsFieldOrderType
     */
    public function setExtendedFieldURI(\Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFieldOrderType
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
