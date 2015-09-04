<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhysicalAddressDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPhysicalAddressDictionaryType extends AbstractStructBase
{
    /**
     * The Entry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsPhysicalAddressDictionaryEntryType
     */
    public $Entry;
    /**
     * Constructor method for PhysicalAddressDictionaryType
     * @uses EwsPhysicalAddressDictionaryType::setEntry()
     * @param \Ews\StructType\EwsPhysicalAddressDictionaryEntryType $entry
     */
    public function __construct(\Ews\StructType\EwsPhysicalAddressDictionaryEntryType $entry = null)
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryEntryType|null
     */
    public function getEntry()
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @param \Ews\StructType\EwsPhysicalAddressDictionaryEntryType $entry
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryType
     */
    public function setEntry(\Ews\StructType\EwsPhysicalAddressDictionaryEntryType $entry = null)
    {
        $this->Entry = $entry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryType
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
