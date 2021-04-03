<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Order;
    /**
     * The FieldURI
     * @var \StructType\EwsPathToUnindexedFieldType|null
     */
    protected ?\StructType\EwsPathToUnindexedFieldType $FieldURI = null;
    /**
     * The IndexedFieldURI
     * @var \StructType\EwsPathToIndexedFieldType|null
     */
    protected ?\StructType\EwsPathToIndexedFieldType $IndexedFieldURI = null;
    /**
     * The ExtendedFieldURI
     * @var \StructType\EwsPathToExtendedFieldType|null
     */
    protected ?\StructType\EwsPathToExtendedFieldType $ExtendedFieldURI = null;
    /**
     * Constructor method for FieldOrderType
     * @uses EwsFieldOrderType::setOrder()
     * @uses EwsFieldOrderType::setFieldURI()
     * @uses EwsFieldOrderType::setIndexedFieldURI()
     * @uses EwsFieldOrderType::setExtendedFieldURI()
     * @param string $order
     * @param \StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     */
    public function __construct(string $order, ?\StructType\EwsPathToUnindexedFieldType $fieldURI = null, ?\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, ?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
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
    public function getOrder(): string
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @uses \EnumType\EwsSortDirectionType::valueIsValid()
     * @uses \EnumType\EwsSortDirectionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $order
     * @return \StructType\EwsFieldOrderType
     */
    public function setOrder(string $order): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSortDirectionType::valueIsValid($order)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSortDirectionType', is_array($order) ? implode(', ', $order) : var_export($order, true), implode(', ', \EnumType\EwsSortDirectionType::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
    /**
     * Get FieldURI value
     * @return \StructType\EwsPathToUnindexedFieldType|null
     */
    public function getFieldURI(): ?\StructType\EwsPathToUnindexedFieldType
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @param \StructType\EwsPathToUnindexedFieldType $fieldURI
     * @return \StructType\EwsFieldOrderType
     */
    public function setFieldURI(?\StructType\EwsPathToUnindexedFieldType $fieldURI = null): self
    {
        $this->FieldURI = $fieldURI;
        
        return $this;
    }
    /**
     * Get IndexedFieldURI value
     * @return \StructType\EwsPathToIndexedFieldType|null
     */
    public function getIndexedFieldURI(): ?\StructType\EwsPathToIndexedFieldType
    {
        return $this->IndexedFieldURI;
    }
    /**
     * Set IndexedFieldURI value
     * @param \StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @return \StructType\EwsFieldOrderType
     */
    public function setIndexedFieldURI(?\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null): self
    {
        $this->IndexedFieldURI = $indexedFieldURI;
        
        return $this;
    }
    /**
     * Get ExtendedFieldURI value
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedFieldURI(): ?\StructType\EwsPathToExtendedFieldType
    {
        return $this->ExtendedFieldURI;
    }
    /**
     * Set ExtendedFieldURI value
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @return \StructType\EwsFieldOrderType
     */
    public function setExtendedFieldURI(?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null): self
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        
        return $this;
    }
}
