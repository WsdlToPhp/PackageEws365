<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsTimeZoneDefinitionType|null
     */
    protected ?\StructType\EwsTimeZoneDefinitionType $TimeZoneDefinition = null;
    /**
     * Constructor method for ArrayOfTimeZoneDefinitionType
     * @uses EwsArrayOfTimeZoneDefinitionType::setTimeZoneDefinition()
     * @param \StructType\EwsTimeZoneDefinitionType $timeZoneDefinition
     */
    public function __construct(?\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition = null)
    {
        $this
            ->setTimeZoneDefinition($timeZoneDefinition);
    }
    /**
     * Get TimeZoneDefinition value
     * @return \StructType\EwsTimeZoneDefinitionType|null
     */
    public function getTimeZoneDefinition(): ?\StructType\EwsTimeZoneDefinitionType
    {
        return $this->TimeZoneDefinition;
    }
    /**
     * Set TimeZoneDefinition value
     * @param \StructType\EwsTimeZoneDefinitionType $timeZoneDefinition
     * @return \ArrayType\EwsArrayOfTimeZoneDefinitionType
     */
    public function setTimeZoneDefinition(?\StructType\EwsTimeZoneDefinitionType $timeZoneDefinition = null): self
    {
        $this->TimeZoneDefinition = $timeZoneDefinition;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsTimeZoneDefinitionType|null
     */
    public function current(): ?\StructType\EwsTimeZoneDefinitionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsTimeZoneDefinitionType|null
     */
    public function item($index): ?\StructType\EwsTimeZoneDefinitionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsTimeZoneDefinitionType|null
     */
    public function first(): ?\StructType\EwsTimeZoneDefinitionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsTimeZoneDefinitionType|null
     */
    public function last(): ?\StructType\EwsTimeZoneDefinitionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsTimeZoneDefinitionType|null
     */
    public function offsetGet($offset): ?\StructType\EwsTimeZoneDefinitionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsTimeZoneDefinitionType $item
     * @return \ArrayType\EwsArrayOfTimeZoneDefinitionType
     */
    public function add(\StructType\EwsTimeZoneDefinitionType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TimeZoneDefinition
     */
    public function getAttributeName(): string
    {
        return 'TimeZoneDefinition';
    }
}
