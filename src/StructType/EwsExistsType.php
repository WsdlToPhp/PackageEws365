<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExistsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExistsType extends EwsSearchExpressionType
{
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
     * Constructor method for ExistsType
     * @uses EwsExistsType::setFieldURI()
     * @uses EwsExistsType::setIndexedFieldURI()
     * @uses EwsExistsType::setExtendedFieldURI()
     * @param \StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     */
    public function __construct(?\StructType\EwsPathToUnindexedFieldType $fieldURI = null, ?\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, ?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this
            ->setFieldURI($fieldURI)
            ->setIndexedFieldURI($indexedFieldURI)
            ->setExtendedFieldURI($extendedFieldURI);
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
     * @return \StructType\EwsExistsType
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
     * @return \StructType\EwsExistsType
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
     * @return \StructType\EwsExistsType
     */
    public function setExtendedFieldURI(?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null): self
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        
        return $this;
    }
}
