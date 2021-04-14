<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmOrganizationItemType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfXrmOrganizationItemType extends AbstractStructArrayBase
{
    /**
     * The XrmOrganization
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsXrmOrganizationItemType[]
     */
    protected array $XrmOrganization = [];
    /**
     * Constructor method for ArrayOfXrmOrganizationItemType
     * @uses EwsArrayOfXrmOrganizationItemType::setXrmOrganization()
     * @param \StructType\EwsXrmOrganizationItemType[] $xrmOrganization
     */
    public function __construct(array $xrmOrganization = [])
    {
        $this
            ->setXrmOrganization($xrmOrganization);
    }
    /**
     * Get XrmOrganization value
     * @return \StructType\EwsXrmOrganizationItemType[]
     */
    public function getXrmOrganization(): array
    {
        return $this->XrmOrganization;
    }
    /**
     * This method is responsible for validating the values passed to the setXrmOrganization method
     * This method is willingly generated in order to preserve the one-line inline validation within the setXrmOrganization method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateXrmOrganizationForArrayConstraintsFromSetXrmOrganization(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfXrmOrganizationItemTypeXrmOrganizationItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmOrganizationItemTypeXrmOrganizationItem instanceof \StructType\EwsXrmOrganizationItemType) {
                $invalidValues[] = is_object($arrayOfXrmOrganizationItemTypeXrmOrganizationItem) ? get_class($arrayOfXrmOrganizationItemTypeXrmOrganizationItem) : sprintf('%s(%s)', gettype($arrayOfXrmOrganizationItemTypeXrmOrganizationItem), var_export($arrayOfXrmOrganizationItemTypeXrmOrganizationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The XrmOrganization property can only contain items of type \StructType\EwsXrmOrganizationItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set XrmOrganization value
     * @throws InvalidArgumentException
     * @param \StructType\EwsXrmOrganizationItemType[] $xrmOrganization
     * @return \ArrayType\EwsArrayOfXrmOrganizationItemType
     */
    public function setXrmOrganization(array $xrmOrganization = []): self
    {
        // validation for constraint: array
        if ('' !== ($xrmOrganizationArrayErrorMessage = self::validateXrmOrganizationForArrayConstraintsFromSetXrmOrganization($xrmOrganization))) {
            throw new InvalidArgumentException($xrmOrganizationArrayErrorMessage, __LINE__);
        }
        $this->XrmOrganization = $xrmOrganization;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsXrmOrganizationItemType|null
     */
    public function current(): ?\StructType\EwsXrmOrganizationItemType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsXrmOrganizationItemType|null
     */
    public function item($index): ?\StructType\EwsXrmOrganizationItemType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsXrmOrganizationItemType|null
     */
    public function first(): ?\StructType\EwsXrmOrganizationItemType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsXrmOrganizationItemType|null
     */
    public function last(): ?\StructType\EwsXrmOrganizationItemType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsXrmOrganizationItemType|null
     */
    public function offsetGet($offset): ?\StructType\EwsXrmOrganizationItemType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsXrmOrganizationItemType $item
     * @return \ArrayType\EwsArrayOfXrmOrganizationItemType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsXrmOrganizationItemType) {
            throw new InvalidArgumentException(sprintf('The XrmOrganization property can only contain items of type \StructType\EwsXrmOrganizationItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string XrmOrganization
     */
    public function getAttributeName(): string
    {
        return 'XrmOrganization';
    }
}
