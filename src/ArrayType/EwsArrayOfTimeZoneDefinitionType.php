<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTimeZoneDefinitionType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTimeZoneDefinitionType extends AbstractStructArrayBase
{
    /**
     * The TimeZoneDefinition
     * @var \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public $TimeZoneDefinition;
    /**
     * Constructor method for ArrayOfTimeZoneDefinitionType
     * @uses EwsArrayOfTimeZoneDefinitionType::setTimeZoneDefinition()
     * @param \Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition
     */
    public function __construct(\Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition = null)
    {
        $this
            ->setTimeZoneDefinition($timeZoneDefinition);
    }
    /**
     * Get TimeZoneDefinition value
     * @return \Ews\StructType\EwsTimeZoneDefinitionType|null
     */
    public function getTimeZoneDefinition()
    {
        return $this->TimeZoneDefinition;
    }
    /**
     * Set TimeZoneDefinition value
     * @param \Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition
     * @return \Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType
     */
    public function setTimeZoneDefinition(\Ews\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition = null)
    {
        $this->TimeZoneDefinition = $timeZoneDefinition;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsTimeZoneDefinitionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsTimeZoneDefinitionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsTimeZoneDefinitionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsTimeZoneDefinitionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsTimeZoneDefinitionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TimeZoneDefinition
     */
    public function getAttributeName()
    {
        return 'TimeZoneDefinition';
    }
}
