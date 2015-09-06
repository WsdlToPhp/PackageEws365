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
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $XrmOrganization;
    /**
     * Constructor method for ArrayOfXrmOrganizationItemType
     * @uses EwsArrayOfXrmOrganizationItemType::setXrmOrganization()
     * @param array $xrmOrganization
     */
    public function __construct(array $xrmOrganization = array())
    {
        $this
            ->setXrmOrganization($xrmOrganization);
    }
    /**
     * Get XrmOrganization value
     * @return array
     */
    public function getXrmOrganization()
    {
        return $this->XrmOrganization;
    }
    /**
     * Set XrmOrganization value
     * @param array $xrmOrganization
     * @return \Ews\ArrayType\EwsArrayOfXrmOrganizationItemType
     */
    public function setXrmOrganization(array $xrmOrganization = array())
    {
        $this->XrmOrganization = $xrmOrganization;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfXrmOrganizationItemType
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
