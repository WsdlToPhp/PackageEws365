<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfLegacyDNsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfLegacyDNsType extends AbstractStructArrayBase
{
    /**
     * The LegacyDN
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $LegacyDN;
    /**
     * Constructor method for NonEmptyArrayOfLegacyDNsType
     * @uses EwsNonEmptyArrayOfLegacyDNsType::setLegacyDN()
     * @param array $legacyDN
     */
    public function __construct(array $legacyDN = array())
    {
        $this
            ->setLegacyDN($legacyDN);
    }
    /**
     * Get LegacyDN value
     * @return array
     */
    public function getLegacyDN()
    {
        return $this->LegacyDN;
    }
    /**
     * Set LegacyDN value
     * @param array $legacyDN
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    public function setLegacyDN(array $legacyDN = array())
    {
        $this->LegacyDN = $legacyDN;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LegacyDN
     */
    public function getAttributeName()
    {
        return 'LegacyDN';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType
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
