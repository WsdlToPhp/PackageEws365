<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsXrmOrganizationItemType[]
     */
    public $XrmOrganization;
    /**
     * Constructor method for ArrayOfXrmOrganizationItemType
     * @uses EwsArrayOfXrmOrganizationItemType::setXrmOrganization()
     * @param \Ews\StructType\EwsXrmOrganizationItemType[] $xrmOrganization
     */
    public function __construct(array $xrmOrganization = array())
    {
        $this
            ->setXrmOrganization($xrmOrganization);
    }
    /**
     * Get XrmOrganization value
     * @return \Ews\StructType\EwsXrmOrganizationItemType[]|null
     */
    public function getXrmOrganization()
    {
        return $this->XrmOrganization;
    }
    /**
     * This method is responsible for validating the values passed to the setXrmOrganization method
     * This method is willingly generated in order to preserve the one-line inline validation within the setXrmOrganization method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateXrmOrganizationForArrayConstraintsFromSetXrmOrganization(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfXrmOrganizationItemTypeXrmOrganizationItem) {
            // validation for constraint: itemType
            if (!$arrayOfXrmOrganizationItemTypeXrmOrganizationItem instanceof \Ews\StructType\EwsXrmOrganizationItemType) {
                $invalidValues[] = is_object($arrayOfXrmOrganizationItemTypeXrmOrganizationItem) ? get_class($arrayOfXrmOrganizationItemTypeXrmOrganizationItem) : sprintf('%s(%s)', gettype($arrayOfXrmOrganizationItemTypeXrmOrganizationItem), var_export($arrayOfXrmOrganizationItemTypeXrmOrganizationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The XrmOrganization property can only contain items of type \Ews\StructType\EwsXrmOrganizationItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set XrmOrganization value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmOrganizationItemType[] $xrmOrganization
     * @return \Ews\ArrayType\EwsArrayOfXrmOrganizationItemType
     */
    public function setXrmOrganization(array $xrmOrganization = array())
    {
        // validation for constraint: array
        if ('' !== ($xrmOrganizationArrayErrorMessage = self::validateXrmOrganizationForArrayConstraintsFromSetXrmOrganization($xrmOrganization))) {
            throw new \InvalidArgumentException($xrmOrganizationArrayErrorMessage, __LINE__);
        }
        $this->XrmOrganization = $xrmOrganization;
        return $this;
    }
    /**
     * Add item to XrmOrganization value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsXrmOrganizationItemType $item
     * @return \Ews\ArrayType\EwsArrayOfXrmOrganizationItemType
     */
    public function addToXrmOrganization(\Ews\StructType\EwsXrmOrganizationItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsXrmOrganizationItemType) {
            throw new \InvalidArgumentException(sprintf('The XrmOrganization property can only contain items of type \Ews\StructType\EwsXrmOrganizationItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->XrmOrganization[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsXrmOrganizationItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsXrmOrganizationItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsXrmOrganizationItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsXrmOrganizationItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsXrmOrganizationItemType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string XrmOrganization
     */
    public function getAttributeName()
    {
        return 'XrmOrganization';
    }
}
