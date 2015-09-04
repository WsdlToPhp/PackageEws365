<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupByType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Allows consumers to specify arbitrary groupings for FindItem queries.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGroupByType extends EwsBaseGroupByType
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
     * Meta informations extracted from the WSDL
     * - documentation: Represents an extended property. Note that there are only a couple of valid attribute combinations. Note that all occurances require the PropertyType attribute. 1. (DistinguishedPropertySetId || PropertySetId) + (PropertyName ||
     * Property Id) 2. PropertyTag
     * @var \Ews\StructType\EwsPathToExtendedFieldType
     */
    public $ExtendedFieldURI;
    /**
     * The AggregateOn
     * Meta informations extracted from the WSDL
     * - documentation: Represents the field of each item to aggregate on and the qualifier to apply to that field in determining which item will represent the group.
     * @var \Ews\StructType\EwsAggregateOnType
     */
    public $AggregateOn;
    /**
     * Constructor method for GroupByType
     * @uses EwsGroupByType::setFieldURI()
     * @uses EwsGroupByType::setIndexedFieldURI()
     * @uses EwsGroupByType::setExtendedFieldURI()
     * @uses EwsGroupByType::setAggregateOn()
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @param \Ews\StructType\EwsAggregateOnType $aggregateOn
     */
    public function __construct(\Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null, \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null, \Ews\StructType\EwsAggregateOnType $aggregateOn = null)
    {
        $this
            ->setFieldURI($fieldURI)
            ->setIndexedFieldURI($indexedFieldURI)
            ->setExtendedFieldURI($extendedFieldURI)
            ->setAggregateOn($aggregateOn);
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
     * @return \Ews\StructType\EwsGroupByType
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
     * @return \Ews\StructType\EwsGroupByType
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
     * @return \Ews\StructType\EwsGroupByType
     */
    public function setExtendedFieldURI(\Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        return $this;
    }
    /**
     * Get AggregateOn value
     * @return \Ews\StructType\EwsAggregateOnType|null
     */
    public function getAggregateOn()
    {
        return $this->AggregateOn;
    }
    /**
     * Set AggregateOn value
     * @param \Ews\StructType\EwsAggregateOnType $aggregateOn
     * @return \Ews\StructType\EwsGroupByType
     */
    public function setAggregateOn(\Ews\StructType\EwsAggregateOnType $aggregateOn = null)
    {
        $this->AggregateOn = $aggregateOn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGroupByType
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
