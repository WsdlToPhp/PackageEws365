<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Constructor method for ExistsType
     * @uses EwsExistsType::setFieldURI()
     * @uses EwsExistsType::setIndexedFieldURI()
     * @uses EwsExistsType::setExtendedFieldURI()
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     */
    public function __construct(\Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null, \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this
            ->setFieldURI($fieldURI)
            ->setIndexedFieldURI($indexedFieldURI)
            ->setExtendedFieldURI($extendedFieldURI);
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
     * @return \Ews\StructType\EwsExistsType
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
     * @return \Ews\StructType\EwsExistsType
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
     * @return \Ews\StructType\EwsExistsType
     */
    public function setExtendedFieldURI(\Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        return $this;
    }
}
